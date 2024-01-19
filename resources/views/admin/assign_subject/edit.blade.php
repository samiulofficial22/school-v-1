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
                                <h3>Edit Assign Subject</h3>
                            </div>
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <form role="form" action="" method="post">
                                            @csrf
                                            <div class="form-group">
                                                <label>Class Name</label>
                                                <select class="form-control" name="class_id" id="">
                                                    <option >Select class</option>
                                                    @foreach ($getClass as $class)
                                                        <option {{($getRecord->class_id == $class->id) ? 'selected' : ''}} value="{{$class->id}}">{{$class->name}}</option>
                                                    @endforeach

                                                </select>
                                            </div>

                                            <div class="form-group">
                                                <label for="">Subject Name</label>
                                                @foreach ($getSubject as $subject)
                                                    @php
                                                        $checked = " ";
                                                    @endphp
                                                    @foreach ($getAssignSubjectId as $subjectAssign)
                                                        @if ($subjectAssign->subject_id == $subject->id)
                                                            @php
                                                                $checked = "checked";
                                                            @endphp
                                                        @endif
                                                    @endforeach
                                                    <div>
                                                        <label style="font-weight: 500;">
                                                            <input {{$checked}} type="checkbox" value="{{$subject->id}}" name="subject_id[]"> {{$subject->name}}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>


                                            <div class="form-group">
                                                <label for="">Status</label>
                                                <select class="form-control" name="status" id="">
                                                    <option  {{($getRecord->status == 0) ? 'selected' : ''}} value="0">Active</option>
                                                    <option  {{($getRecord->status == 1) ? 'selected' : ''}} value="1">InActive</option>
                                                </select>
                                            </div>



                                            <button type="submit" class="btn btn-default">Submit Button</button>
                                            {{-- <button type="reset" class="btn btn-default">Reset Button</button> --}}
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
