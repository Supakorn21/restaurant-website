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
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            @yield('content')
        </section>


    </section>


</html>
