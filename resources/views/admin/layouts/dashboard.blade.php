<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <x-global::favicon></x-global::favicon>

    <!-- Fontawesome -->
    <link type="text/css" href="/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Datepicker -->
    <link rel="stylesheet" href="/vendor/vanillajs-datepicker/dist/css/datepicker.min.css">
    <link rel="stylesheet" href="/vendor/vanillajs-datepicker/dist/css/datepicker-bs5.min.css">

    <!-- Sweet Alert -> alert library -->
    <link type="text/css" href="/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet">

    <!-- Notyf -> notification library -->
    <link type="text/css" href="/vendor/notyf/notyf.min.css" rel="stylesheet">

    <!-- Vendor JS -->
    <script src="/vendor/onscreen/on-screen.umd.min.js"></script>

    <!-- Smooth scroll -->
    <script src="/vendor/smooth-scroll/smooth-scroll.polyfills.min.js"></script>

    <!-- Simplebar -> changes scrollbar of the left sidebar -->
    <script src="/vendor/simplebar/simplebar.min.js"></script>

    <!-- Sweet Alerts 2 -->
    <script src="/vendor/sweetalert2/sweetalert2.all.min.js"></script>

    <!-- Notyf -->
    <script src="/vendor/notyf/notyf.min.js"></script>

    <!-- Datepicker -->
    <script src="/vendor/vanillajs-datepicker/dist/js/datepicker.min.js"></script>

    <!-- Moment JS -->
    <script src="/vendor/moment/min/moment.min.js"></script>

    <!-- Slider -->
    <script src="/vendor/nouislider/nouislider.min.js"></script>

    <!-- Charts -->
    <script src="/assets/js/chartist.min.js"></script>
    <script src="/assets/js/chartist-plugin-tooltip.min.js"></script>

    <!-- Apex Charts -->
    <script src="/vendor/apexcharts/apexcharts.min.js"></script>
    <!-- Apex Charts -->
    <link type="text/css" href="/vendor/apexcharts/apexcharts.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
            integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <!-- Volt CSS, Volt JS Scripts -->
    @vite(['resources/scss/admin/admin.scss', 'resources/js/admin/admin.js'])

    @livewireStyles

    @livewireScripts

</head>

<body>

{{-- Nav --}}
@include('admin.layouts.parts.nav')
{{-- SideNav --}}
@include('admin.layouts.parts.sidenav')

<main class="content">
    {{-- TopBar --}}
    @include('admin.layouts.parts.topbar')

    @yield('content')

    {{-- Footer --}}
    @include('admin.layouts.parts.footer')
</main>

@stack('scripts')
</body>
</html>

