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

@yield('content')

<div>
    {{-- Footer --}}
    @include('auth.layouts.parts.footer2')
</div>

</body>

</html>
