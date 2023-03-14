<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/navbar.css" rel="stylesheet">
    <title>{{ $title }}</title>
</head>

<body>
    @include('partials.navbar')
    @yield('main')
    @include('partials.footer')
    <script src="assets/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
