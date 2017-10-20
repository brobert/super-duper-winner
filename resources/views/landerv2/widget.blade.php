<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
    <head>
        <!-- START META SECTION -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Lander.v2 - Bootstrap WebApp & Dashboard</title>
        <meta name="author" content="optimisticdesigns">
        <meta name="description" content="Lander.v2 Admin is a clean and flat backend built with twitter bootstrap">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/image/touch/apple-touch-icon-144x144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/image/touch/apple-touch-icon-114x114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/image/touch/apple-touch-icon-72x72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/image/touch/apple-touch-icon-57x57-precomposed.png">
        <link rel="shortcut icon" href="/image/favicon.ico">
        <!--/ END META SECTION -->

        <!-- START STYLESHEETS -->
        <!-- Plugins stylesheet : optional -->
        <link rel="stylesheet" href="/plugins/owl/css/owl-carousel.css">
        <link rel="stylesheet" href="/plugins/flot/css/flot.css">
        <!--/ Plugins stylesheet : optional -->

        <!-- Application stylesheet : mandatory -->
        <link rel="stylesheet" href="/stylesheet/bootstrap.css">
        <link rel="stylesheet" href="/stylesheet/layout.css">
        <link rel="stylesheet" href="/stylesheet/uielement.css">
        <!--/ Application stylesheet -->

        <!-- Theme stylesheet -->
        <link rel="stylesheet" href="/stylesheet/themes/theme.css">
        <!--/ Theme stylesheet -->

        <!-- modernizr script -->
        <script type="text/javascript" src="/plugins/modernizr/js/modernizr.js"></script>
        <!--/ modernizr script -->
        <!-- END STYLESHEETS -->
    </head>
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
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
                                <span class="text hidden-xs hidden-sm pl5">John Doe</span>
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
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
        <aside class="sidebar sidebar-left sidebar-menu">
            <!-- START Sidebar Content -->
            <section class="content slimscroll">
                <!-- START Template Navigation/Menu -->
                <ul class="topmenu topmenu-responsive" data-toggle="menu">
                    <li>
                        <a href="/" data-target="#dashboard" data-parent=".topmenu">
                            <span class="figure"><i class="ico-home2"></i></span>
                            <span class="text">Dashboard</span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#layout" data-parent=".topmenu">
                            <span class="figure"><i class="ico-grid"></i></span>
                            <span class="text">Layouts</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="layout" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Page Layout</li>
                            <li >
                                <a href="/layout/default.html">
                                    <span class="text">Default</span>
                                </a>
                            </li>
                            <li >
                                <a href="/layout/with/footer.html">
                                    <span class="text">With footer</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="/layout/reveal/header.html">
                                    <span class="text">Reveal header</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="/layout/fixed/header.html">
                                    <span class="text">Fixed header</span>
                                </a>
                            </li>
                            <li >
                                <a href="/layout/fixed/sidebar.html">
                                    <span class="text">Fixed sidebar</span>
                                </a>
                            </li>
                            <li >
                                <a href="/layout/navbar/collapse.html">
                                    <span class="text">Navbar Collapse</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li class="active">
                        <a href="/widget.html" data-parent=".topmenu">
                            <span class="figure"><i class="ico-tasks"></i></span>
                            <span class="text">Stats & Widgets</span>
                            <span class="number"><span class="label label-danger">6</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screen4"></i></span>
                            <span class="text">UI Elements</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Components</li>
                            <li >
                                <a href="/component/animation.html">
                                    <span class="text">Animation</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/button.html">
                                    <span class="text">Button</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/carousel.html">
                                    <span class="text">Carousel</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/grid.html">
                                    <span class="text">Grid</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/icon.html">
                                    <span class="text">Icon</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/loading.html">
                                    <span class="text">Loading indicator</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/notification.html">
                                    <span class="text">Notification</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/panel.html">
                                    <span class="text">Panel</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/pricing.html">
                                    <span class="text">Pricing table / box</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/slider.html">
                                    <span class="text">Slider</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/sortable.html">
                                    <span class="text">Sortable</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/tabsaccordion.html">
                                    <span class="text">Tabs &amp; accordion</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/typography.html">
                                    <span class="text">Typography</span>
                                </a>
                            </li>
                            <li >
                                <a href="/component/others.html">
                                    <span class="text">Miscelleneous</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#form" data-parent=".topmenu">
                            <span class="figure"><i class="ico-file"></i></span>
                            <span class="text">Forms</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="form" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Forms</li>
                            <li >
                                <a href="/form/element.html">
                                    <span class="text">Element</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="/form/layout.html">
                                    <span class="text">Layout</span>
                                </a>
                            </li>
                            <li >
                                <a href="/form/validation.html">
                                    <span class="text">Validation</span>
                                </a>
                            </li>
                            <li >
                                <a href="/form/wizard.html">
                                    <span class="text">Wizard</span>
                                </a>
                            </li>
                            <li >
                                <a href="/form/wysiwyg.html">
                                    <span class="text">WYSIWYG Editor</span>
                                </a>
                            </li>
                            <li >
                                <a href="/form/xeditable.html">
                                    <span class="text">X-editable</span>
                                </a>
                            </li>
                            <li >
                                <a href="/form/fileupload.html">
                                    <span class="text">File Upload</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="/form/imagecrop.html">
                                    <span class="text">Image Crop</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#table" data-parent=".topmenu">
                            <span class="figure"><i class="ico-table22"></i></span>
                            <span class="text">Tables</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="table" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Tables</li>
                            <li >
                                <a href="/table/default.html">
                                    <span class="text">Basic Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="/table/datatable.html">
                                    <span class="text">Data Tables</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#page" data-parent=".topmenu">
                            <span class="figure"><i class="ico-copy4"></i></span>
                            <span class="text">Miscelleneous</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="page" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Miscelleneous</li>
                            <li >
                                <a href="/page/starter.html">
                                    <span class="text">Blank </span>
                                </a>
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#blog" data-parent="#page">
                                    <span class="text">Blog page</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="blog" class="submenu collapse ">
                                    <li >
                                        <a href="/page/blog/default.html"><span class="text">Blog default</span></a>
                                    </li>
                                    <li >
                                        <a href="/page/blog/grid.html"><span class="text">Blog grid</span></a>
                                    </li>
                                    <li >
                                        <a href="/page/blog/single.html"><span class="text">Single post</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="/page/calendar.html">
                                    <span class="text">Calendar</span>
                                </a>
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#email" data-parent="#page">
                                    <span class="text">Email</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="email" class="submenu collapse ">
                                    <li >
                                        <a href="/page/email/inbox.html"><span class="text">Inbox</span></a>
                                    </li>
                                    <li >
                                        <a href="/page/email/view.html"><span class="text">View</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#error" data-parent="#page">
                                    <span class="text">Error</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="error" class="submenu collapse ">
                                    <li >
                                        <a href="/page/error/404.html"><span class="text">Not Found (404)</span></a>
                                    </li>
                                    <li >
                                        <a href="/page/error/403.html"><span class="text">Forbidden (403)</span></a>
                                    </li>
                                    <li >
                                        <a href="/page/error/500.html"><span class="text">Server Error (500)</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="/page/faq.html">
                                    <span class="text">FAQ</span>
                                </a>
                            </li>
                            <li >
                                <a href="/page/invoice.html">
                                    <span class="text">Invoice</span>
                                </a>
                            </li>
                            <li >
                                <a href="/page/profile.html">
                                    <span class="text">Profile</span>
                                </a>
                            </li>
                            <li >
                                <a href="/page/login.html">
                                    <span class="text">Login</span>
                                </a>
                            </li>
                            <li >
                                <a href="/page/login/returned.html">
                                    <span class="text">Lock Screen</span>
                                </a>
                            </li>
                            <li >
                                <a href="/page/register.html">
                                    <span class="text">Register</span>
                                </a>
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#media" data-parent="#page">
                                    <span class="text">Media</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="media" class="submenu collapse ">
                                    <li >
                                        <a href="/page/media/album.html"><span class="text">Media album</span></a>
                                    </li>
                                    <li >
                                        <a href="/page/media/gallery.html"><span class="text">Media gallery</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#message" data-parent="#page">
                                    <span class="text">Message</span>
                                    <span class="arrow"></span>
                                </a>
                                <!-- START 2nd Level Menu -->
                                <ul id="message" class="submenu collapse ">
                                    <li >
                                        <a href="/page/message/bubble.html"><span class="text">Bubble message</span></a>
                                    </li>
                                    <li >
                                        <a href="/page/message/rich.html"><span class="text">Rich message</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="/page/timeline/v2.html">
                                    <span class="text">Timeline</span>
                                </a>
                            </li>

                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="/chart/flot.html">
                            <span class="figure"><i class="ico-stats-up"></i></span>
                            <span class="text">Charts</span>
                            <span class="number"><span class="label label-success">11</span></span>
                        </a>
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#maps" data-parent=".topmenu">
                            <span class="figure">
                                <i class="ico-map3"></i>
                            </span>
                            <span class="text">Maps</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="maps" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Maps</li>
                            <li >
                                <a href="/maps/vector.html">
                                    <span class="text">Vector</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="/maps/google.html">
                                    <span class="text">Google</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu1" data-parent=".topmenu">
                            <span class="figure">
                                <i class="ico-sitemap"></i>
                            </span>
                            <span class="text">Menu Levels</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="submenu1" class="submenu collapse ">
                            <li class="submenu-header ellipsis">Menu Levels</li>
                            <li >
                                <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu2" data-parent="#submenu">
                                    <span class="text">Menu Level 1.1</span>
                                    <span class="arrow"></span>
                                </a>
                                <ul id="submenu2" class="submenu collapse ">
                                    <li class="submenu-header ellipsis">Menu Levels 1.1</li>
                                    <li >
                                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#submenu3" data-parent="#submenu2">
                                            <span class="text">Menu Level 2.1</span>
                                            <span class="arrow"></span>
                                        </a>
                                        <ul id="submenu3" class="submenu collapse ">
                                            <li class="submenu-header ellipsis">Menu Levels 2.1</li>
                                            <li >
                                                <a href="#">
                                                    <span class="text">Menu Level 3.1</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                </ul>
                <!--/ END Template Navigation/Menu -->
                <!-- START Sidebar summary -->
                <!-- Summary -->
                <h5 class="heading">Summary</h5>
                <div class="wrapper">
                    <div class="table-layout">
                        <div class="col-xs-5 valign-middle">
                            <span class="sidebar-sparklines" sparkType="bar" sparkBarColor="#00B1E1">1,5,3,2,4,5,3,3,2,4,5,3</span>
                        </div>
                        <div class="col-xs-7 valign-middle">
                            <h5 class="semibold nm">Server uptime</h5>
                            <small class="semibold">1876 days</small>
                        </div>
                    </div>

                    <div class="table-layout">
                        <div class="col-xs-5 valign-middle">
                            <span class="sidebar-sparklines" sparkType="bar" sparkBarColor="#91C854">2,5,3,6,4,2,4,7,8,9,7,6</span>
                        </div>
                        <div class="col-xs-7 valign-middle">
                            <h5 class="semibold nm">Disk usage</h5>
                            <small class="semibold">83.1%</small>
                        </div>
                    </div>

                    <div class="table-layout">
                        <div class="col-xs-5 valign-middle">
                            <span class="sidebar-sparklines" sparkType="bar" sparkBarColor="#ED5466">5,1,3,7,4,3,7,8,6,5,3,2</span>
                        </div>
                        <div class="col-xs-7 valign-middle">
                            <h5 class="semibold nm">Daily visitors</h5>
                            <small class="semibold">56.5%</small>
                        </div>
                    </div>
                </div>
                <!--/ Summary -->
                <!--/ END Sidebar summary -->
            </section>
            <!--/ END Sidebar Container -->
        </aside>
        <!--/ END Template Sidebar (Left) -->

        <!-- START Template Sidebar (right) -->
        <aside class="sidebar sidebar-right">
            <!-- START Offcanvas -->
            <div class="offcanvas-container" data-toggle="offcanvas" data-options='{"openerClass":"offcanvas-opener", "closerClass":"offcanvas-closer"}'>
                <!-- START Wrapper -->
                <div class="offcanvas-wrapper">
                    <!-- Offcanvas Left -->
                    <div class="offcanvas-left">
                        <!-- Header -->
                        <div class="header pl0 pr0">
                            <ul class="list-table nm">
                                <li style="width:50px;height:34px;" class="text-center">
                                    <a href="javascript:void(0);" class="text-default offcanvas-closer"><i class="ico-arrow-left6 fsize16"></i></a>
                                </li>
                                <li class="text-center">
                                    <h5 class="semibold nm">Settings</h5>
                                </li>
                                <li style="width:50px;height:34px;" class="text-center">
                                    <a href="javascript:void(0);" class="text-default"><i class="ico-info22 fsize16"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/ Header -->

                        <!-- Content -->
                        <div class="content slimscroll">
                            <h5 class="heading">News Feed</h5>
                            <ul class="topmenu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-plus"></i></span>
                                        <span class="text">Add &amp; Manage Source</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-google-plus"></i></span>
                                        <span class="text">Google Reader</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-twitter2"></i></span>
                                        <span class="text">Twitter Source</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>

                            <h5 class="heading">Friends</h5>
                            <ul class="topmenu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-search22"></i></span>
                                        <span class="text">Find Friends</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-user-plus2"></i></span>
                                        <span class="text">Add Friends</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>

                            <h5 class="heading">Account</h5>
                            <ul class="topmenu">
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-user2"></i></span>
                                        <span class="text">Edit Account</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-envelop"></i></span>
                                        <span class="text">Manage Subscription</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-location6"></i></span>
                                        <span class="text">Location Service</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);">
                                        <span class="figure"><i class="ico-switch"></i></span>
                                        <span class="text">Logout</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="text-danger">
                                        <span class="figure"><i class="ico-minus-circle2"></i></span>
                                        <span class="text">Deactivate</span>
                                        <span class="arrow"></span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!--/ Content -->
                    </div>
                    <!--/ Offcanvas Left -->

                    <!-- Offcanvas Content -->
                    <div class="offcanvas-content">
                        <!-- Content -->
                        <div class="content slimscroll">
                            <!-- START profile -->
                            <div class="panel nm">
                    <!-- thumbnail -->
                    <div class="thumbnail">
                        <!-- media -->
                        <div class="media">
                            <!-- indicator -->
                            <div class="indicator"><span class="spinner"></span></div>
                            <!--/ indicator -->
                            <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background3.jpg" alt="Cover" width="100%">
                        </div>
                        <!--/ media -->
                    </div>
                    <!--/ thumbnail -->
                </div>
                <div class="panel-body text-center" style="margin-top:-55px;z-index:11">
                    <img class="img-circle mb5" src="/image/avatar/avatar7.jpg" alt="" width="75">
                    <h5 class="bold mt0 mb5">Erich Reyes</h5>
                    <p>Administrator</p>
                    <button type="button" class="btn btn-primary offcanvas-opener offcanvas-open-ltr"><i class="ico-settings"></i> Settings</button>
                </div>
                            <!--/ END profile -->

                            <!-- START contact -->
                            <div class="media-list media-list-contact">
                    <h5 class="heading pa15 pb0">Family</h5>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Autumn Barker</span>
                            <span class="media-meta ellipsis">Malaysia</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Giselle Horn</span>
                            <span class="media-meta ellipsis">Bolivia</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-danger mr5"></span> Austin Shields</span>
                            <span class="media-meta ellipsis">Timor-Leste</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-danger mr5"></span> Caryn Gibson</span>
                            <span class="media-meta ellipsis">Libya</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Nash Evans</span>
                            <span class="media-meta ellipsis">Honduras</span>
                        </span>
                    </a>

                    <h5 class="heading pa15 pb0">Friends</h5>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar4.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-default mr5"></span> Josiah Johnson</span>
                            <span class="media-meta ellipsis">Belgium</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-default mr5"></span> Philip Hewitt</span>
                            <span class="media-meta ellipsis">Bahrain</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar5.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-default mr5"></span> Wilma Hunt</span>
                            <span class="media-meta ellipsis">Dominica</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Noah Gill</span>
                            <span class="media-meta ellipsis">Guatemala</span>
                        </span>
                    </a>

                    <h5 class="heading pa15 pb0">Others</h5>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar8.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> David Fisher</span>
                            <span class="media-meta ellipsis">French Guiana</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar9.jpg" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Samantha Avery</span>
                            <span class="media-meta ellipsis">Jersey</span>
                        </span>
                    </a>
                    <a href="javascript:void(0);" class="media offcanvas-opener offcanvas-open-rtl">
                        <span class="media-object pull-left">
                            <img src="/image/avatar/avatar.png" class="img-circle" alt="">
                        </span>
                        <span class="media-body">
                            <span class="media-heading"><span class="hasnotification hasnotification-success mr5"></span> Madaline Medina</span>
                            <span class="media-meta ellipsis">Finland</span>
                        </span>
                    </a>
                </div>
                            <!--/ END contact -->
                        </div>
                        <!--/ Content -->
                    </div>
                    <!--/ Offcanvas Content -->

                    <!-- Offcanvas Right -->
                    <div class="offcanvas-right">
                        <!-- Header -->
                        <div class="header pl0 pr0">
                            <ul class="list-table nm">
                                <li style="width:50px;height:34px;" class="text-center">
                                    <a href="javascript:void(0);" class="text-default offcanvas-closer"><i class="ico-arrow-left6 fsize16"></i></a>
                                </li>
                                <li class="text-center">
                                    <h5 class="semibold nm">Autumn Barker</h5>
                                </li>
                                <li style="width:50px;height:34px;" class="text-center">
                                    <a href="javascript:void(0);" class="text-default"><i class="ico-info22 fsize16"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--/ Header -->

                        <!-- Footer -->
                        <div class="footer">
                            <div class="has-icon">
                                <input type="text" class="form-control" placeholder="Type message...">
                                <i class="ico-paper-plane form-control-icon"></i>
                            </div>
                        </div>
                        <!--/ Footer -->

                        <!-- Content -->
                        <div class="content slimscroll">
                            <!-- START chat -->
                            <ul class="media-list media-list-bubble">
                            <li class="media media-right">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">eros non enim commodo hendrerit.</p>
                                    <span class="clearfix"></span>
                                    <p class="media-text">Suspendisse dui.</p>
                                    <span class="clearfix"></span>
                                    <p class="media-text">eu nulla at</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Sun, Mar 02</p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Etiam laoreet, libero et tristique pellentesque, tellus sem mollis dui, in sodales elit erat.</p>
                                    <span class="clearfix"></span>
                                    <p class="media-text">faucibus ut, nulla. Cras eu tellus</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Tue, Oct 01</p>
                                </div>
                            </li>
                            <li class="media media-right">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Duis a mi fringilla mi lacinia mattis. Integer</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Fri, Sep 27</p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Praesent interdum ligula eu enim. Etiam imperdiet dictum magna.</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Wed, Aug 28</p>
                                </div>
                            </li>
                            <li class="media media-right">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar7.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Aliquam rutrum lorem ac risus. Morbi metus. Vivamus euismod urna.</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Sat, Sep 27</p>
                                </div>
                            </li>
                            <li class="media">
                                <a href="javascript:void(0);" class="media-object">
                                    <img src="/image/avatar/avatar6.jpg" class="img-circle" alt="">
                                </a>
                                <div class="media-body">
                                    <p class="media-text">Vestibulum accumsan neque et nunc. Quisque ornare tortor at risus. Nunc ac</p>
                                    <span class="clearfix"></span>
                                    <p class="media-text">Nam porttitor scelerisque neque</p>
                                    <!-- meta -->
                                    <span class="clearfix"></span><!-- important: clearing floated media text -->
                                    <p class="media-meta">Sun, Feb 22</p>
                                </div>
                            </li>
                        </ul>
                            <!--/ END chat -->
                        </div>
                        <!--/ Content -->
                    </div>
                    <!--/ Offcanvas Right -->
                </div>
                <!--/ END Wrapper -->
            </div>
            <!--/ END Offcanvas -->
        </aside>
        <!--/ END Template Sidebar (right) -->

        <!-- START Template Main -->
        <section id="main" role="main">
            <!-- START Template Container -->
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold"><span class="figure"><i class="ico-tasks"></i></span> Stats & Widgets</h4>
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Table layout -->
                        <div class="table-layout">
                            <div class="col-xs-7 widget panel">
                                <!-- Thumbnail -->
                                <div class="thumbnail">
                                    <!-- media -->
                                    <div class="media">
                                        <!-- indicator -->
                                        <div class="indicator"><span class="spinner"></span></div>
                                        <!--/ indicator -->
                                        <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background5.jpg" alt="Photo" height="100%">
                                    </div>
                                    <!--/ media -->
                                </div>
                                <!--/ Thumbnail -->
                            </div>
                            <div class="col-xs-5 widget panel">
                                <div class="panel-body text-center">
                                    <h4>Brisbane <br><small>Australia</small></h4>
                                    <h1 class="bold text-success">21°</h1>
                                    <h5 class="semibold text-muted">Hello Windy!</h5>
                                </div>
                            </div>
                        </div>
                        <!--/ END Table layout -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- Thumbnail -->
                            <div class="thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner"></span></div>
                                    <!--/ indicator -->
                                    <!-- meta -->
                                    <span class="meta top">
                                        <h3 class="semibold nm text-center">Rainy</h3>
                                        <p class="nm text-center">California</p>
                                        <h4 class="semibold nm text-center"><i class="ico-location6"></i> San Franscisco</h4>
                                    </span>
                                    <!--/ meta -->
                                    <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background9.jpg" alt="Photo" height="100%">
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ Thumbnail -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <!-- Nav section -->
                                <ul class="nav nav-section nav-justified">
                                    <li><a href="javascript:void(0);" class="text-default"><i class="ico-weather-lightning"></i><br/>Mon</a></li>
                                    <li><a href="javascript:void(0);" class="text-default"><i class="ico-windy"></i><br/>Tue</a></li>
                                    <li><a href="javascript:void(0);" class="text-default"><i class="ico-sun"></i><br/>Wed</a></li>
                                    <li><a href="javascript:void(0);" class="text-default"><i class="ico-weather-snow"></i><br/>Thu</a></li>
                                </ul>
                                <!--/ Nav section -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Table layout -->
                        <div class="table-layout mb15">
                            <div class="col-xs-6 widget panel bgcolor-info">
                                <div class="panel-body">
                                    <h1 class="semibold text-center mt0">18°</h1>
                                    <h4 class="semibold text-center nm">California</h4>
                                </div>
                            </div>
                            <div class="col-xs-6 widget panel">
                                <div class="panel-body text-center">
                                    <i class="ico-snowflake" style="font-size:46px;"></i>
                                    <ul class="list-table mt15">
                                        <li class="text-center">
                                            <i class="ico-droplet"></i>
                                            <p class="nm">1.3MM</p>
                                        </li>
                                        <li class="text-center">
                                            <i class="ico-flag5"></i>
                                            <p class="nm">10MPH</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ END Table layout -->

                        <!-- START Table layout -->
                        <div class="table-layout">
                            <div class="col-xs-6 widget panel panel-minimal bgcolor-inverse">
                                <div class="panel-body">
                                    <h1 class="semibold text-center mt0">18°</h1>
                                    <h4 class="semibold text-center nm">California</h4>
                                </div>
                            </div>
                            <div class="col-xs-6 widget panel panel-minimal">
                                <div class="panel-body text-center bgcolor-white">
                                    <i class="ico-snowflake" style="font-size:46px;"></i>
                                </div>
                                <div class="panel-body text-center bgcolor-success">
                                    <ul class="list-table">
                                        <li class="text-center">
                                            <i class="ico-droplet"></i>
                                            <p class="nm">1.3MM</p>
                                        </li>
                                        <li class="text-center">
                                            <i class="ico-flag5"></i>
                                            <p class="nm">10MPH</p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!--/ END Table layout -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel bgcolor-primary">
                            <!-- panel body -->
                            <div class="panel-body">
                                <div class="clearfix">
                                    <p class="pull-left semibold">Copenhagen, DK</p>
                                    <p class="pull-right semibold">
                                        <span class="mr5">&deg;F</span>
                                        <span>&deg;C</span>
                                    </p>
                                </div>
                                <div class="text-center mt15 mb15">
                                    <h1 class="semibold">
                                        <i class="ico-windy"></i>
                                        <span class="">22&deg;</span>
                                    </h1>
                                </div>
                                <div class="clearfix">
                                    <p class="pull-left semibold nm">
                                        <i class="ico-arrow-down5"></i> 21&deg;
                                    </p>
                                    <p class="pull-right semibold nm">
                                        <i class="ico-arrow-up5"></i> 27&deg;
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-lg-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel bgcolor-warning">
                            <!-- panel body -->
                            <div class="panel-body">
                                <div class="clearfix">
                                    <p class="pull-left semibold">Perth, AU</p>
                                    <p class="pull-right semibold">
                                        <span class="mr5">&deg;F</span>
                                        <span>&deg;C</span>
                                    </p>
                                </div>
                                <div class="text-center mt15 mb15">
                                    <h1 class="semibold">
                                        <i class="ico-sun22"></i>
                                        <span class="">32&deg;</span>
                                    </h1>
                                </div>
                                <div class="clearfix">
                                    <p class="pull-left semibold nm">
                                        <i class="ico-arrow-down5"></i> 31&deg;
                                    </p>
                                    <p class="pull-right semibold nm">
                                        <i class="ico-arrow-up5"></i> 37&deg;
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- horizontal line -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Social Widget</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body bgcolor-success">
                                <ul class="list-unstyled mt15 mb15">
                                    <li class="text-center">
                                        <img class="img-circle img-bordered" src="/image/avatar/avatar2.jpg" alt="" width="65px" height="65px">
                                    </li>
                                    <li class="text-center">
                                        <h5 class="semibold mb0">William Ross</h5>
                                        <span>CEO of a Company</span>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <!-- Nav section -->
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <h4 class="nm"><i class="ico-earth"></i></h4>
                                            <p class="nm">Website</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm"><i class="ico-brain"></i></h4>
                                            <p class="nm">Skills</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm"><i class="ico-vcard"></i></h4>
                                            <p class="nm">Portfolio</p>
                                        </div>
                                    </li>
                                </ul>
                                <!--/ Nav section -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-table">
                                    <li style="width:70px;">
                                        <img class="img-circle img-bordered" src="/image/avatar/avatar1.jpg" alt="" width="65px" height="65px">
                                    </li>
                                    <li class="text-left">
                                        <h5 class="semibold ellipsis">
                                            Quinlan Snow<br/>
                                            <small class="text-muted">@QSnow</small>
                                        </h5>
                                    </li>
                                    <li class="text-right"><button class="btn btn-info"><span class="ico-twitter"></span> Follow</button></li>
                                </ul>
                                <!-- Nav section -->
                                <ul class="nav nav-section nav-justified mt15">
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">12.5k</h4>
                                            <p class="nm text-muted">Followers</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">1853</h4>
                                            <p class="nm text-muted">Following</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">3451</h4>
                                            <p class="nm text-muted">Tweets</p>
                                        </div>
                                    </li>
                                </ul>
                                <!--/ Nav section -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner"></span></div>
                                    <!--/ indicator -->
                                    <!-- meta -->
                                    <div class="meta bottom text-center">
                                        <img class="img-circle img-bordered-teal mb10" src="/image/avatar/avatar8.jpg" alt="" width="75px" height="75px">
                                        <p class="nm">California</p>
                                        <h4 class="semibold nm"><span class="iconmoon-location-6"></span> San Franscisco</h4>
                                    </div>
                                    <!--/ meta -->
                                    <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="/image/background/400x250/background4.jpg" alt="Cover" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail -->
                            <div class="panel-body">
                                <!-- Nav section -->
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <p class="nm text-muted">Followers</p>
                                            <h4 class="nm">12.5k</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <p class="nm text-muted">Following</p>
                                            <h4 class="nm">1853</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <p class="nm text-muted">Tweets</p>
                                            <h4 class="nm">3451</h4>
                                        </div>
                                    </li>
                                </ul>
                                <!--/ Nav section -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <h4 class="mb0">Latest Tweet <i class="ico-twitter text-info pull-right"></i></h4>
                                <hr/>
                                <ul class="list-table">
                                    <li style="width:70px;">
                                        <img class="img-circle img-bordered-primary" src="/image/avatar/avatar4.jpg" alt="" width="65px" height="65px" />
                                    </li>
                                    <li class="text-left">
                                        <h5 class="semibold ellipsis nm">Colt Jenkins</h5>
                                        <p class="text-muted nm">5k followers</p>
                                    </li>
                                    <li class="text-right"><button class="btn btn-sm btn-success">Follow</button></li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                            <!-- List group -->
                            <ul class="list-group">
                                <li class="list-group-item">
                                    <p class="nm">Lorem ipsum dolor sit amet, consectetur <a href="javascript:void(0);">#adipisicing</a> elit, sed do eiusmod.</p>
                                    <small class="text-muted">1 day ago</small>
                                </li>
                                <li class="list-group-item">
                                    <p class="nm">Excepteur sint occaecat cupidatat non
                                    proident, sunt in culpa qui <a href="javascript:void(0);">@officia</a> deserunt mollit anim id est laborum.</p>
                                    <small class="text-muted">2 day ago</small>
                                </li>
                                <li class="list-group-item">
                                    <p class="nm">Duis aute irure dolor in <a href="javascript:void(0);">tweet.er</a> in voluptate velit esse
                                    cillum dolore eu fugiat nulla pariatur.</p>
                                    <small class="text-muted">3 day ago</small>
                                </li>
                            </ul>
                            <!-- List group -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- thumbnail -->
                            <div class="thumbnail">
                                <!-- media -->
                                <div class="media">
                                    <!-- indicator -->
                                    <div class="indicator"><span class="spinner"></span></div>
                                    <!--/ indicator -->
                                    <img data-toggle="unveil" src="/image/background/400x250/placeholder.jpg" data-src="https://maps.googleapis.com/maps/api/staticmap?center=50.0615581,19.9365147&zoom=13&size=400x250&sensor=false&key=AIzaSyBkba35-FVRDk3mBFH7XrEWgNlfb8IeAX8" alt="Cover" width="100%" />
                                </div>
                                <!--/ media -->
                            </div>
                            <!--/ thumbnail -->
                            <!-- panel body -->
                            <div class="panel-body" style="z-index:2;">
                                <ul class="list-unstyled">
                                    <li class="text-center">
                                        <img class="img-circle img-bordered" src="/image/avatar/avatar5.jpg" alt="" width="75px" height="75px">
                                        <br/>
                                        <h5 class="semibold mb0">Orli Waller</h5>
                                        <p class="nm text-muted">Front-end Developer</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                            <!-- panel ribbon -->
                            <a href="javascript:void(0);" class="panel-ribbon panel-ribbon-primary"><i class="ico-info"></i></a>
                            <!--/ panel ribbon -->
                            <!-- table -->
                            <table class="table">
                                <thead></thead>
                                <tbody>
                                    <tr>
                                        <td width="50%">Web development</td>
                                        <td>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar" style="width: 60%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Server patching</td>
                                        <td>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar progress-bar-warning" style="width: 40%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td width="50%">Mobile framework</td>
                                        <td>
                                            <div class="progress progress-xs nm">
                                                <div class="progress-bar progress-bar-success" style="width: 90%"></div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!--/ table -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel ribbon -->
                            <a href="javascript:void(0);" class="panel-ribbon panel-ribbon-danger pull-right"><i class="ico-heart4"></i></a>
                            <!--/ panel ribbon -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center">
                                        <img class="img-circle img-bordered-danger" src="/image/avatar/avatar4.jpg" alt="" width="75px" height="75px">
                                        <br/>
                                        <h5 class="semibold mb0">Orli Waller</h5>
                                        <p class="nm text-muted">Front-end Developer</p>
                                    </li>
                                </ul>
                                <hr>
                                <!-- blockquote -->
                                <blockquote class="mt10 text-muted text-center">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
                                    <small>Someone famous in <cite title="Source Title">Source Title</cite></small>
                                </blockquote>
                                <!--/ blockquote -->
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="panel overflow-hidden">
                            <!-- User info -->
                            <ul class="list-table pa15">
                                <li class="text-left" style="width:60px;">
                                    <img class="img-circle" src="/image/avatar/avatar2.jpg" alt="" width="50px" height="50px">
                                </li>
                                <li class="text-left">
                                    <p class="ellipsis nm"><span class="semibold">Alberto Kusagi</span></p>
                                    <p class="text-muted nm">3 Hour ago</p>
                                </li>
                                <li class="text-right" style="width:60px;">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-link dropdown-toggle text-default" data-toggle="dropdown"><i class="ico-menu2"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Report</a></li>
                                            <li><a href="javascript:void(0);">Setting</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);" class="text-danger">Delete post</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--/ User info -->
                            <hr class="nm"><!-- horizontal line -->
                            <!-- START Gridster -->
                            <div class="img-grid">
                                <ul class="list-unstyled row">
                                    <li class="col-xs-8">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:310px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show">
                                                    <div class="meta bottom">
                                                        <h4 class="thin mt0">Lorem ipsum dolor sit amet</h4>
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <a href="javascript:void(0);" class="btn btn-success btn-sm">View</a>
                                                    </div>
                                                </div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background8.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                    <li class="col-xs-4">
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:100px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <!-- toolbar overlay -->
                                                        <div class="overlay">
                                                            <div class="toolbar">
                                                                <a href="javascript:void(0);" class="btn btn-danger" title="love this collection"><i class="ico-heart6"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--/ toolbar overlay -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background5.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:100px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <!-- toolbar overlay -->
                                                        <div class="overlay">
                                                            <div class="toolbar">
                                                                <a href="javascript:void(0);" class="btn btn-danger" title="love this collection"><i class="ico-heart6"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--/ toolbar overlay -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background6.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:100px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <!-- toolbar overlay -->
                                                        <div class="overlay">
                                                            <div class="toolbar">
                                                                <a href="javascript:void(0);" class="btn btn-danger" title="love this collection"><i class="ico-heart6"></i></a>
                                                            </div>
                                                        </div>
                                                        <!--/ toolbar overlay -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background7.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--/ END Gridster -->
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <ul class="list-table">
                                    <li>
                                        <div class="img-group img-group-stack">
                                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="" />
                                        </div>
                                    </li>
                                    <li class="text-right">
                                        <p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel footer -->
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="panel overflow-hidden">
                            <!-- User info -->
                            <ul class="list-table pa15">
                                <li class="text-left" style="width:60px;">
                                    <img class="img-circle" src="/image/avatar/avatar5.jpg" alt="" width="50px" height="50px">
                                </li>
                                <li class="text-left">
                                    <p class="ellipsis nm"><span class="semibold">Noel Amstrong</span></p>
                                    <p class="text-muted nm">3 Hour ago</p>
                                </li>
                                <li class="text-right" style="width:60px;">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-link dropdown-toggle text-default" data-toggle="dropdown"><i class="ico-menu2"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Report</a></li>
                                            <li><a href="javascript:void(0);">Setting</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);" class="text-danger">Delete post</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--/ User info -->
                            <hr class="nm"><!-- horizontal line -->
                            <!-- START Gridster -->
                            <div class="img-grid">
                                <ul class="list-unstyled row">
                                    <li class="col-xs-6">
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:140px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background2.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:140px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background3.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="col-xs-6">
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:140px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background4.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                        <ul class="list-unstyled row">
                                            <li class="col-xs-12">
                                                <!-- thumbnail -->
                                                <div class="thumbnail">
                                                    <!-- media -->
                                                    <div class="media" style="height:140px;">
                                                        <!-- indicator -->
                                                        <div class="indicator"><span class="spinner"></span></div>
                                                        <!--/ indicator -->
                                                        <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background5.jpg" alt="Photo" />
                                                    </div>
                                                    <!--/ media -->
                                                </div>
                                                <!--/ thumbnail -->
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!--/ END Gridster -->
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <ul class="list-table">
                                    <li>
                                        <div class="img-group img-group-stack">
                                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="" />
                                        </div>
                                    </li>
                                    <li class="text-right">
                                        <p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel footer -->
                        </div>
                    </div>

                    <div class="col-sm-4 col-md-4 col-lg-4">
                        <div class="panel overflow-hidden">
                            <!-- User info -->
                            <ul class="list-table pa15">
                                <li class="text-left" style="width:60px;">
                                    <img class="img-circle" src="/image/avatar/avatar9.jpg" alt="" width="50px" height="50px">
                                </li>
                                <li class="text-left">
                                    <p class="ellipsis nm"><span class="semibold">Tamara Moon</span></p>
                                    <p class="text-muted nm">3 Hour ago</p>
                                </li>
                                <li class="text-right" style="width:60px;">
                                    <div class="btn-group">
                                    <button type="button" class="btn btn-link dropdown-toggle text-default" data-toggle="dropdown"><i class="ico-menu2"></i></button>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li><a href="javascript:void(0);">Report</a></li>
                                            <li><a href="javascript:void(0);">Setting</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);" class="text-danger">Delete post</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                            <!--/ User info -->
                            <hr class="nm"><!-- horizontal line -->
                            <!-- START Gridster -->
                            <div class="img-grid">
                                <ul class="list-unstyled row">
                                    <li class="col-xs-12">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:220px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show">
                                                    <div class="meta bottom">
                                                        <h4 class="thin mt0">Lorem ipsum dolor sit amet</h4>
                                                        <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                        <a href="javascript:void(0);" class="btn btn-success btn-sm">View</a>
                                                    </div>
                                                </div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background8.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                </ul>

                                <ul class="list-unstyled row">
                                    <li class="col-xs-4">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:100px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show"></div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background10.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                    <li class="col-xs-4">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:100px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show"></div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background3.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                    <li class="col-xs-4">
                                        <!-- thumbnail -->
                                        <div class="thumbnail">
                                            <!-- media -->
                                            <div class="media" style="height:100px;">
                                                <!-- indicator -->
                                                <div class="indicator"><span class="spinner"></span></div>
                                                <!--/ indicator -->
                                                <!-- toolbar overlay -->
                                                <div class="overlay show"></div>
                                                <!--/ toolbar overlay -->
                                                <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/background6.jpg" alt="Photo" />
                                            </div>
                                            <!--/ media -->
                                        </div>
                                        <!--/ thumbnail -->
                                    </li>
                                </ul>
                            </div>
                            <!--/ END Gridster -->
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <ul class="list-table">
                                    <li>
                                        <div class="img-group img-group-stack">
                                            <img src="/image/avatar/avatar1.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar2.jpg" class="img-circle" alt="" />
                                            <img src="/image/avatar/avatar3.jpg" class="img-circle" alt="" />
                                        </div>
                                    </li>
                                    <li class="text-right">
                                        <p class="nm"><a href="javascript:void(0);" class="semibold">3 people</a> love this</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel footer -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center mb15">
                                        <img class="img-rounded img-bordered-primary" src="/image/avatar/avatar6.jpg" alt="" width="100px" height="100px" />
                                    </li>
                                    <li class="text-center mb10">
                                        <h4 class="semibold ellipsis nm">Colt Jenkins</h4>
                                        <p class="text-muted nm">Nullam Ut Nisi Corporation</p>
                                    </li>
                                    <li class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                    <div class="col-md-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center mb15">
                                        <img class="img-circle img-bordered-primary" src="/image/avatar/avatar1.jpg" alt="" width="100px" height="100px" />
                                    </li>
                                    <li class="text-center mb10">
                                        <h4 class="semibold ellipsis nm text-primary">Deborah Workman</h4>
                                        <p class="text-muted nm">Ultrices Industries</p>
                                    </li>
                                    <li class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                    <div class="col-md-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center mb15">
                                        <img class="img-circle img-bordered-primary" src="/image/avatar/avatar8.jpg" alt="" width="100px" height="100px" />
                                    </li>
                                    <li class="text-center mb10">
                                        <h4 class="semibold ellipsis nm text-primary">Uriah Benjamin</h4>
                                        <p class="text-muted nm">Elit Company</p>
                                    </li>
                                    <li class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                    <div class="col-md-3">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-unstyled">
                                    <li class="text-center mb15">
                                        <img class="img-rounded img-bordered-primary" src="/image/avatar/avatar9.jpg" alt="" width="100px" height="100px" />
                                    </li>
                                    <li class="text-center mb10">
                                        <h4 class="semibold ellipsis nm">MacKenzie Huffman</h4>
                                        <p class="text-muted nm">Sodales Company</p>
                                    </li>
                                    <li class="text-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam.</li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- horizontal line -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">Misc Widget</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <h5 class="semibold text-primary">Task Widget</h5>
                            </div>
                            <!--/ panel body -->
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox1" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox1"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-food"></td>
                                        <td>Dinner with someone</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox2" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox2"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-gun"></td>
                                        <td>Kill some mobs</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox3" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox3"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-football"></td>
                                        <td>Go out and play football</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox4" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox4"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-shield3"></td>
                                        <td>Shield the house</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <div class="checkbox custom-checkbox nm">
                                                <input type="checkbox" id="customcheckbox5" value="1" data-toggle="selectrow" data-target="tr" data-contextual="stroke">
                                                <label for="customcheckbox5"></label>
                                            </div>
                                        </td>
                                        <td width="5%"><i class="ico-power-cord"></td>
                                        <td>Cut off power supply</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <div class="input-group">
                                <input type="text" class="form-control" name="task" placeholder="Add new task">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button">Add</button>
                                    </span>
                                </div>
                            </div>
                            <!--/ panel footer -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-md-4">
                        <!-- START Widget Panel -->
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-table">
                                    <li style="width:70px;">
                                        <img class="img-rounded" src="/image/background/400x400/background12.jpg" alt="" width="65px" height="65px">
                                    </li>
                                    <li class="text-left">
                                        <h5 class="semibold ellipsis nm">Lamb Of Chop</h5>
                                        <p class="text-muted nm">5 Song in playlist</p>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                            <table class="table table-hover">
                                <tbody>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-default"><i class="ico-play32"></i></a>
                                        </td>
                                        <td>Walk With Me to Hell</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-default"><i class="ico-play32"></i></a>
                                        </td>
                                        <td>Laid To Death</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-default"><i class="ico-play32"></i></a>
                                        </td>
                                        <td>Rain</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-success"><i class="ico-stop2"></i></a>
                                        </td>
                                        <td class="text-success semibold">Blackneck</td>
                                    </tr>
                                    <tr>
                                        <td width="5%">
                                            <a href="javascript:void(0);" class="text-default"><i class="ico-play32"></i></a>
                                        </td>
                                        <td>Pink Label</td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- panel footer -->
                            <div class="panel-footer">
                                <ul class="nav nav-section nav-justified">
                                    <li><a href="javascript:void(0);"><i class="ico-step-backward"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="ico-play3"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="ico-pause"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="ico-spinner12"></i></a></li>
                                    <li><a href="javascript:void(0);"><i class="ico-step-forward"></i></a></li>
                                </ul>
                            </div>
                            <!--/ panel footer -->
                        </div>
                        <!--/ END Widget Panel -->
                    </div>

                    <div class="col-lg-4">
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body bgcolor-primary">
                                <ul class="list-table">
                                    <li><h3 class="semibold nm text-left">20.514</h3></li>
                                    <li><p class="semibold nm text-right">Total visitor <i class="ico-male ml5"></i></p></li>
                                </ul>
                                <!-- chart -->
                                <div class="chart mt15" id="visitor-wchart"></div>
                                <!--/ chart -->
                            </div>
                            <!--/ panel body -->
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section">
                                            <span class="text-muted">Visits</span>
                                            <h4 class="nm">4792</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <span class="text-muted">Recuring</span>
                                            <h4 class="nm">1283</h4>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <span class="text-muted">Pageview</span>
                                            <h4 class="nm">74558</h4>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-lg-4">
                        <div class="widget panel">
                            <!-- panel body -->
                            <div class="panel-body">
                                <ul class="list-table">
                                    <li><h4 class="semibold nm text-left"><i class="ico-shield2 mr5"></i>Violations</h4></li>
                                    <li><h4 class="semibold nm text-right text-muted">1063</h5></li>
                                </ul>
                                <!-- chart -->
                                <div class="chart mt15" id="violations-wchart"></div>
                                <!--/ chart -->
                            </div>
                            <!--/ panel body -->
                            <!-- panel body -->
                            <div class="panel-footer">
                                <ul class="nav nav-section nav-justified">
                                    <li>
                                        <div class="section text-danger">
                                            <h4 class="nm">2743</h4>
                                            <span>High Risk</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">87</h4>
                                            <span class="text-muted">Medium Risk</span>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="section">
                                            <h4 class="nm">10</h4>
                                            <span class="text-muted">Blocking</span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <!--/ panel body -->
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!-- Carousel -->
                        <div class="panel nm no-border">
                            <div class="panel-body owl-carousel" id="carousel1">
                                <!-- slide #1 -->
                                <div class="item table-layout">
                                    <div class="col-sm-3 text-center">
                                        <img src="/image/icons/supportservices.png" alt="support" width="100%">
                                    </div>
                                    <div class="col-sm-9">
                                        <h4>24 Hour Awesome Support</h4>
                                        <p class="text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="javascript:void(0);">Learn more&#8230;</a>
                                    </div>
                                </div>
                                <!--/ slide #1 -->
                                <!-- slide #2 -->
                                <div class="item table-layout">
                                    <div class="col-sm-3 text-center">
                                        <img src="/image/icons/socialengagement.png" alt="advertisment" width="100%">
                                    </div>
                                    <div class="col-sm-9 pl15">
                                        <h4>Awesome Advertisment Services</h4>
                                        <p class="text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="javascript:void(0);">Learn more&#8230;</a>
                                    </div>
                                </div>
                                <!--/ slide #2 -->
                                <!-- slide #3 -->
                                <div class="item table-layout">
                                    <div class="col-sm-3 text-center">
                                        <img src="/image/icons/onlinepresencemanagement.png" alt="fast" width="100%">
                                    </div>
                                    <div class="col-sm-9 pl15">
                                        <h4>Blazing Fast</h4>
                                        <p class="text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                        cillum dolore eu fugiat nulla pariatur.</p>
                                        <a href="javascript:void(0);">Learn more&#8230;</a>
                                    </div>
                                </div>
                                <!--/ slide #3 -->
                            </div>
                        </div>
                        <!--/ Carousel -->
                    </div>
                </div>
                <!--/ END row -->
            </div>
            <!--/ END Template Container -->

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="50%"><i class="ico-angle-up"></i></a>
            <!--/ END To Top Scroller -->
        </section>
        <!--/ END Template Main -->

        <!-- START JAVASCRIPT SECTION (Load javascripts at bottom to reduce load time) -->
        <!-- Application and vendor script : mandatory -->
        <script type="text/javascript" src="/javascript/vendor.js"></script>
        <script type="text/javascript" src="/javascript/core.js"></script>
        <script type="text/javascript" src="/javascript/backend/app.js"></script>
        <!--/ Application and vendor script : mandatory -->

        <!-- Plugins and page level script : optional -->
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/owl/js/owl.carousel.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.resize.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.categories.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.time.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.tooltip.js"></script>
        <script type="text/javascript" src="/plugins/flot/js/jquery.flot.spline.js"></script>
        <script type="text/javascript" src="/javascript/backend/components/widget.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>