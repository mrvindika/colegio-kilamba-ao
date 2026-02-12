{{-- METADATA --}}
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="description" content="{{ config('app.name', 'Colégio Kilamba do Cubal') }}">
<meta name="keywords" content="Sistema, Web, Gestão, Escolar, Integrada, Cubal, SGEI">
<meta name="author" content="UKB">
<meta name="csrf_token" content="{{ csrf_token() }}">

{{-- TITLE --}}
<title>@yield("title")</title>

{{-- ICON --}}
<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" type="image/png">

{{-- BOOTSTRAP AND LAYOUT --}}
@vite(['resources/css/app.css', 'resources/js/app.js'])
<link rel="stylesheet" type="text/css" href="{{ asset('libraries/iconfonts/font-awesome/css/all.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('libraries/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('libraries/css/vendor.bundle.addons.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('libraries/css/style.css') }}">

{{-- ADDITIONAL CSS --}}
@stack('head-stack')