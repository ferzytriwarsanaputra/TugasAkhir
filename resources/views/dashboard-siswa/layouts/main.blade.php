<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Halaman {{ $title }}</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard.css">
</head>

<body>
    <div class="d-flex" id="wrapper">
        @unless(
            Request::is('petunjuk/*') ||
            Request::is('kuis/*') ||
            Request::is('dashboard-siswa/nilai') ||
            Request::is('petunjuk-evaluasi/*') ||
            Request::is('evaluasi/mulai/*')
        )
            @include('dashboard-siswa.layouts.sidebar')
        @endunless
    
        @php
            $noSidebar = 
                Request::is('petunjuk/*') ||
                Request::is('kuis/*') ||
                Request::is('dashboard-siswa/nilai') ||
                Request::is('petunjuk-evaluasi/*') ||
                Request::is('evaluasi/mulai/*');
        @endphp

        <div class="main w-100 {{ $noSidebar ? 'no-sidebar' : '' }}" id="wrapper">
            @include('dashboard-siswa.layouts.header')
            <main class="p-3">
                @yield('container')
            </main>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="/js/dashboard.js"></script>
    <script src="/js/script.js"></script>    
</body>
</html>