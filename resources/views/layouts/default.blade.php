<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="Scotch">

    <title>Super Cool Layouts</title>

    <!-- load bootstrap from a cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('js/slick/slick.css')}}">
    <link rel="stylesheet" href="{{ asset('js/slick/slick-theme.css')}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/slick/slick.js') }}"></script>

</head>
<body>
    

    <div class="container-fluid">
        <header class="row">
                @include('includes.header')
        </header>
    </div>

    <div class="container">
        <div id="main" class="row">
                @yield('content')
        </div>
    </div>
    <div class="container">
            
        <footer class="row">
                @include('includes.footer')
        </footer>
    </div>
</div>
</body>
</html>