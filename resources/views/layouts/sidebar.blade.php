
<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
            <li class="sidebar-toggler-wrapper hide">
                <div class="sidebar-toggler">
                    <span></span>
                </div>
            </li>
            <!-- END SIDEBAR TOGGLER BUTTON -->
            <li class="nav-item">
                <a href="/" class="nav-link nav-toggle">
                    <i class="icon-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="arrow"></span>
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-th"></i>
                    <span class="title">Department</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="{{ url('/departments') }}" class="nav-link ">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span class="title">View All</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('/departments/add') }}" class="nav-link">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="title">Add New</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href="{{ url('/departments/trash') }}" class="nav-link">
                            <i class="fa fa-trash"></i>
                            <span class="title">Trash List</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item ">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="icon-book-open"></i>
                    <span class="title">Course</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item ">
                        <a href="index.html" class="nav-link ">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span class="title">View All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="title">Add New</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="title">Enroll In a Course</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="title">Unassign All Courses</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-comment"></i>
                    <span class="title">Teacher</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span class="title">View All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="title">Add New</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link nav-toggle">
                    <i class="icon-book-open"></i>
                    <span class="title">Course Assign</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link nav-toggle">
                    <i class="icon-book-open"></i>
                    <span class="title">Course Statics</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-comment"></i>
                    <span class="title">Student</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span class="title">View All</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="title">Register</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-comment"></i>
                    <span class="title">Classrooms</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span class="title">Class Schedule & Room Allocation</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="title">Allocate Classrooms</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="title">Unallocate All Classrooms</span>
                        </a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="javascript:;" class="nav-link nav-toggle">
                    <i class="glyphicon glyphicon-comment"></i>
                    <span class="title">Result</span>
                    <span class="arrow"></span>
                </a>
                <ul class="sub-menu">
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-list-alt"></i>
                            <span class="title">Save Result</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link ">
                            <i class="glyphicon glyphicon-plus"></i>
                            <span class="title">View Result</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>
<!-- END SIDEBAR -->