@props(['direction' => 'row', 'alignment' => 'start'])
<div class="flex flex-{{ $direction }} flex-{{ $alignment }}">
    {{ $slot }}
</div>
