<!-- BEGIN SIDEBAR -->
<div class="page-sidebar-wrapper">
    <!-- DOC: Set data-auto-scroll="false" to disable the sidebar from auto scrolling/focusing -->
    <!-- DOC: Change data-auto-speed="200" to adjust the sub menu slide up/down speed -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu" data-auto-scroll="true" data-slide-speed="200">
            <!-- DOC: To remove the sidebar toggler from the sidebar you just need to completely remove the below "sidebar-toggler-wrapper" LI element -->
            <li class="sidebar-toggler-wrapper">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler">
                </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <!-- DOC: To remove the search box from the sidebar you just need to completely remove the below "sidebar-search-wrapper" LI element -->
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <!-- DOC: Apply "sidebar-search-bordered" class the below search form to have bordered search box -->
                <!-- DOC: Apply "sidebar-search-bordered sidebar-search-solid" class the below search form to have bordered & solid search box -->
                <form class="sidebar-search " action="extra_search.html" method="POST">
                    <a href="javascript:;" class="remove">
                        <i class="icon-close"></i>
                    </a>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>
            <li class="start active open">
                <a href="{{URL::route('home')}}">
                    <i class="fa fa-home"></i>
                    <span class="title">Dashboard</span>
                    <span class="selected"></span>
                </a>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-graduation-cap"></i>
                    <span class="title">Academics</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-book"></i>
                            Add Subject</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-book-open"></i>
                            View Subject</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-book-open"></i>
                            Exams</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="icon-calendar"></i>
                            Calender</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-child"></i>
                    <span class="title">Student</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            Add Student</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-share"></i>
                            View Student</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-child"></i>
                    <span class="title">Teacher</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            Add Teacher</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-share"></i>
                            View Teacher
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-child"></i>
                    <span class="title">Sticker</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            Add Sticker</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-share"></i>
                            View Sticker
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-calendar-o"></i>
                    <span class="title">Event</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            Add Event</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-share"></i>
                            View Event
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="icon-bar-chart"></i>
                    <span class="title">Report</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            Student</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-share"></i>
                            Teacher
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-share"></i>
                            Progress

                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-share"></i>
                            Fees
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Setting</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            Profile</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-share"></i>
                            Manage Color
                        </a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="javascript:;">
                    <i class="fa fa-cogs"></i>
                    <span class="title">Setting</span>
                    <span class="arrow "></span>
                </a>
                <ul class="sub-menu">
                    <li>
                        <a href="#">
                            <i class="fa fa-plus"></i>
                            Profile</a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-share"></i>
                            Manage Color
                        </a>
                    </li>
                </ul>
            </li>
            <li class="last ">
                <a href="#">
                    <i class="fa fa-file"></i>
                    <span class="title">Future</span>
                </a>
            </li>
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
</div>
<!-- END SIDEBAR -->