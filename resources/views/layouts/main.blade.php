@include('layouts.header')
    @include('layouts.main-header')
    <!-- BEGIN CONTAINER -->
    <div class="page-container">
        @include('layouts.sidebar')
        <!-- BEGIN CONTENT -->
        <div class="page-content-wrapper">
            <!-- BEGIN CONTENT BODY -->
            <div class="page-content">
                @include('layouts.breadcrumb')
                @yield('main_content')
@include('layouts.footer')