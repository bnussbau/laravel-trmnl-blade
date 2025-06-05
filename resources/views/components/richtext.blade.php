@props(['align' => 'left', 'gapSize' => 'large'])

<div class="richtext richtext--align-{{ $align }} richtext--gap-{{ $gapSize }}">
    {{ $slot }}
</div>
