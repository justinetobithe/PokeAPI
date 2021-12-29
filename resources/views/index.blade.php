<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }}</title>

    <link href="{{ asset('/plugins/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
 
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
</head>

<body id="page-top">

    <div id="wrapper"></div>

    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <script>
        const AUTH_USER = {!! $user->toJson() !!};
    </script>

    <script src="{{ asset('/js/app.js') }}?v=<?= date('U') ?>"></script>

    <script src="{{ asset('/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <script src="{{ asset('/plugins/jquery-easing/jquery.easing.min.js') }}"></script>

    <script src="{{ asset('/js/main.js') }}"></script>

    <script src="{{ asset('/plugins/chart.js/Chart.min.js') }}"></script>
</body>

</html>