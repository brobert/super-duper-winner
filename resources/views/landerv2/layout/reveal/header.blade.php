@extends('layouts.admin')

@section('page_title')
Lander.v2 - Bootstrap WebApp & Dashboard
@endsection

@section('asset_css')
@endsection

@section('asset_css_theme')
        <link rel="stylesheet" href="/css/themes/theme.css">
        <link rel="stylesheet" href="/css/themes/layouts/reveal-header.css">
@endsection

@section('asset_js')
        <script type="text/javascript" src="/javascript/pace.min.js"></script>
@endsection

@section('content')
            <div class="container-fluid" style="min-height:1024px;"><!-- add min-height to simulate scrolling -->

            </div>
@endsection

@section('footer')
        <footer id="footer">
            <!-- START container-fluid -->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                        <!-- copyright -->
                        <p class="nm text-muted">&copy; Copyright 2015. All Rights Reserved.</p>
                        <!--/ copyright -->
                    </div>
                    <div class="col-sm-6 text-right hidden-xs">
                        <a href="javascript:void(0);" class="semibold">Privacy Policy</a>
                        <span class="ml5 mr5">&#8226;</span>
                        <a href="javascript:void(0);" class="semibold">Terms of Service</a>
                    </div>
                </div>
            </div>
            <!--/ END container-fluid -->
        </footer>
@endsection

