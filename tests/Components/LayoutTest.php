<?php

use Bnussbau\TrmnlBlade\View\Components\Layout;
use Illuminate\View\ComponentAttributeBag;

it('renders layout component with default class', function () {
    $layout = new Layout;
    $rendered = $layout->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="layout">');
    expect($html)->toContain('Test content');
});

it('renders layout component with additional classes', function () {
    $layout = new Layout;
    $rendered = $layout->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['class' => 'layout--row layout--top'])
    ])->render();

    expect($html)->toContain('<div class="layout layout--row layout--top">');
    expect($html)->toContain('Test content');
});

it('renders layout component with direction prop', function () {
    $layout = new Layout;
    $rendered = $layout->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'direction' => 'col',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="layout layout--col">');
    expect($html)->toContain('Test content');
});

it('renders layout component with alignment prop', function () {
    $layout = new Layout;
    $rendered = $layout->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'alignment' => 'left',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="layout layout--left">');
    expect($html)->toContain('Test content');
});

it('renders layout component with default stretch prop', function () {
    $layout = new Layout;
    $rendered = $layout->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'stretch' => 'default',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="layout layout--stretch">');
    expect($html)->toContain('Test content');
});

it('renders layout component with x stretch prop', function () {
    $layout = new Layout;
    $rendered = $layout->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'stretch' => 'x',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="layout layout--stretch-x">');
    expect($html)->toContain('Test content');
});

