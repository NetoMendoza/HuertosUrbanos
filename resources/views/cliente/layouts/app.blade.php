@include('cliente.layouts.header')

<body>

    <!-- Begin page -->
    <div id="layout-wrapper">

        @include('cliente.layouts.nav-horizontal')
        @yield('navbar-top')

    </div>
    <!-- END layout-wrapper -->
    @switch(auth()->user()->role_id)
                @case(1)
                @include('admin.layouts.sidebar-left')
                @break
                @case(2)
                @include('cliente.layouts.sidebar-left')
                @break
                @case(3)
                @include('cliente.layouts.sidebar-left')
                @break
                @case(4)
                @include('cliente.layouts.sidebar-left')
                @break
                @endswitch
    @yield('sidebar-left')
    <div class="main-content">

        <div class="page-content">

            @yield('content')

            <!-- Right bar overlay-->
            <div class="rightbar-overlay"></div>


            @include('cliente.layouts.footer')
            @yield('footer')
</body>

</html>