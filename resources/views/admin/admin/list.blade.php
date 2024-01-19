@extends('layouts.app')
    @section('content')

    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row mt-5">
                <div class="col-lg-6 col-md-6">
                    <h1 class="page-header">Admin List </h1>
                </div>
                <div class="col-lg-6 col-md-6" style="text-align: right; margin-top:50px;">
                    <a href="{{ url('admin\admin\add') }}" class="btn btn-primary"> Add New Admin</a>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default" style="margin-bottom:0;">
                        <div class="panel-heading">
                            Search list
                        </div>
                    </div>
                    <div class="panel-body" style="border: 1px solid #e4dcdc;border-top: 0;margin-bottom: 15px;border-radius: 3px;">
                        <form action="" method="get" >
                            <div class="from-group col-md-3">
                                <label for="name">name</label>
                                <input type="text" name="name" value="{{Request::get('name')}}" placeholder="Name" class="form-control"/>
                            </div>
                            <div class="from-group col-md-3">
                                <label for="email">email</label>
                                <input type="text" name="email" value="{{Request::get('email')}}" placeholder="E-mail" class="form-control"/>
                            </div>
                            <div class="from-group col-md-3">
                                <label for="name">date</label>
                                <input type="date" name="date" value="{{Request::get('date')}}" class="form-control"/>
                            </div>
                            <div class="from-group col-md-3">
                                <button style="margin-top:23px; ;" class="btn btn-primary" type="submit">Search</button>
                                <a href="{{ url('admin/admin/list')}}" style="margin-top:23px; ;" class="btn btn-success" >Reset</a>
                            </div>
                        </form>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Admin List ( Total : {{$getRecord->total()}})
                        </div>
                        <!-- /.panel-heading -->
                        @include('_message')
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Created Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 1;
                                        @endphp
                                        @foreach ($getRecord as $item)

                                            <tr class="odd gradeX">
                                                <td>{{$i++}}</td>
                                                <td>{{$item->name}}</td>
                                                <td>{{$item->email}}</td>
                                                <td>{{date('d-m-y H:i A', strtotime($item->created_at))}}</td>
                                                <td>
                                                    <a href="{{url('admin/admin/edit/'.$item->id)}}" class="btn btn-primary">Edit</a>

                                                    <a href="{{url('admin/admin/delete/'.$item->id)}}" class="btn btn-danger">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <div style="float: right;">
                                    {!! $getRecord->appends(Illuminate\Support\Facades\Request::except('page'))->links() !!}
                                </div>

                            </div>

                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
    <!-- /#page-wrapper -->
    @endsection
