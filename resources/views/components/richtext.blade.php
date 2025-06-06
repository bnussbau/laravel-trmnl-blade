@props(['align' => 'left', 'gapSize' => 'large'])

<div class="richtext richtext--{{ $align }} gap--{{ $gapSize }}">
    {{ $slot }}
</div>
