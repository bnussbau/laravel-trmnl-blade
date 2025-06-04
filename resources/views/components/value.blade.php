@props(['size'])
{{--<span class="value @if(isset($size)) value--{{$size}} @endif ">--}}
{{--    {{ $slot }}--}}
{{--</span>--}}
<span {{ $attributes->merge(['class' => 'value' . (isset($size) ? ' value--' . $size : '')]) }}>
    {{ $slot }}
</span>
