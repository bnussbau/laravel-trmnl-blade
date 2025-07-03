@props(['noBleed' => false])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    @if(config('trmnl-blade.offline', false))
        @php
            $version = config('trmnl-blade.framework_version', '1.1.0');
        @endphp
        <link href="{{ asset('vendor/trmnl-blade/fonts/inter.css') }}" rel="stylesheet"/>
        <link rel="stylesheet" href="{{ asset("vendor/trmnl-blade/css/{$version}/plugins.css") }}">
        <script src="{{ asset("vendor/trmnl-blade/js/{$version}/plugins.js") }}"></script>
    @else
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=Inter:300,400,500" rel="stylesheet"/>
        <link rel="stylesheet"
              href="https://usetrmnl.com/css/{{ config('trmnl-blade.framework_version', '1.1.0') }}/plugins.css">
        <script src="https://usetrmnl.com/js/{{ config('trmnl-blade.framework_version', '1.1.0') }}/plugins.js"></script>
    @endif
    <title>{{ $title ?? config('app.name') }}</title>
</head>
<body class="environment trmnl">
<div class="screen {{$noBleed ? 'screen--no-bleed' : ''}}">
    {{ $slot }}
</div>
</body>
</html>
