@props(['size'])
<table class="table @if(isset($size)) table--{{$size}} @endif">
{{ $slot }}
</table>
