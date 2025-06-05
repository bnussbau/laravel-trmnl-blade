@props(['pixelPerfect' => false])

<div class="content" {{ $pixelPerfect ?? 'data-pixel-perfect="true"' }}>
    {{ $slot }}
</div>
