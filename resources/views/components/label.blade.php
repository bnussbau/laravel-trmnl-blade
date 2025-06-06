@props(['variant' => null, 'size' => null])
<span {{ $attributes->merge(['class' => 'label' . (isset($size) ? ' label--' . $size : '') . (isset($variant) ? ' label--' . $variant : '')]) }}>
    {{ $slot }}
</span>
