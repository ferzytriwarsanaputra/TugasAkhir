{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Materi</title>
    <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div class="d-flex">
      @include('dashboard-siswa.layouts.sidebar')
        <!-- Main Component -->
        <div class="main">
          @include('dashboard-siswa.layouts.header')
            <main class="p-3">
                @yield('container')
            </main>
        </div>
    </div>
    <script src="/js/dashboard.js"></script>
    <script src="/js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Materi</title>
    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- Custom styles for this template -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/sortablejs@1.15.0/Sortable.min.js"></script>
    <link href="/css/dashboard.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/dashboard.css">
  </head>
  <body>
    
@include('dashboard-siswa.layouts.header')

<div class="container-fluid">
  <div class="row">
    @include('dashboard-siswa.layouts.sidebar')

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      @yield('container')
      @if (isset($prevUrl) || isset($nextUrl))
        <div class="d-flex justify-content-between mt-4">
          @if (isset($prevUrl))
            <a href="{{ $prevUrl }}" class="btn btn-secondary">Sebelumnya</a>
          @else
            <span></span>
          @endif

          @if (isset($nextUrl))
            <a href="{{ $nextUrl }}" class="btn btn-primary">Berikutnya</a>
          @endif
        </div>
      @endif
    </main>
    @include('partials.footer')
  </div>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script>

<script src="/js/dashboard.js"></script>
<script src="/js/script.js"></script>
  </body>
</html>