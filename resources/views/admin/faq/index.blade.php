@extends('layouts.adminbase')

@section('title', 'FAQ List')


@section('content')


    <div class="main-panel">
        <div class="content-wrapper">
            <div class="page-header">
                <h3 class="page-title"></h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">FAQ List</li>
                    </ol>
                </nav>
            </div>
            <div class="card">
                <div class="card-header">
                    <a href="{{route('admin.faq.create')}}" class="btn btn-gradient-info btn-rounded btn-fw">Add
                        Question</a>
                </div>
                <div class="card">
                    <div class="card-body">
                        <table class="table table-bordered">
                            <h3 class="page-title">FAQ List</h3>
                            <thead>
                            <tr>
                                <th style="width: 10px">Id</th>

                                <th>Question</th>
                                <th>Answer</th>
                                <th>Status</th>
                                <th style="width: 40px">Show</th>
                                <th style="width: 40px">Delete</th>
                                <th style="width: 40px">Edit</th>

                            </tr>
                            </thead>
                            </tbody>
                            @foreach($data as $rs)
                                <tr>
                                    <td>{{$rs->id}}</td>
                                    <td>{{$rs->questions}}</td>
                                    <td>{!! $rs->answer !!}</td>
                                    <td>{{$rs->status}}</td>
                                    <td>
                                        <a href="{{route('admin.faq.show',['id'=>$rs->id])}}"
                                           class="btn btn-gradient-primary btn-rounded btn-fw"
                                           onclick="return !window.open(this.href,'','top=50 left=100 width=1100,height=700')">
                                            Show
                                        </a>
                                    </td>
                                    <td><a href="{{route('admin.faq.destroy',['id'=>$rs->id])}}"
                                           class="btn btn-gradient-danger btn-rounded btn-fw"
                                           onclick="return confirm('Deleting !! Are you sure?')">Delete</a>
                                    </td>
                                    <td><a href="{{route('admin.faq.edit',['id'=>$rs->id])}}"
                                           class="btn btn-gradient-success btn-rounded btn-fw">Edit</a></td>


                                </tr>

                            @endforeach

                        </table>
                    </div>
                </div>

            </div>

@endsection
