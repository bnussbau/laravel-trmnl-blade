@props(['position' => null])
<div {{ $attributes->merge(['class' => 'col' . (isset($position) ? ' col--' . $position : '')]) }}>
    {{ $slot }}
</div>

