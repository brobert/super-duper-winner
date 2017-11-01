@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/owl/css/owl-carousel.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/owl/js/owl.carousel.js"></script>
        <script type="text/javascript" src="/plugins/shuffle/js/jquery.shuffle.js"></script>
        <script type="text/javascript" src="/javascript/backend/pages/blog.js"></script>
@endsection

@section('content')
            <div class="container-fluid">

                <!-- START Row -->
                <div class="row">
                    <!-- START left / top side -->
                    <div class="col-lg-9">
                        <!-- Blog post #1 -->
                        <div class="row">
                            <div class="col-xs-12">
                                <article class="panel overflow-hidden">
                                    <!-- Content -->
                                    <section class="panel-body">
                                        <div class="row">
                                            <!-- post date -->
                                            <div class="col-xs-3 col-sm-1 col-md-1 pr0">
                                                <div class="panel widget">
                                                    <div class="pa10">
                                                        <h4 class="bold nm text-primary text-center">24</h4>
                                                    </div>
                                                    <hr class="nm">
                                                    <div class="pa10 bgcolor-default">
                                                        <p class="semibold nm text-default text-center">Apr</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ post date -->

                                            <!-- post content -->
                                            <div class="col-xs-9 col-sm-11 col-md-11">
                                                <!-- heading -->
                                                <h4 class="thin mt0"><a href="javascript:void(0);" class="text-default">Default post format</a></h4>
                                                <!--/ heading -->

                                                <!-- text -->
                                                <div class="text-default">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.</p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <!--/ text -->

                                                <!-- Meta & button -->
                                                <div class="table-layout mt15 mb0">
                                                    <div class="col-sm-6">
                                                        <!-- meta -->
                                                        <p class="meta nm">
                                                            <a href="javascript:void(0);">1 comment</a><!-- comments -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">In </span><a href="javascript:void(0);">Web design</a><!-- category -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">By </span><a href="javascript:void(0);">Hedda Gordon</a><!-- author -->
                                                        </p>
                                                        <!--/ meta -->
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="javascript:void(0);" class="btn btn-success pull-right">Read more&#8230;</a>
                                                    </div>
                                                </div>
                                                <!-- Meta & button -->
                                            </div>
                                            <!--/ post content -->
                                        </div>
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                        </div>
                        <!--/ Blog post #1 -->

                        <!-- Blog post #2 -->
                        <div class="row">
                            <div class="col-xs-12">
                                <article class="panel overflow-hidden">
                                    <!-- Thumbnail -->
                                    <header class="thumbnail">
                                        <!-- media -->
                                        <div class="media">
                                            <!-- indicator -->
                                            <div class="indicator"><span class="spinner"></span></div>
                                            <!--/ indicator -->
                                            <!-- toolbar overlay -->
                                            <div class="overlay">
                                                <div class="toolbar">
                                                    <a href="javascript:void(0);" class="btn btn-default"><i class="ico-link4"></i></a>
                                                </div>
                                            </div>
                                            <!--/ toolbar overlay -->
                                            <img data-toggle="unveil" src="/image/background/placeholder.jpg" data-src="/image/background/blog/blog1.jpg" alt="Photo" width="100%">
                                        </div>
                                        <!--/ media -->
                                    </header>
                                    <!--/ Thumbnail -->

                                    <!-- Content -->
                                    <section class="panel-body">
                                        <div class="row">
                                            <!-- post date -->
                                            <div class="col-xs-3 col-sm-1 col-md-1 pr0">
                                                <div class="panel widget">
                                                    <div class="pa10">
                                                        <h4 class="bold nm text-primary text-center">26</h4>
                                                    </div>
                                                    <hr class="nm">
                                                    <div class="pa10 bgcolor-default">
                                                        <p class="semibold nm text-default text-center">Aug</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ post date -->

                                            <!-- post content -->
                                            <div class="col-xs-9 col-sm-11 col-md-11">
                                                <!-- heading -->
                                                <h4 class="thin mt0"><a href="javascript:void(0);" class="text-default">image post format</a></h4>
                                                <!--/ heading -->

                                                <!-- text -->
                                                <div class="text-default">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.</p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <!--/ text -->

                                                <!-- Meta & button -->
                                                <div class="table-layout mt15 mb0">
                                                    <div class="col-sm-6">
                                                        <!-- meta -->
                                                        <p class="meta nm">
                                                            <a href="javascript:void(0);">0 comment</a><!-- comments -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">In </span><a href="javascript:void(0);">Latest news</a><!-- category -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">By </span><a href="javascript:void(0);">Lamar Morin</a><!-- author -->
                                                        </p>
                                                        <!--/ meta -->
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="javascript:void(0);" class="btn btn-success pull-right">Read more&#8230;</a>
                                                    </div>
                                                </div>
                                                <!-- Meta & button -->
                                            </div>
                                            <!--/ post content -->
                                        </div>
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                        </div>
                        <!--/ Blog post #2 -->

                        <!-- Blog post #3 -->
                        <div class="row">
                            <div class="col-xs-12">
                                <article class="panel overflow-hidden">
                                    <!-- Owl Carousel -->
                                    <header id="carousel1" class="owl-carousel">
                                        <div class="image"><img src="/image/background/blog/blog5.jpg"></div>
                                        <div class="image"><img src="/image/background/blog/blog3.jpg"></div>
                                        <div class="image"><img src="/image/background/blog/blog4.jpg"></div>
                                    </header>
                                    <!--/ Owl Carousel -->

                                    <!-- Content -->
                                    <section class="panel-body">
                                        <div class="row">
                                            <!-- post date -->
                                            <div class="col-xs-3 col-sm-1 col-md-1 pr0">
                                                <div class="panel widget">
                                                    <div class="pa10">
                                                        <h4 class="bold nm text-primary text-center">28</h4>
                                                    </div>
                                                    <hr class="nm">
                                                    <div class="pa10 bgcolor-default">
                                                        <p class="semibold nm text-default text-center">Oct</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ post date -->

                                            <!-- post content -->
                                            <div class="col-xs-9 col-sm-11 col-md-11">
                                                <!-- heading -->
                                                <h4 class="thin mt0"><a href="javascript:void(0);" class="text-default">Gallery post format</a></h4>
                                                <!--/ heading -->

                                                <!-- text -->
                                                <div class="text-default">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.</p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <!--/ text -->

                                                <!-- Meta & button -->
                                                <div class="table-layout mt15 mb0">
                                                    <div class="col-sm-6">
                                                        <!-- meta -->
                                                        <p class="meta nm">
                                                            <a href="javascript:void(0);">9 comment</a><!-- comments -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">In </span><a href="javascript:void(0);">Lifestyle</a><!-- category -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">By </span><a href="javascript:void(0);">Gray Jackson</a><!-- author -->
                                                        </p>
                                                        <!--/ meta -->
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="javascript:void(0);" class="btn btn-success pull-right">Read more&#8230;</a>
                                                    </div>
                                                </div>
                                                <!-- Meta & button -->
                                            </div>
                                            <!--/ post content -->
                                        </div>
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                        </div>
                        <!--/ Blog post #3 -->

                        <!-- Blog post #4 -->
                        <div class="row">
                            <div class="col-xs-12">
                                <article class="panel overflow-hidden">
                                    <!-- Iframe container -->
                                    <header class="iframe-container">
                                        <iframe src="//player.vimeo.com/video/7449107" webkitallowfullscreen mozallowfullscreen allowfullscreen frameborder="0"></iframe>
                                    </header>
                                    <!--/ Iframe container -->

                                    <!-- Content -->
                                    <section class="panel-body">
                                        <div class="row">
                                            <!-- post date -->
                                            <div class="col-xs-3 col-sm-1 col-md-1 pr0">
                                                <div class="panel widget">
                                                    <div class="pa10">
                                                        <h4 class="bold nm text-primary text-center">6</h4>
                                                    </div>
                                                    <hr class="nm">
                                                    <div class="pa10 bgcolor-default">
                                                        <p class="semibold nm text-default text-center">Jun</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ post date -->

                                            <!-- post content -->
                                            <div class="col-xs-9 col-sm-11 col-md-11">
                                                <!-- heading -->
                                                <h4 class="thin mt0"><a href="javascript:void(0);" class="text-default">Video post format</a></h4>
                                                <!--/ heading -->

                                                <!-- text -->
                                                <div class="text-default">
                                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                    consequat.</p>
                                                    <p>Duis aute irure dolor in reprehenderit in voluptate velit esse
                                                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                                                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                                </div>
                                                <!--/ text -->

                                                <!-- Meta & button -->
                                                <div class="table-layout mt15 mb0">
                                                    <div class="col-sm-6">
                                                        <!-- meta -->
                                                        <p class="meta nm">
                                                            <a href="javascript:void(0);">16 comment</a><!-- comments -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">In </span><a href="javascript:void(0);">Animations</a><!-- category -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">By </span><a href="javascript:void(0);">Anthony Alvarez</a><!-- author -->
                                                        </p>
                                                        <!--/ meta -->
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="javascript:void(0);" class="btn btn-success pull-right">Read more&#8230;</a>
                                                    </div>
                                                </div>
                                                <!-- Meta & button -->
                                            </div>
                                            <!--/ post content -->
                                        </div>
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                        </div>
                        <!--/ Blog post #4 -->

                        <!-- Blog post #5 -->
                        <div class="row">
                            <div class="col-xs-12">
                                <article class="panel overflow-hidden">
                                    <!-- Content -->
                                    <section class="panel-body">
                                        <div class="row">
                                            <!-- post date -->
                                            <div class="col-xs-3 col-sm-1 col-md-1 pr0">
                                                <div class="panel widget">
                                                    <div class="pa10">
                                                        <h4 class="bold nm text-primary text-center">9</h4>
                                                    </div>
                                                    <hr class="nm">
                                                    <div class="pa10 bgcolor-default">
                                                        <p class="semibold nm text-default text-center">May</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <!--/ post date -->

                                            <!-- post content -->
                                            <div class="col-xs-9 col-sm-11 col-md-11">
                                                <!-- heading -->
                                                <h4 class="thin mt0"><a href="javascript:void(0);" class="text-default">Blockquote post format</a></h4>
                                                <!--/ heading -->

                                                <!-- text -->
                                                <div class="text-default">
                                                    <blockquote>
                                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                                        consequat.</p>
                                                        <footer>Someone famous in <cite title="Source Title">Source Title</cite></footer>
                                                    </blockquote>
                                                </div>
                                                <!--/ text -->

                                                <!-- Meta & button -->
                                                <div class="table-layout mt15 mb0">
                                                    <div class="col-sm-6">
                                                        <!-- meta -->
                                                        <p class="meta nm">
                                                            <a href="javascript:void(0);">21 comment</a><!-- comments -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">In </span><a href="javascript:void(0);">Web design</a><!-- category -->
                                                            <span class="text-muted mr5 ml5">&#8226;</span>
                                                            <span class="text-muted">By </span><a href="javascript:void(0);">John Does</a><!-- author -->
                                                        </p>
                                                        <!--/ meta -->
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="javascript:void(0);" class="btn btn-success pull-right">Read more&#8230;</a>
                                                    </div>
                                                </div>
                                                <!-- Meta & button -->
                                            </div>
                                            <!--/ post content -->
                                        </div>
                                    </section>
                                    <!--/ Content -->
                                </article>
                            </div>
                        </div>
                        <!--/ Blog post #5 -->

                        <hr><!-- horizontal line -->

                        <!-- pager -->
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="pager mt0">
                                    <li class="previous"><a href="javascript:void(0);"><i class="ico-angle-left mr5"></i> Older</a></li>
                                    <li class="next"><a href="javascript:void(0);">Newer <i class="ico-angle-right ml5"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <!--/ pager -->
                    </div>
                    <!--/ END left / top side -->

                    <!-- START right / bottom side -->
                    <div class="col-lg-3">
                        <!-- Search form -->
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <span class="input-group-btn">
                                        <button class="btn btn-default" type="button"><i class="ico-search"></i></button>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <!--/ Search form -->

                        <hr><!-- horizontal line -->

                        <!-- Categories -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Categories</h5>
                                <div class="list-group">
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Photo</a>
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Nature</a>
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Web Design</a>
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Lifestyle</a>
                                    <a href="#" class="list-group-item"><i class="ico-angle-right mr5"></i> Technology</a>
                                </div>
                            </div>
                        </div>
                        <!--/ Categories -->

                        <hr><!-- horizontal line -->

                        <!-- Tags -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Tags</h5>
                                <div class="btn-tag">
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">wordpress</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">development</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">bootstrap</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">admin</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">template</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">flat</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">clean</a>
                                    <a href="javascript:void(0);" class="btn btn-default btn-sm">awesome</a>
                                </div>
                            </div>
                        </div>
                        <!-- Tags -->

                        <hr><!-- horizontal line -->

                        <!-- Text widget -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Text widget</h5>
                                <p class="nm text-default">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</p>
                            </div>
                        </div>
                        <!-- Text widget -->

                        <hr><!-- horizontal line -->

                        <!-- Tabbed content -->
                        <div class="row">
                            <div class="col-xs-12">
                                <h5 class="semibold mt0 text-primary">Tabbed content</h5>
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popular" data-toggle="tab">Popular</a></li>
                                    <li class=""><a href="#recent" data-toggle="tab">Recent</a></li>
                                </ul>
                                <div class="tab-content panel nm">
                                    <div class="tab-pane active pl0 pr0" id="popular">
                                        <!-- Media list -->
                                        <div class="media-list">
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background1.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Jan 13, 2014</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Lorem ipsum dolor sit amet</span>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background2.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Nov 27, 2014</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Mauris eu turpis. Nulla aliquet.</span>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background3.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Oct 13, 2014</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Consectetur adipisicing elit.</span>
                                                </span>
                                            </a>
                                        </div>
                                        <!--/ Message list -->
                                    </div>
                                    <div class="tab-pane pl0 pr0" id="recent">
                                        <!-- Media list -->
                                        <div class="media-list">
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background4.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Apr 26, 2013</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Ut enim ad minim veniam</span>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background5.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Nov 30, 2013</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Duis aute irure dolor in reprehenderit.</span>
                                                </span>
                                            </a>
                                            <a href="javascript:void(0);" class="media border-dotted">
                                                <span class="pull-left">
                                                    <img src="/image/background/400x400/background6.jpg" class="media-object" alt="">
                                                </span>
                                                <span class="media-body">
                                                    <!-- meta icon -->
                                                    <span class="media-meta">Oct 8, 2014</span>
                                                    <!--/ meta icon -->
                                                    <span class="media-heading">Excepteur sint occaecat cupidatat non</span>
                                                </span>
                                            </a>
                                        </div>
                                        <!--/ Message list -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Tabbed content -->
                    </div>
                    <!--/ END right / bottom side -->
                </div>
                <!--/ END Row -->
            </div>
@endsection

@section('footer')
@endsection

