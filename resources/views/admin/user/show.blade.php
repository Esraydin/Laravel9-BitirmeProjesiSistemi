@extends('layouts.adminwindow')

@section('title', 'Show Messages: '.$data->title)



@section('content')



    <div class="card">
        <div class="card-body">

            @csrf

            <div class="card">

                <h3 class="card-title">Detail Messages Data</h3>

                <div class="card-body p-0">
                    <table class="table table-striped">

                        <tr>
                            <th style="width: 200px">Id</th>
                            <td>{{$data->id}}</td>
                        </tr>

                        <tr>
                            <th>Name & Surname</th>
                            <td>{{$data->name}}</td>

                        </tr>

                        <tr>
                            <th>Email</th>
                            <td>{{$data->email}}</td>

                        </tr>
                        <tr>
                            <th>Role</th>
                            <td>
                                @foreach($data->roles as $role)
                                    {{$role->name}}<a
                                        href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}"
                                        class="btn btn-danger" onclick="return confirm('deleting are you sure')">[X]</a>
                                @endforeach
                            </td>
                        </tr>

                        <tr>

                            <th>Role Change:</th>
                            <td>
                                <form class="form" action="{{route('admin.user.addrole',['id'=>$data->id])}}"
                                      method="post" enctype="multipart/form-data">
                                    @csrf
                                    <select name="role_id">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}">{{$role->name}}</option>
                                        @endforeach
                                    </select>
                                    <button type="submit" class="btn btn-gradient-primary me-2">Update Note</button>
                                </form>
                            </td>


                        </tr>
                    </table>
                </div>

            </div>

        </div>
    </div></div>
@endsection
