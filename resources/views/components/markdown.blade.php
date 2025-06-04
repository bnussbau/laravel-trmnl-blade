@props(['gapSize'])
<div class="markdown @if(isset($gapSize)) gap--{{$gapSize}} @endif">
    {{ $slot }}
</div>
