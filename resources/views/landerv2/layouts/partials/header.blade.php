<header id="header" class="navbar">
    <!-- START navbar header -->
    <div class="navbar-header">
        <!-- Brand -->
        <a class="navbar-brand" href="/">
            <span class="logo-figure"></span>
            <span class="logo-text"></span>
        </a>
        <!--/ Brand -->
    </div>
    <!--/ END navbar header -->

    <!-- START Toolbar -->
    <div class="navbar-toolbar clearfix">
        <!-- START Left nav -->
        <ul class="nav navbar-nav navbar-left">
            <!-- Sidebar shrink -->
            <li class="hidden-xs hidden-sm">
                <a href="javascript:void(0);" class="sidebar-minimize" data-toggle="minimize" title="Minimize sidebar">
                    <span class="meta">
                        <span class="icon"></span>
                    </span>
                </a>
            </li>
            <!--/ Sidebar shrink -->

            <!-- Offcanvas left: This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <li class="navbar-main hidden-lg hidden-md hidden-sm">
                <a href="javascript:void(0);" data-toggle="sidebar" data-direction="ltr" rel="tooltip" title="Menu sidebar">
                    <span class="meta">
                        <span class="icon"><i class="ico-paragraph-justify3"></i></span>
                    </span>
                </a>
            </li>
            <!--/ Offcanvas left -->

            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown</a>
                    <ul class="dropdown-menu">
                        <li><a href="#">First item</a></li>
                        <li><a href="#">Second item</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Third item</a></li>
                    </ul>
            </li>

        </ul>
        <!--/ END Left nav -->

        <!-- START navbar form -->
        <div class="navbar-form navbar-left dropdown" id="dropdown-form">
            <form action="" role="search">
                <div class="has-icon">
                    <input type="text" class="form-control" placeholder="Search application...">
                    <i class="ico-search form-control-icon"></i>
                </div>
            </form>
        </div>
        <!-- START navbar form -->

        <!-- START Right nav -->
        <ul class="nav navbar-nav navbar-right">
            <!-- Notification dropdown -->
            <li class="dropdown custom" id="header-dd-notification">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="meta">
                        <span class="icon"><i class="ico-envelop"></i></span>
                    </span>
                </a>

                <!-- Dropdown menu -->
                <div class="dropdown-menu" role="menu">
                    <div class="dropdown-header">
                        <span class="title">Notification <span class="count"></span></span>
                        <span class="option text-right"><a href="javascript:void(0);">Clear all</a></span>
                    </div>
                    <div class="dropdown-body slimscroll">

                        <!-- Message list -->
                        <div class="media-list">
                            <a href="javascript:void(0);" class="media read border-dotted">
                                <span class="media-object pull-left">
                                    <i class="ico-basket2 bgcolor-info"></i>
                                </span>
                                <span class="media-body">
                                    <span class="media-text">Duis aute irure dolor in <span class="text-primary semibold">reprehenderit</span> in voluptate.</span>
                                    <!-- meta icon -->
                                    <span class="media-meta pull-right">2d</span>
                                    <!--/ meta icon -->
                                </span>
                            </a>

                            <a href="/page/message/rich.html" class="media border-dotted read">
                                <span class="pull-left">
                                    <img src="/image/avatar/avatar1.jpg" class="media-object img-circle" alt="">
                                </span>
                                <span class="media-body">
                                    <span class="media-heading">Martina Poole</span>
                                    <span class="media-text ellipsis nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod.</span>
                                    <!-- meta icon -->
                                    <span class="media-meta"><i class="ico-reply"></i></span>
                                    <span class="media-meta"><i class="ico-attachment"></i></span>
                                    <span class="media-meta pull-right">20m</span>
                                    <!--/ meta icon -->
                                </span>
                            </a>

                            <a href="javascript:void(0);" class="media read border-dotted">
                                <span class="media-object pull-left">
                                    <i class="ico-call-incoming"></i>
                                </span>
                                <span class="media-body">
                                    <span class="media-text">Aliquip ex ea commodo consequat.</span>
                                    <!-- meta icon -->
                                    <span class="media-meta pull-right">1w</span>
                                    <!--/ meta icon -->
                                </span>
                            </a>

                            <a href="javascript:void(0);" class="media read border-dotted">
                                <span class="media-object pull-left">
                                    <i class="ico-alarm2"></i>
                                </span>
                                <span class="media-body">
                                    <span class="media-text">Excepteur sint <span class="text-primary semibold">occaecat</span> cupidatat non.</span>
                                    <!-- meta icon -->
                                    <span class="media-meta pull-right">12w</span>
                                    <!--/ meta icon -->
                                </span>
                            </a>

                            <a href="/page/message/rich.html" class="media border-dotted read">
                                <span class="pull-left">
                                    <img src="/image/avatar/avatar9.jpg" class="media-object img-circle" alt="">
                                </span>
                                <span class="media-body">
                                    <span class="media-heading">Tamara Moon</span>
                                    <span class="media-text ellipsis nm">Aliquam ultrices iaculis odio. Nam interdum enim non nisi. Aenean eget metus.</span>
                                    <!-- meta icon -->
                                    <span class="media-meta"><i class="ico-attachment"></i></span>
                                    <span class="media-meta pull-right">2w</span>
                                    <!--/ meta icon -->
                                </span>
                            </a>

                            <a href="javascript:void(0);" class="media read border-dotted">
                                <span class="media-object pull-left">
                                    <i class="ico-checkmark3 bgcolor-success"></i>
                                </span>
                                <span class="media-body">
                                    <span class="media-text">Lorem ipsum dolor sit amet, <span class="text-primary semibold">consectetur</span> adipisicing elit.</span>
                                    <!-- meta icon -->
                                    <span class="media-meta pull-right">14w</span>
                                    <!--/ meta icon -->
                                </span>
                            </a>

                            <a href="/page/message/rich.html" class="media border-dotted read">
                                <span class="pull-left">
                                    <img src="/image/avatar/avatar5.jpg" class="media-object img-circle" alt="">
                                </span>
                                <span class="media-body">
                                    <span class="media-heading">Noelani Blevins</span>
                                    <span class="media-text ellipsis nm">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis.</span>
                                    <!-- meta icon -->
                                    <span class="media-meta pull-right">2d</span>
                                    <!--/ meta icon -->
                                </span>
                            </a>

                            <a href="/page/message/rich.html" class="media border-dotted read">
                                <span class="pull-left">
                                    <img src="/image/avatar/avatar3.jpg" class="media-object img-circle" alt="">
                                </span>
                                <span class="media-body">
                                    <span class="media-heading">Walter Foster</span>
                                    <span class="media-text ellipsis nm">Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</span>
                                    <!-- meta icon -->
                                    <span class="media-meta"><i class="ico-attachment"></i></span>
                                    <span class="media-meta pull-right">21h</span>
                                    <!--/ meta icon -->
                                </span>
                            </a>
                        </div>
                        <!--/ Message list -->
                    </div>
                </div>
                <!--/ Dropdown menu -->
            </li>
            <!--/ Notification dropdown -->

            <!-- Profile dropdown -->
            <li class="dropdown profile">
                <a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown">
                    <span class="meta">
                        <span class="avatar"><img src="/image/avatar/avatar7.jpg" class="img-circle" alt="" /></span>
                        <span class="text hidden-xs hidden-sm pl5">AAA</span>
                    </span>
                </a>
                <ul class="dropdown-menu" role="menu">
                    <li><a href="javascript:void(0);"><span class="icon"><i class="ico-user-plus2"></i></span> My Accounts</a></li>
                    <li><a href="javascript:void(0);"><span class="icon"><i class="ico-cog4"></i></span> Profile Setting</a></li>
                    <li><a href="javascript:void(0);"><span class="icon"><i class="ico-question"></i></span> Help</a></li>
                    <li class="divider"></li>
                    <li><a href="javascript:void(0);"><span class="icon"><i class="ico-exit"></i></span> Sign Out</a></li>
                </ul>
            </li>
            <!-- Profile dropdown -->
            <!-- Offcanvas right This menu will take position at the top of template header (mobile only). Make sure that only #header have the `position: relative`, or it may cause unwanted behavior -->
            <li class="navbar-main">
                <a href="javascript:void(0);" data-toggle="sidebar" data-direction="rtl" rel="tooltip" title="Feed / contact sidebar">
                    <span class="meta">
                        <span class="icon"><i class="ico-users3"></i></span>
                    </span>
                </a>
            </li>
            <!--/ Offcanvas right -->

        </ul>
        <!--/ END Right nav -->
    </div>
    <!--/ END Toolbar -->
</header>