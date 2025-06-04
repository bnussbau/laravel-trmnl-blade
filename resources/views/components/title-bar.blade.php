@props(['title', 'image' => 'https://usetrmnl.com/images/plugins/trmnl--render.svg', 'instance' => ''] )
<div class="title_bar">
    <img class="image" src="{{ $image }}" alt="Logo"/>
    <span class="title">{{ $title ?? config('app.name') ?? 'TRMNL' }}</span>
    <span class="instance">{{ $instance }}</span>
</div>
