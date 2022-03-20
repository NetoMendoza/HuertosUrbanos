@extends('layouts.base')
@section('header')
@include('layouts.header')
@endsection

<body class="font-sans antialiased bg-light">
    <x-jet-banner />
    @livewire('navigation-menu')

    <!-- Page Heading -->
    <header class="d-flex py-3 bg-white shadow-sm border-bottom">
        <div class="container">
            {{ $header }}
        </div>
    </header>

    <!-- Page Content -->
    <main class="container my-5">
        {{ $slot }}
    </main>

    @stack('modals')

    @livewireScripts

    @stack('scripts')

    @section('footer')
    @include('layouts.footer')
    @endsection

</body>

</html>