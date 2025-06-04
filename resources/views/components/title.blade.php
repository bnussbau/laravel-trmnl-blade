@props(['size'])
<span class="title @if(isset($size) && $size === "small") title--small @endif">
    {{ $slot }}
</span>
