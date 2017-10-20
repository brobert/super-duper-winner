<!DOCTYPE html>
<html class="backend">
    <!-- START Head -->
        @include('landerv2.layouts.partials.html_head')
    <!--/ END Head -->

    <!-- START Body -->
    <body>
        <!-- START Template Header -->
        @include('landerv2/layouts/partials/header')
        <!--/ END Template Header -->

        <!-- START Template Sidebar (Left) -->
        @include('landerv2/layouts/partials/sidebar_left')
        <!--/ END Template Sidebar (Left) -->

        <!-- START Template Sidebar (right) -->
        @include('landerv2/layouts/partials/sidebar_right')
        <!--/ END Template Sidebar (right) -->

        <!-- START Template Main -->
        <section id="main" role="main">

            @yield('content')

            <!-- START To Top Scroller -->
            <a href="#" class="totop animation" data-toggle="waypoints totop" data-showanim="bounceIn" data-hideanim="bounceOut" data-offset="80%"><i class="ico-angle-up"></i></a>
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
        @yield('asset_js')
        <!--/ Plugins and page level script : optional -->
        <!--/ END JAVASCRIPT SECTION -->
    </body>
    <!--/ END Body -->
</html>