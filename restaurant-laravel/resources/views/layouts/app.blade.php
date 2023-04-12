<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('includes.metatags')

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <section id="app-layout">

        @include('includes.side-menu')

        <section id="content-section">
            <div class="menu-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @yield('content')
        </section>


    </section>
    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('./js/slider.js') }}">
        < script src = "{{ asset('/js/sideNav.js') }}" >
    </script>
    <script src="{{ asset('./js/sideNav.js') }}"></script>
</body>

</html>
