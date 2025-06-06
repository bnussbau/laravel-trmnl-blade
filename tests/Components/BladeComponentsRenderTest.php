<?php

use Bnussbau\TrmnlBlade\View\Components\Background;
use Bnussbau\TrmnlBlade\View\Components\Clamp;
use Bnussbau\TrmnlBlade\View\Components\Col;
use Bnussbau\TrmnlBlade\View\Components\Column;
use Bnussbau\TrmnlBlade\View\Components\Columns;
use Bnussbau\TrmnlBlade\View\Components\Content;
use Bnussbau\TrmnlBlade\View\Components\Description;
use Bnussbau\TrmnlBlade\View\Components\Flex;
use Bnussbau\TrmnlBlade\View\Components\Grid;
use Bnussbau\TrmnlBlade\View\Components\Item;
use Bnussbau\TrmnlBlade\View\Components\Label;
use Bnussbau\TrmnlBlade\View\Components\Layout;
use Bnussbau\TrmnlBlade\View\Components\Markdown;
use Bnussbau\TrmnlBlade\View\Components\Mashup;
use Bnussbau\TrmnlBlade\View\Components\Meta;
use Bnussbau\TrmnlBlade\View\Components\RichText;
use Bnussbau\TrmnlBlade\View\Components\Screen;
use Bnussbau\TrmnlBlade\View\Components\Table;
use Bnussbau\TrmnlBlade\View\Components\Text;
use Bnussbau\TrmnlBlade\View\Components\Title;
use Bnussbau\TrmnlBlade\View\Components\TitleBar;
use Bnussbau\TrmnlBlade\View\Components\Value;
use Bnussbau\TrmnlBlade\View\Components\View;

it('can render the view component', function () {
    $view = new View;
    $rendered = $view->render();

    expect($rendered->getName())->toBe('trmnl::components.view');
});

it('can render the layout component', function () {
    $layout = new Layout;
    $rendered = $layout->render();

    expect($rendered->getName())->toBe('trmnl::components.layout');
});

it('can render the title bar component', function () {
    $titleBar = new TitleBar;
    $rendered = $titleBar->render();

    expect($rendered->getName())->toBe('trmnl::components.title-bar');
});

it('can render the grid component', function () {
    $component = new Grid;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.grid');
});

it('can render the text component', function () {
    $component = new Text;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.text');
});

it('can render the column component', function () {
    $component = new Column;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.column');
});

it('can render the item component', function () {
    $component = new Item;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.item');
});

it('can render the table component', function () {
    $component = new Table;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.table');
});

it('can render the description component', function () {
    $component = new Description;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.description');
});

it('can render the col component', function () {
    $component = new Col;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.col');
});

it('can render the value component', function () {
    $component = new Value;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.value');
});

it('can render the columns component', function () {
    $component = new Columns;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.columns');
});

it('can render the clamp component', function () {
    $component = new Clamp;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.clamp');
});

it('can render the content component', function () {
    $component = new Content;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.content');
});

it('can render the meta component', function () {
    $component = new Meta;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.meta');
});

it('can render the label component', function () {
    $component = new Label;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.label');
});

it('can render the flex component', function () {
    $component = new Flex;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.flex');
});

it('can render the title component', function () {
    $component = new Title;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.title');
});

it('can render the markdown component', function () {
    $component = new Markdown;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.markdown');
});

it('can render the background component', function () {
    $component = new Background;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.background');
});

it('can render the mashup component', function () {
    $component = new Mashup;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.mashup');
});

it('can render the screen component', function () {
    $component = new Screen;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.screen');
});

it('can render the richtext component', function () {
    $component = new RichText;
    $rendered = $component->render();
    expect($rendered->getName())->toBe('trmnl::components.richtext');
});
