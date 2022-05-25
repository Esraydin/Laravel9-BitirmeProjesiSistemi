@extends('layouts.adminwindow')

@section('title', 'Project Image Gallery')



@section('content')

    <div class="page-header">
        <h3 class="page-title"></h3>
          <div class="card-body">
            <table class="table table-bordered">
                <h3 class="page-title">Project Image List</h3>
                <thead>
                <tr>
                    <th style="width: 10px">Id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th style="width: 40px">Update</th>
                    <th style="width: 40px">Delete</th>


                </tr>
                </thead>
                <tbody>
                @foreach($data as $rs)
                <tr>
                    <td>{{$rs->id}}</td>
                    <td>{{$rs->title}}</td>
                    <td>
                        @if($rs->image)
                            <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                        @endif
                    </td>
                    <td><img src="{{asset('assets')}}/admin/assets/images/images.png" style="height: 50px" ></td>

                    <td>{{$rs->status}}</td>
                    <td><a href="{{route('admin.project.edit',['id'=>$rs->id])}}" class="gradient-info btn-rounded btn-fw">Edit</a> </td>
                    <td><a href="{{route('admin.project.destroy',['id'=>$rs->id])}}" class="gradient-danger btn-rounded btn-fw"
                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a> </td>


                </tr>

                @endforeach

                </tbody>
            </table>
        </div>

    </div>
@endsection

