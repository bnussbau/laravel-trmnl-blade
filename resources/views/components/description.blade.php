@props(['pixelPerfect' => false])

<span class="description" {{ $pixelPerfect ?? 'data-pixel-perfect="true"' }}>{{ $slot }}</span>
