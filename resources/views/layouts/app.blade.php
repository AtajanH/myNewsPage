<!DOCTYPE html>
<html>
<head>
    <title>News</title>
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body class="d-flex h-100 text-center text-bg-dark bg-light">
    <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
    @include('layouts.header')

    <div class="content m-auto">
        @yield('content')
    </div>

    @include('layouts.footer')
    </div>
    

    

    <!-- Подключение локального jQuery -->
    <script src="{{ asset('js/jquery-3.7.1.min.js') }}"></script>
    @yield('scripts')
</body>
</html>
