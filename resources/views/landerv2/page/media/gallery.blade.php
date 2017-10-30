@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
        <link rel="stylesheet" href="/plugins/magnific/css/magnific.css">
@endsection

@section('asset_css_theme')
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
        <script type="text/javascript" src="/plugins/magnific/js/jquery.magnific-popup.js"></script>
        <script type="text/javascript" src="/plugins/shuffle/js/jquery.shuffle.js"></script>
        <script type="text/javascript" src="/javascript/backend/pages/media-gallery.js"></script>
@endsection

@section('content')
            <div class="container-fluid">
                <!-- Page Header -->
                <div class="page-header page-header-block">
                    <div class="page-header-section">
                        <h4 class="title semibold">Media gallery</h4>
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar">
                            <span class="toolbar-label semibold mr5">Filters : </span>
                            <div class="btn-group" id="shuffle-filter">
                                <button class="btn btn-default" data-group="creative">Creative</button>
                                <button class="btn btn-default" data-group="business">Business</button>
                                <button class="btn btn-default" data-group="nature">Nature</button>
                            </div>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                    <div class="page-header-section">
                        <!-- Toolbar -->
                        <div class="toolbar clearfix">
                            <div class="col-sm-6">
                                <span class="toolbar-label semibold mr5">Sort : </span>
                            </div>
                            <div class="col-sm-6">
                                <select class="form-control" id="shuffle-sort">
                                    <option value="">Default</option>
                                    <option value="title">Title</option>
                                    <option value="date-created">Date Created</option>
                                </select>
                            </div>
                        </div>
                        <!--/ Toolbar -->
                    </div>
                </div>
                <!-- Page Header -->

                <!-- START row -->
                <div class="row" id="shuffle-grid">
                    <div class="col-md-3 shuffle" data-groups='["nature"]' data-date-created="2014-01-02" data-title="background1">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background1.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background1.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-02</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background1.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["creative"]' data-date-created="2014-01-04" data-title="background2">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background2.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background2.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-04</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background2.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature"]' data-date-created="2014-02-06" data-title="background3">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background3.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background3.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-06</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background3.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature", "creative"]' data-date-created="2014-01-20" data-title="background4">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background4.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background4.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-20</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background4.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature"]' data-date-created="2014-02-01" data-title="background5">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background5.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background5.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-01</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background5.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["creative"]' data-date-created="2014-02-01" data-title="background6">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background6.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background6.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-01</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background6.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["business", "creative"]' data-date-created="2014-02-08" data-title="background7">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background7.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background7.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-08</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background7.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature", "creative"]' data-date-created="2014-01-21" data-title="background8">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background8.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background8.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-21</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background8.jpg" alt="Photo" width="100%"/>
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["business"]' data-date-created="2014-01-01" data-title="background9">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background9.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background9.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-01-01</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background9.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["business", "creative"]' data-date-created="2014-02-01" data-title="background10">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background10.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background10.jpg <br/>
                                        <small><i class="ico-calendar2"></i> 2014-02-01</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background10.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature"]' data-date-created="2014-03-11" data-title="background11">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background11.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background11.jpg <br/>
                                        <small><i class="ico-calendar4"></i> 2014-03-11</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background11.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                    <div class="col-md-3 shuffle" data-groups='["nature", "creative"]' data-date-created="2014-02-11" data-title="background12">
                        <!-- thumbnail -->
                        <div class="thumbnail">
                            <!-- media -->
                            <div class="media">
                                <!-- indicator -->
                                <div class="indicator"><span class="spinner"></span></div>
                                <!--/ indicator -->
                                <!-- toolbar overlay -->
                                <div class="overlay">
                                    <div class="toolbar">
                                        <a href="/image/background/background12.jpg" class="btn btn-default magnific" title="view picture"><i class="ico-search"></i></a>
                                        <a href="#" class="btn btn-default" title="love this picture"><i class="ico-heart6"></i></a>
                                    </div>
                                </div>
                                <!--/ toolbar overlay -->
                                <!-- meta -->
                                <span class="meta bottom darken">
                                    <h5 class="nm semibold">
                                        background11.jpg <br/>
                                        <small><i class="ico-calendar4"></i> 2014-02-11</small>
                                    </h5>
                                </span>
                                <!--/ meta -->
                                <img data-toggle="unveil" src="/image/background/400x400/placeholder.jpg" data-src="/image/background/400x400/background12.jpg" alt="Photo" width="100%" />
                            </div>
                            <!--/ media -->
                        </div>
                        <!--/ thumbnail -->
                    </div>
                </div>
                <!--/ END row -->
            </div>
@endsection

@section('footer')
@endsection

