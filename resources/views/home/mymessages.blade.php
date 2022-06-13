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
                        <h3 class="page-title">Message List</h3>
                        <thead>
                        <tr>
                            <th style="width: 10px">Id</th>

                            <th>Name</th>
                            <th>Phone</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th style="width: 40px">Show</th>
                            <th style="width: 40px">Delete</th>

                        </tr>
                        </thead>
                        </tbody>
                        @foreach($data as $rs)
                            <tr>
                                <td>{{$rs->id}}</td>
                                <td>{{$rs->name}}</td>
                                <td>{{$rs->phone}}</td>
                                <td>{{$rs->email}}</td>
                                <td>{{$rs->subject}}</td>
                                <td>{{$rs->status}}</td>


                                <td>
                                    <a href="{{route('admin.message.show',['id'=>$rs->id])}}"
                                       class="btn btn-gradient-primary btn-rounded btn-fw"
                                       onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                        Show
                                    </a>
                                </td>
                                <td><a href="{{route('admin.message.destroy',['id'=>$rs->id])}}"
                                       class="btn btn-gradient-danger btn-rounded btn-fw"
                                       onclick="return confirm('Deleting !! Are you sure?')">Delete</a>
                                </td>


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


