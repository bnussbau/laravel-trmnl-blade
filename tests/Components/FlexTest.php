<?php

use Bnussbau\TrmnlBlade\View\Components\Flex;
use Illuminate\View\ComponentAttributeBag;

it('renders flex component with default class', function () {
    $flex = new Flex;
    $rendered = $flex->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag([])
    ])->render();

    expect($html)->toContain('<div class="flex flex--row flex--left">');
    expect($html)->toContain('Test content');
});

it('renders flex component with column direction', function () {
    $flex = new Flex;
    $rendered = $flex->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['direction' => 'col'])
    ])->render();

    expect($html)->toContain('<div class="flex flex--col flex--left">');
    expect($html)->toContain('Test content');
});

it('renders flex component with center-x alignment', function () {
    $flex = new Flex;
    $rendered = $flex->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['alignment' => 'center-x'])
    ])->render();

    expect($html)->toContain('<div class="flex flex--row flex--center-x">');
    expect($html)->toContain('Test content');
});

it('renders flex component with right alignment', function () {
    $flex = new Flex;
    $rendered = $flex->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['alignment' => 'right'])
    ])->render();

    expect($html)->toContain('<div class="flex flex--row flex--right">');
    expect($html)->toContain('Test content');
});

it('renders flex component with stretch', function () {
    $flex = new Flex;
    $rendered = $flex->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['stretch' => 'default'])
    ])->render();

    expect($html)->toContain('<div class="flex flex--row flex--left flex--stretch">');
    expect($html)->toContain('Test content');
});

it('renders flex component with stretch-x', function () {
    $flex = new Flex;
    $rendered = $flex->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['stretch' => 'x'])
    ])->render();

    expect($html)->toContain('<div class="flex flex--row flex--left flex--stretch-x">');
    expect($html)->toContain('Test content');
});

it('renders flex component with stretch-y', function () {
    $flex = new Flex;
    $rendered = $flex->render();
    $html = $rendered->with([
        'slot' => 'Test content',
        'attributes' => new ComponentAttributeBag(['stretch' => 'y'])
    ])->render();

    expect($html)->toContain('<div class="flex flex--row flex--left flex--stretch-y">');
    expect($html)->toContain('Test content');
});
