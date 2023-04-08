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
            <div class="status">New</div>
            <h1>Tommy Burgers</h1>
            <div class="burger-fries">
                <img src="./images/main-hamburger0landing-page.png" alt="burger-fries" />
            </div>
        </div>
    </section>

    @yield('content')
</body>

</html>
