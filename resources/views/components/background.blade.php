@props(['color' => 'black'])

<div class="bg-{{$color}}">
    {{ $slot }}
</div>
