<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="../../assets/img/favicon/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="../../assets/img/favicon/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="../../assets/img/favicon/favicon-16x16.png" sizes="16x16" type="image/png">

    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="../../assets/img/favicon/favicon.ico">
    <meta name="msapplication-config" content="../../assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">

    <!-- Bootstrap icons-->
    <link href="/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet"/>

    <!-- Styles, Scripts -->
    @vite(['resources/scss/public/public.scss', 'resources/js/public/public.js'])

</head>


<body class="d-flex flex-column h-100">

<main class="flex-shrink-0">
    {{-- Header navigation --}}
    @include('public.layouts.parts.header')

    @yield('content')
</main>

{{-- Footer --}}
@include('public.layouts.parts.footer')

</body>

</html>
