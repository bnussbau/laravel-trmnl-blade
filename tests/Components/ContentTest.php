<?php

use Bnussbau\TrmnlBlade\View\Components\Content;
use Illuminate\View\ComponentAttributeBag;

it('renders content component with default class', function () {
    $content = new Content;
    $rendered = $content->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<div class="content">');
    expect($html)->toContain('Test content');
});

it('merges additional attributes with component classes', function () {
    $content = new Content;
    $rendered = $content->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([
            'data-test' => 'value',
            'class' => 'custom-class',
        ]),
    ])->render();

    expect($html)->toContain('class="content custom-class"');
    expect($html)->toContain('data-test="value"');
});

it('merges data-pixel-perfect attribute', function () {
    $content = new Content;
    $rendered = $content->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([
            'data-pixel-perfect' => 'true',
        ]),
    ])->render();

    expect($html)->toContain('data-pixel-perfect="true"');
});

it('renders content component with different gap sizes', function ($gapSize, $expectedClass) {
    $content = new Content;
    $rendered = $content->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['gapSize' => $gapSize]),
    ])->render();

    expect($html)->toContain("class=\"content {$expectedClass}\"");
})->with([
    ['default', 'gap'],
    ['xsmall', 'gap--xsmall'],
    ['small', 'gap--small'],
    ['medium', 'gap--medium'],
    ['large', 'gap--large'],
    ['xlarge', 'gap--xlarge'],
    ['xxlarge', 'gap--xxlarge'],
]);

it('renders content component with content alignment', function () {
    $content = new Content;
    $rendered = $content->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['contentAlignment' => 'center']),
    ])->render();

    expect($html)->toContain('class="content content--center"');
});

it('renders content component with text alignment', function () {
    $content = new Content;
    $rendered = $content->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['textAlignment' => 'right']),
    ])->render();

    expect($html)->toContain('class="content text--right"');
});

it('renders content component with multiple classes', function () {
    $content = new Content;
    $rendered = $content->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([
            'gapSize' => 'medium',
            'contentAlignment' => 'center',
            'textAlignment' => 'right',
        ]),
    ])->render();

    expect($html)->toContain('class="content gap--medium content--center text--right"');
});

it('renders content with content limiter', function () {
    $content = new Content;
    $rendered = $content->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['data-content-limiter' => 'true']),
    ])->render();

    expect($html)->toContain('<div class="content" data-content-limiter="true">');
});
