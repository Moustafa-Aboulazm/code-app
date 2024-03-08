<!DOCTYPE html>
<html lang="{{ App::getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>
        {{ isset($title) ? $title.' | ' : '' }}
        {{ config('app.name') }}
    </title>

    <meta name="description" content="{{ $description ?? config('app.description') }}">
    <link rel="canonical" href="{{ $canonical ?? Request::url() }}"/>

    @include('layouts._css')

    @stack('meta')

    <script>
        window.Laravel = {!! json_encode(['csrfToken' => csrf_token()]) !!};
    </script>

    @include('layouts._favicons')
    @include('layouts._social')

    @livewireStyles
</head>

<body>

@include('layouts._nav')
@include('layouts._header')

@yield('body')

@include('layouts._footer')

@stack('scripts')
@stack('modals')

@include('layouts._js')

@livewireScripts

@include('layouts._model')
</body>
</html>
