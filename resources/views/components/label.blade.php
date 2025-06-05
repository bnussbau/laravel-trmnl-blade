@props(['variant' => null, 'size' => null, 'pixelPerfect' => false])
<span {{ $attributes->merge(['class' => 'label' . (isset($size) ? ' label--' . $size : '') . (isset($variant) ? ' label--' . $variant : '')]) }} {{ $pixelPerfect ? 'data-pixel-perfect="true"' : '' }}>
    {{ $slot }}
</span>
