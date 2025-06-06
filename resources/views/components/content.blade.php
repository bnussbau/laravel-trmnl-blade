@props(['contentAlignment' => null, 'textAlignment' => null, 'gapSize' => null])

@php
    $classes = ['content'];
    
    if ($gapSize) {
        $classes[] = $gapSize === 'default' ? 'gap' : "gap--{$gapSize}";
    }
    
    if ($contentAlignment) {
        $classes[] = "content--{$contentAlignment}";
    }
    
    if ($textAlignment) {
        $classes[] = "text--{$textAlignment}";
    }
@endphp

<div {{ $attributes->merge(['class' => implode(' ', $classes)]) }}>
    {{ $slot }}
</div>
