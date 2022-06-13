@extends('layouts.adminwindow')

@section('title', 'Show Messages: '.$data->title)



@section('content')



    <div class="card">
        <div class="card-body">


            <div class="card">

                <h3 class="card-title">Detail Messages Data</h3>

                <div class="card-body p-0">
                    <table class="table table-striped">

                        <tr>
                            <th>Detail Comment</th>

                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th style="width: 150px">Id</th>
                            <td>{{$data->id}}</td>

                        </tr>
                        <tr>
                            <th>Transfer</th>
                            <td>
                                {{$data->project->title}}</td>

                        </tr>
                        <tr>
                            <th>Subject</th>
                            <td>
                                {{$data->subject}}</td>

                        </tr>

                        <tr>
                            <th>Rate</th>
                            <td>{{$data->rate}}</td>

                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>{{$data->status}}</td>

                        </tr>
                        <tr>
                            <th>Ip number</th>
                            <td>{{$data->IP}}</td>

                        </tr>
                        <tr>
                            <th>Created Date</th>
                            <td>{{$data->updated_at}}</td>

                        </tr>
                        <tr>
                            <th>Update Date</th>
                            <td>{{$data->created_at}}</td>

                        </tr>
                        <tr>
                            <th>Status</th>
                            <td>
                                <form action="{{route('admin.comment.update',['id'=>$data->id])}}" method="post"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <select class="form-control" name="status">
                                        <option selected>{{$data->status}}</option>
                                        <option>True</option>
                                        <option>False</option>
                                    </select>
                                    </br>

                            </td>
                        <tr>
                            <th>
                                <button type="submit" class="btn btn-success mb-3">Update</button>
                            </th>
                            </form>

                        </tr>
                        </tr>
                    </table>
                </div>

            </div>
        </div>
    </div></div>
@endsection
