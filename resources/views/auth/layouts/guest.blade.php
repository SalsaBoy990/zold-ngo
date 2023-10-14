<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <x-global::favicon></x-global::favicon>

    <!-- Scripts -->
    @vite(['resources/scss/admin/admin.scss'])
</head>

<body>

<section class="vh-lg-100 mt-5 mt-lg-0 bg-soft d-flex align-items-center overflow-hidden">
    <div class="container">
        <div class="row justify-content-center form-bg-image">
            @yield('content')
        </div>
    </div>
</section>

</body>

</html>
