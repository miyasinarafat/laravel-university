@extends('layouts.main')

@section('css')

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('assets/plugins/datatables/css/datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/datatables/css/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL PLUGINS -->
@stop

@section('main_content')
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title">Department List</h1>
    <!-- END PAGE TITLE-->
    <div class="row">
        <div class="col-md-12">
            @include('partials.success')
            @include('partials.errors')
            <!-- BEGIN TABLE -->
            <div class="portlet light bordered">
                <div class="portlet-title">
                    <div class="caption font-dark">
                        <div class="btn-group">
                            <a href="{{ url('/departments/add') }}" class="btn sbold green"> Add New
                                <i class="fa fa-plus"></i>
                            </a>
                        </div>
                    </div>
                    <div class="tools"> </div>
                </div>
                <div class="portlet-body">
                    <table class="table table-striped table-bordered table-hover" id="sample_1">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Code</th>
                            <th>Name</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($departments as $department)
                            <tr>
                                <td>{{ $department->id++ }}</td>
                                <td>{{ $department->code }}</td>
                                <td>{{ $department->name }}</td>
                                <td>{{ $department->created_at }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <!-- END TABLE -->
        </div>
    </div>
@endsection

@section('script')

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/plugins/datatables/js/datatable.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables/js/datatables.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/datatables/js/datatables.bootstrap.js') }}" type="text/javascript"></script>
    <script src="{{ asset('assets/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

@stop

@section('script_bottom')

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <script src="{{ asset('assets/plugins/datatables/js/table-datatables-buttons.min.js') }}" type="text/javascript"></script>
    <!-- END PAGE LEVEL PLUGINS -->

@stop