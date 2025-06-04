@props(['variant' => null, 'size' => null])
<span {{ $attributes->class(['label', 'label--' . $size => isset($size) , 'label--' . $variant => isset($variant)]) }}>
    {{ $slot }}
</span>
