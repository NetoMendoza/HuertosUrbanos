@include('cliente.layouts.header')

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('cliente.layouts.nav-horizontal')
        @yield('navbar-top')

    </div>
    <!-- END layout-wrapper -->
    @include('cliente.layouts.sidebar-left')
    @yield('sidebar-left')
    <div class="main-content">

        <div class="page-content">

            @yield('content')

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>


            @include('cliente.layouts.footer')
</body>

</html>