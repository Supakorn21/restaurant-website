<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>

    @include('includes.metatags')

    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
</head>

<body class="antialiased">
    <section id="app-layout">
        @include('includes.side-menu')
        <div class="welcome-jumbo">
            <div class="menu-icon">
                <i class="fa-solid fa-bars"></i>
            </div>
            <div class="status">New</div>
            <h1>{{ $settings['general']->site_title }} </h1>
            <div class="burger-fries">
                <img src="./images/main-hamburger0landing-page.png" alt="burger-fries" />
            </div>
        </div>
    </section>

    @yield('content')

    <script src="/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="{{ asset('/js/slider.js') }}"></script>
    <script src="{{ asset('/js/sideNav.js') }}"></script>
</body>

</html>
