@props(['position' => null, 'span' => null])
<div {{ $attributes->merge(['class' => 'col' . (isset($position) ? ' col--' . $position : '') . (isset($span) ? ' col--span-' . $span : '')]) }}>
    {{ $slot }}
</div>

