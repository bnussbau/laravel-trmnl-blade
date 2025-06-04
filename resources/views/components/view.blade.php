
@props(['size'=>'full'])
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Inter:300,400,500" rel="stylesheet" />
    <link rel="stylesheet" href="https://usetrmnl.com/css/{{ config('trmnl-blade.framework_version', 'latest') }}/plugins.css">
    <script src="https://usetrmnl.com/js/{{ config('trmnl-blade.framework_version', 'latest') }}/plugins.js"></script>
    <title>{{ $title ?? config('app.name') }}</title>
</head>
<body class="environment trmnl">
<div class="screen">
    <div class="view view--{{$size}}">
        {{ $slot }}
    </div>
</div>
</body>
</html>
