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
    <h1 class="page-title">@if(!isset($trashDepartments)) Department List @else Trash List @endif</h1>
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
                            @if(!isset($trashDepartments))
                            <a href="{{ url('/departments/add') }}" class="btn sbold green"> Add New
                                <i class="fa fa-plus"></i>
                            </a>
                            @else
                                <a href="{{ url('/departments') }}" class="btn sbold green"> Back to Index
                                </a>
                            @endif
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
                        @php $i = 0; @endphp
                        @if(isset($trashDepartments) && !$trashDepartments->isEmpty())
                            @foreach($trashDepartments as $department)
                                @php $i++; @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $department->code }}</td>
                                    <td>{{ $department->name }}</td>
                                    <td>
                                        <a href="{{ url('/departments/restore/'.$department->id) }}" class="btn sbold yellow" onclick="return confirm('Are You Sure!')">Restore</a>
                                        <a href="{{ url('/departments/delete-permanently/'.$department->id) }}" class="btn sbold red" onclick="return confirm('Are You Sure!')">Delete Permanently</a>
                                    </td>
                                </tr>
                            @endforeach
                            @endif
                        @if(isset($departments) && !$departments->isEmpty())
                            @foreach($departments as $department)
                            @php $i++; @endphp
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $department->code }}</td>
                                <td>{{ $department->name }}</td>
                                <td>
                                    <a href="{{ url('/departments/edit/'.$department->id) }}" class="btn sbold blue">Edit</a>
                                    <a href="{{ url('/departments/delete/'.$department->id) }}" class="btn sbold red" onclick="return confirm('Are You Sure!')">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        @endif

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