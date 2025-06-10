@props(['direction' => null, 'alignment' => null, 'stretch' => null])

@php
    $classes = ['layout'];

    if ($direction) {
        $classes[] = "layout--{$direction}";
    }

    if ($alignment) {
        $classes[] = "layout--{$alignment}";
    }

    if ($stretch) {
        if ($stretch === 'default') {
            $classes[] = 'layout--stretch';
        } else {
            $classes[] = "layout--stretch-{$stretch}";
        }
    }
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
    {{ $slot }}
</div>

