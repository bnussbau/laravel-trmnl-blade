@props(['alignment' => 'left', 'shading' => null])
<p class="text--{{ $alignment }}{{ $shading ? ' text--' . $shading : ''}}">
    {{ $slot }}
</p>
