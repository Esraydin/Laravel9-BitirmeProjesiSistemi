@extends('layouts.frontbase')

@section('title','User Panel')




@section('content')
    <section id="inner-headline">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <div class="inner-heading">
                        <h2>Blank Page</h2>
                    </div>
                </div>
                <div class="span8">
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="icon-home"></i></a><i class="icon-angle-right"></i></li>
                        <li><a href="{{route('home')}}">Home</a><i class="icon-angle-right"></i></li>
                        <li class="active">Blank Page</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section id="content">
        <div class="span8">
            <aside class="left-sidebar">
                <div class="widget">


                    <table class="table table-bordered">
                        <h3 class="page-title">Project List</h3>
                        <div class="card-header">
                            <a href="{{route('userpanel.create')}}" class="btn btn-gradient-info btn-rounded btn-fw">Add
                                Project</a>
                        </div>
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>

                            <th>Title</th>
                            <th>Keyword</th>
                            <th>Image</th>
                            <th>Image Gallery</th>
                            <th>Status</th>
                            <th style="width: 40px">Edit</th>
                            <th style="width: 40px">Delete</th>
                            <th style="width: 40px">Show</th>

                        </tr>
                        </thead>
                        </tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>
                                    {{\App\Http\Controllers\AdminPanel\CategoryController::getParentsTree($rs->category,$rs->category->title)}}
                                </td>
                                <td>{{$rs->title}}</td>

                                <td>
                                    @if($rs->image)
                                        <img src="{{Storage::url($rs->image)}}" style="height: 50px">
                                    @endif
                                </td>
                                <td><a href="{{route('admin.image.index',['pid'=>$rs->id])}}"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                        <img src="{{asset('assets')}}/admin/assets/images/images.png"
                                             style="height: 40px"></td>
                                </a>
                                <td>{{$rs->status}}</td>
                                <td><a href="{{route('admin.project.edit',['id'=>$rs->id])}}"
                                       class="btn btn-gradient-info btn-rounded btn-fw">Edit</a></td>
                                <td><a href="{{route('admin.project.destroy',['id'=>$rs->id])}}"
                                       class="btn btn-gradient-danger btn-rounded btn-fw"
                                       onclick="return confirm('Deleting !! Are you sure?')">Delete</a></td>
                                <td><a href="" class="btn btn-gradient-success btn-rounded btn-fw">Show</a></td>

                            </tr>

                        @endforeach

                    </table>
                </div>
            </aside>
        </div>


        <div class="span4">
            @include('home.user.usermenu')


        </div>


        <div class="row">

        </div>
    </section>
@endsection


