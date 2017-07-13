@extends('layouts.main')

@section('main_content')
    <!-- BEGIN PAGE TITLE-->
    <h1 class="page-title">@if(isset($department->id)) Update Department @else Create New Department @endif</h1>
    <!-- END PAGE TITLE-->
    <div class="row">
        <div class="col-md-12">
            @include('partials.success')
            @include('partials.errors')
            <!-- BEGIN FORM-->
            <form action="@if(isset($department->id)){{ url('/departments/update') }}@else{{ url('/departments/add') }}@endif" method="post" class="form-horizontal">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ app('request')->id }}">
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-md-3 control-label">Department Code</label>
                        <div class="col-md-4">
                            <input type="number" class="form-control" name="code" value="{{ isset($department->code) ? $department->code : old('code') }}" placeholder="Enter Department Code" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label">Department Name</label>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="name" value="{{ isset($department->name) ? $department->name : old('name') }}" placeholder="Enter Department Name" required>
                        </div>
                    </div>
                </div>
                <div class="form-actions top">
                    <div class="row">
                        <div class="col-md-offset-3 col-md-9">
                            <button type="submit" class="btn green">Submit</button>
                            <a href="{{ url('/departments') }}" class="btn default">Cancel</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- END FORM-->
        </div>
    </div>
@endsection