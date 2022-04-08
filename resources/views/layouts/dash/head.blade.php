<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible"
          content="IE=edge">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="shortcut icon" href="{{ asset('img/favicon.png') }}" type="image/x-icon">
    <title>@yield('title', config('app.name')) - {{ config('app.name') }}</title>

    <!-- Perfect Scrollbar -->
    <link type="text/css"
          href="{{ asset('assets/vendor/perfect-scrollbar.css') }}"
          rel="stylesheet">

    <!-- App CSS -->
    <link type="text/css"
          href="{{ asset('assets/css/app.css') }}"
          rel="stylesheet">

    <!-- Material Design Icons -->
    <link type="text/css"
          href="{{ asset('assets/css/vendor-material-icons.css') }}"
          rel="stylesheet">

    <!-- Font Awesome FREE Icons -->
    <link type="text/css"
          href="{{ asset('assets/css/vendor-fontawesome-free.css') }}"
          rel="stylesheet">
    @stack('head')
</head>
