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
        <link rel="stylesheet" href="/plugins/ladda/css/ladda.css">
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
                <a class="navbar-brand" href="javascript:void(0);">
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
									
									<a href="page-message-rich.html" class="media border-dotted read">
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
									
									<a href="page-message-rich.html" class="media border-dotted read">
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
									
									<a href="page-message-rich.html" class="media border-dotted read">
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
									
									<a href="page-message-rich.html" class="media border-dotted read">
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
                                <a href="layout-default.html">
                                    <span class="text">Default</span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-with-footer.html">
                                    <span class="text">With footer</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-reveal-header.html">
                                    <span class="text">Reveal header</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-fixed-header.html">
                                    <span class="text">Fixed header</span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-fixed-sidebar.html">
                                    <span class="text">Fixed sidebar</span>
                                </a>
                            </li>
                            <li >
                                <a href="layout-navbar-collapse.html">
                                    <span class="text">Navbar Collapse</span>
                                </a>
                            </li>
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
					<li>
                        <a href="widget.html" data-parent=".topmenu">
                            <span class="figure"><i class="ico-tasks"></i></span>
                            <span class="text">Stats & Widgets</span>
							<span class="number"><span class="label label-danger">6</span></span>
                        </a>
                    </li>
                    <li class="active open" >
                        <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screen4"></i></span>
                            <span class="text">UI Elements</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components" class="submenu collapse in">
                            <li class="submenu-header ellipsis">Components</li>
                            <li>
                                <a href="component-animation.html">
                                    <span class="text">Animation</span>
                                </a>
                            </li>
							<li class="active" >
                                <a href="component-button.html">
                                    <span class="text">Button</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="component-carousel.html">
                                    <span class="text">Carousel</span>
                                </a>
                            </li>
							<li >
                                <a href="component-grid.html">
                                    <span class="text">Grid</span>
                                </a>
                            </li>
							<li >
                                <a href="component-icon.html">
                                    <span class="text">Icon</span>
                                </a>
                            </li>
							<li >
                                <a href="component-loading.html">
                                    <span class="text">Loading indicator</span>
                                </a>
                            </li>
							<li >
                                <a href="component-notification.html">
                                    <span class="text">Notification</span>
                                </a>
                            </li>
                            <li >
                                <a href="component-panel.html">
                                    <span class="text">Panel</span>
                                </a>
                            </li>
                            <li >
                                <a href="component-pricing.html">
                                    <span class="text">Pricing table / box</span>
                                </a>
                            </li>
							<li >
                                <a href="component-slider.html">
                                    <span class="text">Slider</span>
                                </a>
                            </li>
							<li >
                                <a href="component-sortable.html">
                                    <span class="text">Sortable</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="component-tabsaccordion.html">
                                    <span class="text">Tabs &amp; accordion</span>
                                </a>
                            </li>
                            <li >
                                <a href="component-typography.html">
                                    <span class="text">Typography</span>
                                </a>
                            </li>
                            <li >
                                <a href="component-others.html">
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
                                <a href="form-element.html">
                                    <span class="text">Element</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="form-layout.html">
                                    <span class="text">Layout</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-validation.html">
                                    <span class="text">Validation</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-wizard.html">
                                    <span class="text">Wizard</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-wysiwyg.html">
                                    <span class="text">WYSIWYG Editor</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-xeditable.html">
                                    <span class="text">X-editable</span>
                                </a>
                            </li>
                            <li >
                                <a href="form-fileupload.html">
                                    <span class="text">File Upload</span>
                                    <span class="number"><span class="label label-success">N</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="form-imagecrop.html">
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
                                <a href="table-default.html">
                                    <span class="text">Basic Tables</span>
                                </a>
                            </li>
                            <li>
                                <a href="table-datatable.html">
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
                                <a href="page-starter.html">
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
                                        <a href="page-blog-default.html"><span class="text">Blog default</span></a>
                                    </li>
                                    <li >
                                        <a href="page-blog-grid.html"><span class="text">Blog grid</span></a>
                                    </li>
                                    <li >
                                        <a href="page-blog-single.html"><span class="text">Single post</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
							<li >
                                <a href="page-calendar.html">
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
                                        <a href="page-email-inbox.html"><span class="text">Inbox</span></a>
                                    </li>
                                    <li >
                                        <a href="page-email-view.html"><span class="text">View</span></a>
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
                                        <a href="page-error-404.html"><span class="text">Not Found (404)</span></a>
                                    </li>
                                    <li >
                                        <a href="page-error-403.html"><span class="text">Forbidden (403)</span></a>
                                    </li>
                                    <li >
                                        <a href="page-error-500.html"><span class="text">Server Error (500)</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
							<li >
                                <a href="page-faq.html">
                                    <span class="text">FAQ</span>
                                </a>
                            </li>
							<li >
                                <a href="page-invoice.html">
                                    <span class="text">Invoice</span>
                                </a>
                            </li>
							<li >
                                <a href="page-profile.html">
                                    <span class="text">Profile</span>
                                </a>
                            </li>
                            <li >
                                <a href="page-login.html">
                                    <span class="text">Login</span>
                                </a>
                            </li>
                            <li >
                                <a href="page-login-returned.html">
                                    <span class="text">Lock Screen</span>
                                </a>
                            </li>
                            <li >
                                <a href="page-register.html">
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
                                        <a href="page-media-album.html"><span class="text">Media album</span></a>
                                    </li>
                                    <li >
                                        <a href="page-media-gallery.html"><span class="text">Media gallery</span></a>
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
                                        <a href="page-message-bubble.html"><span class="text">Bubble message</span></a>
                                    </li>
                                    <li >
                                        <a href="page-message-rich.html"><span class="text">Rich message</span></a>
                                    </li>
                                </ul>
                                <!--/ END 2nd Level Menu -->
                            </li>
                            <li >
                                <a href="page-timeline-v2.html">
                                    <span class="text">Timeline</span>
                                </a>
                            </li>
                           
                        </ul>
                        <!--/ END 2nd Level Menu -->
                    </li>
                    <li >
                        <a href="chart-flot.html">
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
                                <a href="maps-vector.html">
                                    <span class="text">Vector</span>
                                    <span class="number"><span class="label label-info">U</span></span>
                                </a>
                            </li>
                            <li >
                                <a href="maps-google.html">
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
                        <h4 class="title semibold">Buttons</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">UI Elements</a></li>
                                <li class="active">Buttons</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button colors</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Use any of the available button classes to quickly create a styled button.</p>
                                    <button type="button" class="btn btn-default mb5">Default</button>
                                    <button type="button" class="btn btn-primary mb5">Primary</button>
                                    <button type="button" class="btn btn-success mb5">Success</button>
                                    <button type="button" class="btn btn-info mb5">Info</button>
                                    <button type="button" class="btn btn-warning mb5">Warning</button>
                                    <button type="button" class="btn btn-danger mb5">Danger</button>
                                    <button type="button" class="btn btn-inverse mb5">Inverse</button>
                                    <button type="button" class="btn btn-teal mb5">Teal</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button with icon</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <button type="button" class="btn btn-default mb5"><i class="ico-fire22"></i> Default</button>
                                    <button type="button" class="btn btn-primary mb5"><i class="ico-fire22"></i> Primary</button>
                                    <button type="button" class="btn btn-success mb5"><i class="ico-fire22"></i> Success</button>
                                    <button type="button" class="btn btn-info mb5"><i class="ico-fire22"></i> Info</button>
                                    <button type="button" class="btn btn-warning mb5"><i class="ico-fire22"></i> Warning</button>
                                    <button type="button" class="btn btn-danger mb5"><i class="ico-fire22"></i> Danger</button>
                                    <button type="button" class="btn btn-inverse mb5"><i class="ico-fire22"></i> Inverse</button>
                                    <button type="button" class="btn btn-teal mb5"><i class="ico-fire22"></i> Teal</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button sizing</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Fancy larger or smaller buttons? Add <code>.btn-lg</code>, <code>.btn-sm</code>, or <code>.btn-xs</code> for additional sizes.</p>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-lg">Large button</button>
                                        <button type="button" class="btn btn-default btn-lg">Large button</button>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-primary">Default button</button>
                                        <button type="button" class="btn btn-default">Default button</button>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-sm">Small button</button>
                                        <button type="button" class="btn btn-default btn-sm">Small button</button>
                                    </p>
                                    <p>
                                        <button type="button" class="btn btn-primary btn-xs">Extra small button</button>
                                        <button type="button" class="btn btn-default btn-xs">Extra small button</button>
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button group</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Wrap a series of buttons with <code>.btn</code> in <code>.btn-group</code>.</p>
                                    <p>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">Left</button>
                                            <button type="button" class="btn btn-default">Middle</button>
                                            <button type="button" class="btn btn-default">Right</button>
                                        </div>
                                    </p>
                                    <p>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">1</button>
                                            <button type="button" class="btn btn-default">2</button>
                                            <button type="button" class="btn btn-default">3</button>
                                            <button type="button" class="btn btn-default">4</button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">5</button>
                                            <button type="button" class="btn btn-default">6</button>
                                            <button type="button" class="btn btn-default">7</button>
                                        </div>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">8</button>
                                        </div>
                                    </p>
                                    <p>
                                        <div class="btn-group">
                                            <button type="button" class="btn btn-default">1</button>
                                            <button type="button" class="btn btn-default">2</button>

                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                                    Dropdown
                                                    <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupDrop1">
                                                    <li><a href="javascript:void(0);">Dropdown link</a></li>
                                                    <li><a href="javascript:void(0);">Dropdown link</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button dropdown</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Turn a button into a dropdown toggle with some basic markup changes.</p>
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">Default <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Primary <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">Success <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">Info <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">Warning <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">Danger <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">Inverse <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown">Teal <span class="caret"></span></button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title ellipsis">Split button dropdown</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Similarly, create split button dropdowns with the same markup changes, only with a separate button.</p>
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-default">Default</button>
                                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-primary">Primary</button>
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-success">Success</button>
                                        <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-info">Info</button>
                                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-warning">Warning</button>
                                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-danger">Danger</button>
                                        <button type="button" class="btn btn-danger dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-inverse">Inverse</button>
                                        <button type="button" class="btn btn-inverse dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                    <div class="btn-group" style="margin-bottom:5px;">
                                        <button type="button" class="btn btn-teal">Teal</button>
                                        <button type="button" class="btn btn-teal dropdown-toggle" data-toggle="dropdown">
                                            <span class="caret"></span>
                                        </button>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="javascript:void(0);">Action</a></li>
                                            <li><a href="javascript:void(0);">Another action</a></li>
                                            <li><a href="javascript:void(0);">Something else here</a></li>
                                            <li class="divider"></li>
                                            <li><a href="javascript:void(0);">Separated link</a></li>
                                        </ul>
                                    </div><!-- /btn-group -->
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button tag</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Use the button classes on an <code>&lt;a&gt;</code>, <code>&lt;button&gt;</code>, or <code>&lt;input&gt;</code> element.</p>
                                    <a class="btn btn-default" href="javascript:void(0);" role="button">Link</a>
                                    <button class="btn btn-default" type="submit">Button</button>
                                    <input class="btn btn-default" type="button" value="Input">
                                    <input class="btn btn-default" type="submit" value="Submit">
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button outline</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Use any of the available button classes to quickly create a styled button.</p>
                                    <button type="button" class="btn btn-default btn-outline mb5">Default</button>
                                    <button type="button" class="btn btn-primary btn-outline mb5">Primary</button>
                                    <button type="button" class="btn btn-success btn-outline mb5">Success</button>
                                    <button type="button" class="btn btn-info btn-outline mb5">Info</button>
                                    <button type="button" class="btn btn-warning btn-outline mb5">Warning</button>
                                    <button type="button" class="btn btn-danger btn-outline mb5">Danger</button>
                                    <button type="button" class="btn btn-inverse btn-outline mb5">Inverse</button>
                                    <button type="button" class="btn btn-teal btn-outline mb5">Teal</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button state</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <h5>Active state</h5>
                                    <p>No need to add <code>:active</code> as it's a pseudo-class, but if you need to force the same appearance, go ahead and add <code>.active</code>.</p>
                                    <button type="button" class="btn btn-primary btn-lg active">Primary button</button>
                                    <button type="button" class="btn btn-default btn-lg active">Button</button>
                                    <h5>Disable state</h5>
                                    <p>Add the <code>disabled</code> attribute to <code>&lt;button&gt;</code> buttons.</p>
                                    <button type="button" class="btn btn-lg btn-primary" disabled="disabled">Primary button</button>
                                    <button type="button" class="btn btn-default btn-lg" disabled="disabled">Button</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>
                </div>
                <!--/ END row -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Pagination</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <h4 class="mt0 text-primary">Default pagination</h4>
                                    <p>Simple pagination inspired by Rdio, great for apps and search results. The large block is hard to miss, easily scalable, and provides large click areas.</p>
                                    <ul class="pagination mt0">
                                        <li><a href="javascript:void(0);">&laquo;</a></li>
                                        <li><a href="javascript:void(0);">1</a></li>
                                        <li><a href="javascript:void(0);">2</a></li>
                                        <li><a href="javascript:void(0);">3</a></li>
                                        <li><a href="javascript:void(0);">4</a></li>
                                        <li><a href="javascript:void(0);">5</a></li>
                                        <li><a href="javascript:void(0);">&raquo;</a></li>
                                    </ul>
                                    <h4 class="text-info">Disabled and active states</h4>
                                    <p>Links are customizable for different circumstances. Use <code>.disabled</code> for unclickable links and <code>.active</code> to indicate the current page.</p>
                                    <ul class="pagination mt0">
                                        <li class="disabled"><a href="javascript:void(0);">«</a></li>
                                        <li class="active"><a href="javascript:void(0);">1 <span class="sr-only">(current)</span></a></li>
                                        <li><a href="javascript:void(0);">2</a></li>
                                        <li><a href="javascript:void(0);">3</a></li>
                                        <li><a href="javascript:void(0);">4</a></li>
                                        <li><a href="javascript:void(0);">5</a></li>
                                        <li><a href="javascript:void(0);">»</a></li>
                                    </ul>
                                    <h4 class="text-danger">Sizing</h4>
                                    <p>Fancy larger or smaller pagination? Add <code>.pagination-lg</code> or <code>.pagination-sm</code> for additional sizes.</p>
                                    <div>
                                        <ul class="pagination pagination-lg mt0">
                                            <li><a href="javascript:void(0);">«</a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">»</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="pagination mt0">
                                            <li><a href="javascript:void(0);">«</a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li><a href="javascript:void(0);">»</a></li>
                                        </ul>
                                    </div>
                                    <div>
                                        <ul class="pagination pagination-sm mt0">
                                            <li><a href="javascript:void(0);">«</a></li>
                                            <li><a href="javascript:void(0);">1</a></li>
                                            <li><a href="javascript:void(0);">2</a></li>
                                            <li><a href="javascript:void(0);">3</a></li>
                                            <li><a href="javascript:void(0);">4</a></li>
                                            <li><a href="javascript:void(0);">5</a></li>
                                            <li><a href="javascript:void(0);">»</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button rounded</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>Add rounded corner to button.</p>
                                    <button type="button" class="btn btn-default btn-rounded btn-xs mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded btn-sm mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded btn-lg mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded btn-sm mb5">Button</button>
                                    <button type="button" class="btn btn-default btn-rounded btn-xs mb5">Button</button>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
                    </div>

                    <div class="col-md-6">
                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Pager</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <h4 class="mt0">Pager</h4>
                                    <p>Quick previous and next links for simple pagination implementations with light markup and styles. It's great for simple sites like blogs or magazines.</p>
                                    <ul class="pager mt0">
                                        <li><a href="javascript:void(0);">Previous</a></li>
                                        <li><a href="javascript:void(0);">Next</a></li>
                                    </ul>
                                    <h4 class="text-warning">Aligned links</h4>
                                    <p>Alternatively, you can align each link to the sides:</p>
                                    <ul class="pager mt0">
                                        <li class="previous"><a href="javascript:void(0);">&larr; Older</a></li>
                                        <li class="next"><a href="javascript:void(0);">Newer &rarr;</a></li>
                                    </ul>
                                    <h4 class="text-teal">Optional disabled state</h4>
                                    <p>Pager links also use the general <code>.disabled</code> utility class from the pagination.</p>
                                    <ul class="pager mt0">
                                        <li class="previous disabled"><a href="javascript:void(0);">&larr; Older</a></li>
                                        <li class="next"><a href="javascript:void(0);">Newer &rarr;</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->

                        <!-- START panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title">Button loading</h3>
                                <!-- panel toolbar -->
                                <div class="panel-toolbar text-right">
                                    <!-- option -->
                                    <div class="option">
                                        <button class="btn up" data-toggle="panelcollapse"><i class="arrow"></i></button>
                                        <button class="btn" data-toggle="panelremove"><i class="remove"></i></button>
                                    </div>
                                    <!--/ option -->
                                </div>
                                <!--/ panel toolbar -->
                            </div>
                            <!--/ panel heading/header -->
                            <!-- panel body with collapse capabale -->
                            <div class="panel-collapse pull out">
                                <div class="panel-body">
                                    <p>You can choose the style of the effect by setting the <code>data-style</code> attribute:</p>
                                    <p class="nm">
                                        <button class="btn btn-primary ladda-button mb5" data-style="expand-left"><span class="ladda-label">Expend left</span></button>
                                        <button class="btn btn-primary ladda-button mb5" data-style="expand-right"><span class="ladda-label">Expend right</span></button>
                                        <button class="btn btn-primary ladda-button mb5" data-style="expand-up"><span class="ladda-label">Expend up</span></button>
                                        <button class="btn btn-primary ladda-button mb5" data-style="expand-down"><span class="ladda-label">Expend down</span></button>
                                    </p>
                                    <p class="nm">
                                        <button class="btn btn-danger ladda-button mb5" data-style="zoom-in"><span class="ladda-label">Zoom in</span></button>
                                        <button class="btn btn-danger ladda-button mb5" data-style="zoom-out"><span class="ladda-label">Zoom out</span></button>
                                    </p>
                                    <p class="nm">
                                        <button class="btn btn-success ladda-button mb5" data-style="slide-left"><span class="ladda-label">Slide left</span></button>
                                        <button class="btn btn-success ladda-button mb5" data-style="slide-right"><span class="ladda-label">Slide right</span></button>
                                        <button class="btn btn-success ladda-button mb5" data-style="slide-up"><span class="ladda-label">Slide up</span></button>
                                        <button class="btn btn-success ladda-button mb5" data-style="slide-down"><span class="ladda-label">Slide down</span></button>
                                    </p>
                                    <p class="nm">
                                        <button class="btn btn-info ladda-button ladda-progress mb5" data-style="expand-left"><span class="ladda-label">Expend left</span></button>
                                        <button class="btn btn-info ladda-button ladda-progress mb5" data-style="expand-right"><span class="ladda-label">Expend right</span></button>
                                    </p>
                                </div>
                            </div>
                            <!--/ panel body with collapse capabale -->
                        </div>
                        <!--/ END panel -->
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
		<script type="text/javascript" src="/plugins/ladda/js/vendor/spin.js"></script>
        <script type="text/javascript" src="/plugins/ladda/js/ladda.js"></script>
        <script type="text/javascript" src="/javascript/backend/components/button.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>