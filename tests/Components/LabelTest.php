<?php

use Bnussbau\TrmnlBlade\View\Components\Label;
use Illuminate\View\ComponentAttributeBag;

it('renders label component with default class', function () {
    $label = new Label;
    $rendered = $label->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<span class="label">');
    expect($html)->toContain('Test content');
});

it('renders label component with variant outline', function () {
    $label = new Label;
    $rendered = $label->render();
    $html = $rendered->with([
        'slot' => 'Outline content',
        'attributes' => new ComponentAttributeBag(['variant' => 'outline'])
    ])->render();

    expect($html)->toContain('<span class="label label--outline">');
    expect($html)->toContain('Outline content');
});

it('renders label component with size small', function () {
    $label = new Label;
    $rendered = $label->render();
    $html = $rendered->with([
        'slot' => 'Small content',
        'attributes' => new ComponentAttributeBag(['size' => 'small'])
    ])->render();

    expect($html)->toContain('<span class="label label--small">');
    expect($html)->toContain('Small content');
});

it('renders label component with size small and attribute data-pixel-perfect', function () {
    $label = new Label;
    $rendered = $label->render();
    $html = $rendered->with([
        'slot' => 'Small content',
        'attributes' => new ComponentAttributeBag(['size' => 'small', 'data-pixel-perfect' => 'true'])
    ])->render();

    expect($html)->toContain('<span class="label label--small" data-pixel-perfect="true">');
    expect($html)->toContain('Small content');
});

