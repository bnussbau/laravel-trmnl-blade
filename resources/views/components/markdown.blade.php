{{-- DEPRECATED: The `markdown` component was removed in TRMNL Framework 2.0.0. Use the `richtext` component instead. --}}
@props(['gapSize'])
<div class="markdown @if(isset($gapSize)) gap--{{$gapSize}} @endif">
    {{ $slot }}
</div>
