<?php

use Bnussbau\TrmnlBlade\View\Components\RichText;
use Illuminate\View\ComponentAttributeBag;

it('renders richtext component with default class', function () {
    $richtext = new RichText;
    $rendered = $richtext->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([]),
    ])->render();

    expect($html)->toContain('<div class="richtext richtext--left gap--large">');
    expect($html)->toContain('Test content');
});

it('renders richtext component with custom align prop', function () {
    $richtext = new RichText;
    $rendered = $richtext->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['align' => 'center']),
    ])->render();

    expect($html)->toContain('<div class="richtext richtext--center gap--large">');
    expect($html)->toContain('Test content');
});

it('renders richtext component with custom gapSize prop', function () {
    $richtext = new RichText;
    $rendered = $richtext->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['gapSize' => 'small']),
    ])->render();

    expect($html)->toContain('<div class="richtext richtext--left gap--small">');
    expect($html)->toContain('Test content');
});

it('renders richtext component with both custom align and gapSize props', function () {
    $richtext = new RichText;
    $rendered = $richtext->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([
            'align' => 'right',
            'gapSize' => 'medium',
        ]),
    ])->render();

    expect($html)->toContain('<div class="richtext richtext--right gap--medium">');
    expect($html)->toContain('Test content');
});
