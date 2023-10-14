<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <x-global::favicon></x-global::favicon>


    <!-- Styles, Scripts -->
    @vite(['resources/scss/admin/admin.scss', 'resources/js/admin/admin.js'])

    @livewireStyles

    @livewireScripts

</head>

<body>

@yield('content')

</body>

</html>
