@props(['size', 'textStroke'])
{{--<span class="value @if(isset($size)) value--{{$size}} @endif ">--}}
{{--    {{ $slot }}--}}
{{--</span>--}}
<span {{ $attributes->merge(['class' => 'value' . (isset($size) ? ' value--' . $size : '') . isset($textStroke) ? 'text-stroke text-stroke--' . $textStroke : '']) }}>
    {{ $slot }}
</span>
