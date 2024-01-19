@extends('layouts.app')
    @section('content')
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Forms</h1>
                    </div>
                    <!-- /.col-lg-12 -->
                </div>
                <!-- /.row -->
                <div class="row">
                    <div class="col-lg-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h3>Edit Admin</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label>Name:</label>
                                                <input name="name" type="text" value="{{old('name',$getRecord->name)}}" required class="form-control" placeholder="name">

                                            </div>
                                            <div class="form-group">
                                                <label>E-mail</label>
                                                <input class="form-control" type="email" value="{{old('email',$getRecord->email)}}" name="email" required placeholder="mail@mail.com">
                                                <div style="color: red;">{{$errors->first('email')}}</div>
                                            </div>
                                            <div class="form-group">
                                                <label>Password</label>
                                                <input class="form-control" type="text"  name="password"  placeholder="*******">
                                                <p>Do you want to change password so please add new password</p>
                                            </div>

                                            <button type="submit" class="btn btn-default">Update</button>
                                        </form>
                                    </div>

                                </div>
                                <!-- /.row (nested) -->
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
    @endsection
