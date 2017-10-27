<aside class="sidebar sidebar-left sidebar-menu">
    <!-- START Sidebar Content -->
    <section class="content slimscroll">
        <!-- START Template Navigation/Menu -->
        @include('landerv2/layouts/partials/menu_level', [ 'parent' => false, 'children' => $main_menu ])
        <!--/ END Template Navigation/Menu -->

        <!-- START Sidebar summary -->
        @include('landerv2/layouts/partials/sidebar_left_summary_charts')
        <!--/ END Sidebar summary -->
    </section>
    <!--/ END Sidebar Container -->
</aside>