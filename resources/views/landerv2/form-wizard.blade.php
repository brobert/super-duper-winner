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
        <link rel="stylesheet" href="/plugins/steps/css/jquery-steps.css">
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
                    <li >
                        <a href="javascript:void(0);" data-target="#components" data-toggle="submenu" data-parent=".topmenu">
                            <span class="figure"><i class="ico-screen4"></i></span>
                            <span class="text">UI Elements</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="components" class="submenu collapse">
                            <li class="submenu-header ellipsis">Components</li>
                            <li >
                                <a href="component-animation.html">
                                    <span class="text">Animation</span>
                                </a>
                            </li>
							<li >
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
                    <li class="active open">
                        <a href="javascript:void(0);" data-toggle="submenu" data-target="#form" data-parent=".topmenu">
                            <span class="figure"><i class="ico-file"></i></span>
                            <span class="text">Forms</span>
                            <span class="arrow"></span>
                        </a>
                        <!-- START 2nd Level Menu -->
                        <ul id="form" class="submenu collapse in">
                            <li class="submenu-header ellipsis">Forms</li>
                            <li>
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
                            <li class="active" >
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
                        <h4 class="title semibold">Form wizard</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <ol class="breadcrumb breadcrumb-transparent nm">
                                <li><a href="javascript:void(0);">Form</a></li>
                                <li class="active">Wizard</li>
                            </ol>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">With Validation</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START Panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-tshirt mr5"></i> T-Shirt Order Form</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- START Form Wizard -->         
                            <form class="form-horizontal form-bordered" action="" id="wizard-validate">
                                <!-- Wizard Container 1 -->
                                <div class="wizard-title">Customize Order</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Customize your shirt order.</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Shirt type <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="shirt" id="select-shirt" data-parsley-group="order" data-parsley-required>
                                                <option value="">Please choose</option>
                                                <option value="1">Ninja shirt</option>
                                                <option value="2">Robot shirt</option>
                                                <option value="3">Pirate shirt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Size <span class="text-danger">*</span></label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="size" id="select-size" data-parsley-group="order" data-parsley-required>
                                                <option value="">Please choose</option>
                                                <option value="1">Small</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Large</option>
                                                <option value="4">X-Large</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Color <span class="text-danger">*</span></label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="color" id="select-color" data-parsley-group="order" data-parsley-required>
                                                <option value="">Please choose</option>
                                                <option value="1">Red</option>
                                                <option value="2">Purple</option>
                                                <option value="3">Blue</option>
                                                <option value="4">Green</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 1 -->

                                <!-- Wizard Container 2 -->
                                <div class="wizard-title">Informations</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Provide some of your details.</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name <span class="text-danger">*</span></label>
                                        <div class="col-sm-4">
                                            <input type="text" name="first-name" class="form-control" placeholder="First Name" data-parsley-group="information" data-parsley-required>
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="last-name" class="form-control" placeholder="Last Name" data-parsley-group="information" data-parsley-required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" name="email" class="form-control" data-parsley-group="information" data-parsley-required data-parsley-type="email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" name="street-address" class="form-control mb5" placeholder="Street Address">
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="text" name="line2-address" class="form-control mb5" placeholder="Address Line 2">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="city-address" class="form-control mb5" placeholder="City">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="state-address" class="form-control mb5" placeholder="State / Province / Region">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="postal-address" class="form-control mb5" placeholder="Postal / Zip Code">
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="country-address">
                                                        <option value="xx">Select Country</option>
                                                        <option value="xx">Worldwide</option>
                                                        <option value="af">Afghanistan</option>
                                                        <option value="dz">Algeria</option>
                                                        <option value="ar">Argentina</option>
                                                        <option value="au">Australia</option>
                                                        <option value="bd">Bangladesh</option>
                                                        <option value="br">Brazil</option>
                                                        <option value="cm">Cameroon</option>
                                                        <option value="ca">Canada</option>
                                                        <option value="co">Colombia</option>
                                                        <option value="dk">Denmark</option>
                                                        <option value="eg">Egypt</option>
                                                        <option value="et">Ethiopia</option>
                                                        <option value="fr">France</option>
                                                        <option value="de">Germany</option>
                                                        <option value="gh">Ghana</option>
                                                        <option value="gr">Greece</option>
                                                        <option value="in">India</option>
                                                        <option value="id">Indonesia</option>
                                                        <option value="iq">Iraq</option>
                                                        <option value="ie">Ireland</option>
                                                        <option value="il">Israel</option>
                                                        <option value="it">Italy</option>
                                                        <option value="jp">Japan</option>
                                                        <option value="ke">Kenya</option>
                                                        <option value="mg">Madagascar</option>
                                                        <option value="my">Malaysia</option>
                                                        <option value="mx">Mexico</option>
                                                        <option value="ma">Morocco</option>
                                                        <option value="mz">Mozambique</option>
                                                        <option value="np">Nepal</option>
                                                        <option value="nl">Netherlands</option>
                                                        <option value="nz">New Zealand</option>
                                                        <option value="ng">Nigeria</option>
                                                        <option value="pk">Pakistan</option>
                                                        <option value="pe">Peru</option>
                                                        <option value="ph">Philippines</option>
                                                        <option value="pl">Poland</option>
                                                        <option value="ro">Romania</option>
                                                        <option value="ru">Russia</option>
                                                        <option value="sa">Saudi Arabia</option>
                                                        <option value="sg">Singapore</option>
                                                        <option value="za">South Africa</option>
                                                        <option value="kr">South Korea</option>
                                                        <option value="es">Spain</option>
                                                        <option value="lk">Sri Lanka</option>
                                                        <option value="se">Sweden</option>
                                                        <option value="ch">Switzerland</option>
                                                        <option value="tw">Taiwan</option>
                                                        <option value="tz">Tanzania</option>
                                                        <option value="th">Thailand</option>
                                                        <option value="tr">Turkey</option>
                                                        <option value="ug">Uganda</option>
                                                        <option value="ua">Ukraine</option>
                                                        <option value="gb">United Kingdom</option>
                                                        <option value="us">United States</option>
                                                        <option value="uz">Uzbekistan</option>
                                                        <option value="ve">Venezuela</option>
                                                        <option value="vn">Vietnam</option>
                                                        <option value="ye">Yemen</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 2 -->

                                <!-- Wizard Container 3 -->
                                <div class="wizard-title">Payment</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Proceed to payment</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Card number <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" name="card-number" class="form-control" data-parsley-group="payment" data-parsley-required data-mask="9999-9999-9999-9999">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" name="security-code" class="form-control" placeholder="Security code" data-parsley-group="payment" data-parsley-required data-parsley-maxlength="3" data-parsley-type="integer">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name on card <span class="text-danger">*</span></label>
                                        <div class="col-sm-5">
                                            <input type="text" name="card-holder" class="form-control" data-parsley-group="payment" data-parsley-required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Expiration <span class="text-danger">*</span></label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select name="month" class="form-control" data-parsley-group="payment" data-parsley-required>
                                                        <option value="">Month</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="year" class="form-control" data-parsley-group="payment" data-parsley-required>
                                                        <option value="">Year</option>
                                                        <option value="1">2014</option>
                                                        <option value="2">2015</option>
                                                        <option value="3">2016</option>
                                                        <option value="4">2017</option>
                                                        <option value="5">2018</option>
                                                        <option value="6">2019</option>
                                                        <option value="7">2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 3 -->

                                <!-- Wizard Container 4 -->
                                <div class="wizard-title">Checkout</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Checkout</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                                            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Term Of Services</label>
                                        <div class="col-md-10">
                                            <span class="checkbox custom-checkbox">
                                                <input type="checkbox" name="checkbox-tos" id="checkbox-tos">
                                                <label for="checkbox-tos">&nbsp;&nbsp;I agree with this site <a href="javascript:void(0);">Term Of Services</a></label>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Notes</label>
                                        <div class="col-md-10">
                                            <textarea class="form-control" rows="5" placeholder="Add some notes!"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- Wizard Container 4 -->
                            </form>
                            <!--/ END Form Wizard --> 
                        </div>
                        <!--/ END Panel -->
                    </div>
                </div>
                <!--/ END row -->
                <hr><!-- Horizontal rule -->

                <!-- section header -->
                <div class="section-header">
                    <h5 class="semibold title mb15">No Validation</h5>
                </div>
                <!--/ section header -->

                <!-- START row -->
                <div class="row">
                    <div class="col-md-12">
                        <!-- START Panel -->
                        <div class="panel panel-default">
                            <!-- panel heading/header -->
                            <div class="panel-heading">
                                <h3 class="panel-title"><i class="ico-tshirt mr5"></i> T-Shirt Order Form</h3>
                            </div>
                            <!--/ panel heading/header -->
                            <!-- START Form Wizard -->         
                            <form class="form-horizontal form-bordered" action="" id="wizard">
                                <!-- Wizard Container 1 -->
                                <div class="wizard-title">Customize Order</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Customize your shirt order.</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Shirt type</label>
                                        <div class="col-sm-5">
                                            <select class="form-control" name="shirt">
                                                <option value="">Please choose</option>
                                                <option value="1">Ninja shirt</option>
                                                <option value="2">Robot shirt</option>
                                                <option value="3">Pirate shirt</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Size</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="size">
                                                <option value="">Please choose</option>
                                                <option value="1">Small</option>
                                                <option value="2">Medium</option>
                                                <option value="3">Large</option>
                                                <option value="4">X-Large</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Color</label>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="color">
                                                <option value="">Please choose</option>
                                                <option value="1">Red</option>
                                                <option value="2">Purple</option>
                                                <option value="3">Blue</option>
                                                <option value="4">Green</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 1 -->

                                <!-- Wizard Container 2 -->
                                <div class="wizard-title">Informations</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Provide some of your details.</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name</label>
                                        <div class="col-sm-4">
                                            <input type="text" name="first-name" class="form-control" placeholder="First Name">
                                        </div>
                                        <div class="col-sm-4">
                                            <input type="text" name="last-name" class="form-control" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Email</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Address</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <input type="text" name="street-address" class="form-control mb5" placeholder="Street Address">
                                                </div>
                                                <div class="col-sm-12">
                                                    <input type="text" name="line2-address" class="form-control mb5" placeholder="Address Line 2">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="city-address" class="form-control mb5" placeholder="City">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="state-address" class="form-control mb5" placeholder="State / Province / Region">
                                                </div>
                                                <div class="col-sm-6">
                                                    <input type="text" name="postal-address" class="form-control mb5" placeholder="Postal / Zip Code">
                                                </div>
                                                <div class="col-sm-6">
                                                    <select class="form-control" name="country-address">
                                                        <option value="xx">Select Country</option>
                                                        <option value="xx">Worldwide</option>
                                                        <option value="af">Afghanistan</option>
                                                        <option value="dz">Algeria</option>
                                                        <option value="ar">Argentina</option>
                                                        <option value="au">Australia</option>
                                                        <option value="bd">Bangladesh</option>
                                                        <option value="br">Brazil</option>
                                                        <option value="cm">Cameroon</option>
                                                        <option value="ca">Canada</option>
                                                        <option value="co">Colombia</option>
                                                        <option value="dk">Denmark</option>
                                                        <option value="eg">Egypt</option>
                                                        <option value="et">Ethiopia</option>
                                                        <option value="fr">France</option>
                                                        <option value="de">Germany</option>
                                                        <option value="gh">Ghana</option>
                                                        <option value="gr">Greece</option>
                                                        <option value="in">India</option>
                                                        <option value="id">Indonesia</option>
                                                        <option value="iq">Iraq</option>
                                                        <option value="ie">Ireland</option>
                                                        <option value="il">Israel</option>
                                                        <option value="it">Italy</option>
                                                        <option value="jp">Japan</option>
                                                        <option value="ke">Kenya</option>
                                                        <option value="mg">Madagascar</option>
                                                        <option value="my">Malaysia</option>
                                                        <option value="mx">Mexico</option>
                                                        <option value="ma">Morocco</option>
                                                        <option value="mz">Mozambique</option>
                                                        <option value="np">Nepal</option>
                                                        <option value="nl">Netherlands</option>
                                                        <option value="nz">New Zealand</option>
                                                        <option value="ng">Nigeria</option>
                                                        <option value="pk">Pakistan</option>
                                                        <option value="pe">Peru</option>
                                                        <option value="ph">Philippines</option>
                                                        <option value="pl">Poland</option>
                                                        <option value="ro">Romania</option>
                                                        <option value="ru">Russia</option>
                                                        <option value="sa">Saudi Arabia</option>
                                                        <option value="sg">Singapore</option>
                                                        <option value="za">South Africa</option>
                                                        <option value="kr">South Korea</option>
                                                        <option value="es">Spain</option>
                                                        <option value="lk">Sri Lanka</option>
                                                        <option value="se">Sweden</option>
                                                        <option value="ch">Switzerland</option>
                                                        <option value="tw">Taiwan</option>
                                                        <option value="tz">Tanzania</option>
                                                        <option value="th">Thailand</option>
                                                        <option value="tr">Turkey</option>
                                                        <option value="ug">Uganda</option>
                                                        <option value="ua">Ukraine</option>
                                                        <option value="gb">United Kingdom</option>
                                                        <option value="us">United States</option>
                                                        <option value="uz">Uzbekistan</option>
                                                        <option value="ve">Venezuela</option>
                                                        <option value="vn">Vietnam</option>
                                                        <option value="ye">Yemen</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 2 -->

                                <!-- Wizard Container 3 -->
                                <div class="wizard-title">Payment</div>
                                <div class="wizard-container">
                                    <div class="form-group">
                                        <div class="col-md-12">
                                            <h5 class="semibold text-primary nm">Proceed to payment</h5>
                                            <p class="text-muted nm">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                            tempor incididunt ut labore et dolore magna aliqua.</p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Card number</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="card-number" class="form-control" data-mask="9999-9999-9999-9999">
                                        </div>
                                        <div class="col-sm-5">
                                            <input type="text" name="security-code" class="form-control" placeholder="Security code">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Name on card</label>
                                        <div class="col-sm-5">
                                            <input type="text" name="card-holder" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-2 control-label">Expiration</label>
                                        <div class="col-sm-10">
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <select name="month" class="form-control">
                                                        <option value="">Month</option>
                                                        <option value="1">January</option>
                                                        <option value="2">February</option>
                                                        <option value="3">March</option>
                                                        <option value="4">April</option>
                                                        <option value="5">May</option>
                                                        <option value="6">June</option>
                                                        <option value="7">July</option>
                                                        <option value="8">August</option>
                                                        <option value="9">September</option>
                                                        <option value="10">October</option>
                                                        <option value="11">November</option>
                                                        <option value="12">December</option>
                                                    </select>
                                                </div>
                                                <div class="col-sm-4">
                                                    <select name="year" class="form-control">
                                                        <option value="">Year</option>
                                                        <option value="1">2014</option>
                                                        <option value="2">2015</option>
                                                        <option value="3">2016</option>
                                                        <option value="4">2017</option>
                                                        <option value="5">2018</option>
                                                        <option value="6">2019</option>
                                                        <option value="7">2020</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/ Wizard Container 3 -->
                            </form>
                            <!--/ END Form Wizard --> 
                        </div>
                        <!--/ END Panel -->
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
		<script type="text/javascript" src="/plugins/steps/js/jquery-steps.js"></script>
        <script type="text/javascript" src="/plugins/parsley/js/parsley.js"></script>
        <script type="text/javascript" src="/plugins/inputmask/js/inputmask.js"></script>
        <script type="text/javascript" src="/javascript/backend/forms/wizard.js"></script>
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>