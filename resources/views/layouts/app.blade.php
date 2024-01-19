<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>{{ !empty($header_title) ? $header_title : '' }} School</title>

        <!-- Bootstrap Core CSS -->
        <link href="{{url('admin/css/bootstrap.min.css')}}" rel="stylesheet">

        <!-- MetisMenu CSS -->
        {{-- <link href="{{url('admin/css/metisMenu.min.css')}}" rel="stylesheet"> --}}

        <!-- Timeline CSS -->
        <link href="{{url('admin/css/timeline.css')}}" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="{{url('admin/css/startmin.css')}}" rel="stylesheet">

        <!-- Morris Charts CSS -->
        <link href="{{url('admin/css/morris.css')}}" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="{{url('admin/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{url('admin/css/custom.css')}}" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

        <div id="wrapper">

            @include('layouts.header')


            @yield('content')
            <!-- /#page-wrapper -->
            @include('layouts.footer')
        </div>
        <!-- /#wrapper -->



        <!-- jQuery -->
        <script src="{{url('admin/js/jquery.min.js')}}"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="{{url('admin/js/bootstrap.min.js')}}"></script>

        <!-- Metis Menu Plugin JavaScript -->
        {{-- <script src="{{url('admin/js/metisMenu.min.js')}}"></script> --}}

        <!-- Morris Charts JavaScript -->
        {{-- <script src="{{url('admin/js/raphael.min.js')}}"></script>
        <script src="{{url('admin/js/morris.min.js')}}"></script>
        <script src="{{url('admin/js/morris-data.js')}}"></script> --}}

        <!-- DataTables JavaScript -->
        <script src="{{url('admin/js/dataTables/jquery.dataTables.min.js')}}"></script>
        <script src="{{url('admin/js/dataTables/dataTables.bootstrap.min.js')}}"></script>
        <!-- Custom Theme JavaScript -->
        <script src="{{url('admin/js/startmin.js')}}"></script>
        <!-- Page-Level Demo Scripts - Tables - Use for reference -->
        <script>
            $(document).ready(function () {
                $('#dataTables-example').DataTable({
                    responsive: true
                });
            });
        </script>

    </body>

</html>

