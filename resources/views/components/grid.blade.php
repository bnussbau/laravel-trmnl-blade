@props(['cols' => null])
<div {{ $attributes->merge(['class' => 'grid' . (isset($cols) ? ' grid--cols-' . $cols : '')]) }}>
    {{ $slot }}
</div>
