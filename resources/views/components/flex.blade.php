@props(['direction' => 'row', 'alignment' => 'left', 'stretch' => null])

@php
    $classes = ['flex'];

    if ($direction) {
        $classes[] = "flex--{$direction}";
    }

    if ($alignment) {
        $classes[] = "flex--{$alignment}";
    }

    if ($stretch) {
        if ($stretch === 'default') {
            $classes[] = 'flex--stretch';
        } else {
            $classes[] = "flex--stretch-{$stretch}";
        }
    }
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
    {{ $slot }}
</div>
