<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="Jorge Baruja">
    <meta name="description" content="Sistema Web destinado al turismo interno de Paraguay">
    <meta name="keywords" content="web,turismo,Paraguay" />
    @vite(['resources/css/app.scss', 'resources/js/app.js'])
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <title>{{ $title ?? 'Page Title' }}</title>
</head>

<body>
    <h1>guest</h1>
    {{ $slot }}
</body>

</html>

{{-- Librerias necesarias --}}
@include('sweetalert::alert')
@vite('resources/js/app.js')
@stack('scripts')
