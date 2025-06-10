# TRMNL Blade Components

- [see TRMNL Design System](https://usetrmnl.com/framework)

## Screen
<details>
<summary>View Details</summary>

The root component that wraps the entire application.

### Props
- `noBleed` (boolean, default: false) - Removes the default screen padding when set to true

### Example
```blade
<x-trmnl::screen>
    <!-- Your content here -->
</x-trmnl::screen>
```
</details>

## Mashup
<details>
<summary>View Details</summary>

Layout component for creating mixed content layouts.

### Props
- `mashupLayout` (string, default: '1Lx1R') - Layout pattern

### Example
```blade
<x-trmnl::mashup mashupLayout="1Lx1R">
    <!-- Your content here -->
</x-trmnl::mashup>
```
</details>


## View
<details>
<summary>View Details</summary>

Container component for view layouts.

### Props
- `size` (`full` `half_horizontal` `half_vertical` `quadrant`, default: 'full') - Size of the view container

### Example
```blade
<x-trmnl::view size="full">
    <!-- Your content here -->
</x-trmnl::view>
```
</details>

## Layout
<details>
<summary>View Details</summary>

Flexible layout component for organizing content.

### Props
- `direction` (`row` `col`, optional) - Layout direction
- `alignment` (`left` `right` `center-x` `top` `center-y` `bottom` `center`, optional) - Alignment Modifier
- `stretch` (`default` `stretch-x` `stretch-y`, optional) - Stretch behavior ('default' or custom)

### Example
```blade
<x-trmnl::layout direction="col" alignment="center">
    <!-- Your content here -->
</x-trmnl::layout>
```
</details>

## Title Bar
<details>
<summary>View Details</summary>

Header component with title and optional image.

### Props
- `title` (string, required) - The title text
- `image` (string, optional) - Path to the image or `inline` for custom content (e.g. inline SVG)
- `instance` (string, optional) - Instance identifier

### Example
```blade
<x-trmnl::title-bar title="My App" image="https://usetrmnl.com/images/plugins/trmnl--render.svg" instance="Instance Name">
    <!-- Optional inline content when image="inline" -->
</x-trmnl::title-bar>
```
</details>

## Columns
<details>
<summary>View Details</summary>

Grid-based column layout system.

### Components
- `columns` - Main columns container
- `column` - Individual column container

### Example
```blade
<x-trmnl::columns>
    <x-trmnl::column>
        <!-- Column 1 content -->
    </x-trmnl::column>
    <x-trmnl::column>
        <!-- Column 2 content -->
    </x-trmnl::column>
</x-trmnl::columns>
```
</details>

## Elements
<details>
<summary>View Details</summary>

Basic UI elements for building interfaces.

### Components
- `text` - Text element
  - Props:
    - `alignment` (string, default: 'left') - Text alignment
    - `shading` (string, optional) - Text shading style

- `title` - Title element
  - Props:
    - `size` (string, optional) - Title size ('small' or default)

- `value` - Value display
  - Props:
    - `size` (string, optional) - Value size
    - `textStroke` (string, optional) - Text stroke style

- `label` - Label element
  - Props:
    - `variant` (string, optional) - Label variant
    - `size` (string, optional) - Label size

- `description` - Description text
  - Props: None

- `clamp` - Text clamping
  - Props:
    - `lines` (string, default: '1') - Number of lines to clamp

### Example
```blade
<x-trmnl::text alignment="center">
    <x-trmnl::title size="small">Section Title</x-trmnl::title>
    <x-trmnl::value size="large">42</x-trmnl::value>
    <x-trmnl::label variant="primary">Status</x-trmnl::label>
    <x-trmnl::description>Detailed description here</x-trmnl::description>
    <x-trmnl::clamp lines="2">Long text that will be clamped...</x-trmnl::clamp>
</x-trmnl::text>
```
</details>

## Text Stroke
<details>
<summary>View Details</summary>

Text styling component for adding stroke effects.

### Usage
Applied through the `textStroke` prop on text-based components.

### Example
```blade
<x-trmnl::value textStroke="small">Stroked Text</x-trmnl::value>
```
</details>

## Components
<details>
<summary>View Details</summary>

Complex UI components for specific use cases.

### Rich Text
- Props:
  - `align` (string, default: 'left') - Text alignment
  - `gapSize` (string, default: 'large') - Gap size

### Item
- Props: None

### Table
- Props:
  - `size` (string, optional) - Table size (e.g. `condensed`)

### Example
```blade
<x-trmnl::richtext align="center" gapSize="large">
    <!-- Rich text content -->
</x-trmnl::richtext>

<x-trmnl::item>
    <!-- Item content -->
</x-trmnl::item>

<x-trmnl::table size="condensed">
    <!-- Table content -->
</x-trmnl::table>
```
</details>
