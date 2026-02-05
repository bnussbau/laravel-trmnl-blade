# TRMNL Blade - Blade Components for the TRMNL Design System

[![Latest Version on Packagist](https://img.shields.io/packagist/v/bnussbau/laravel-trmnl-blade.svg?style=flat-square)](https://packagist.org/packages/bnussbau/laravel-trmnl-blade)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/bnussbau/laravel-trmnl-blade/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/bnussbau/laravel-trmnl-blade/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/bnussbau/laravel-trmnl-blade/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/bnussbau/trmnl-blade/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/bnussbau/laravel-trmnl-blade.svg?style=flat-square)](https://packagist.org/packages/bnussbau/laravel-trmnl-blade)

🎨 Blade Components on top of the TRMNL Design System ([docs](https://trmnl.com/framework))

## Support us

## Blade Components
- [see TRMNL Design System](https://trmnl.com/framework)
- [resources/views/components](resources/views/components)

Blade Compontens can help you generate markup code. Alternatively, you can just use the native CSS classes from the TRMNL Design System.

### Usage

### Basic Layout

```blade
<x-trmnl::screen>
    <x-trmnl::view>
        <x-trmnl::layout>
            <!-- Your content here -->
        </x-trmnl::layout>
        <x-trmnl::title-bar/>
    </x-trmnl::view>
</x-trmnl::screen>
```

### Quote Example

```blade
<x-trmnl::screen>
    <x-trmnl::view>
        <x-trmnl::layout>
            <x-trmnl::richtext gapSize="large" align="center">
                <x-trmnl::title>Motivational Quote</x-trmnl::title>
                <x-trmnl::content>“I love inside jokes. I hope to be a part of one someday.”</x-trmnl::content>
                <x-trmnl::label variant="underline">Michael Scott</x-trmnl::label>
            </x-trmnl::richtext>
        </x-trmnl::layout>
        <x-trmnl::title-bar/>
    </x-trmnl::view>
</x-trmnl::screen>
```

## Installation

You can install the package via composer:

```bash
composer require bnussbau/laravel-trmnl-blade
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="trmnl-blade-config"
```

This is the contents of the published config file:

```php
return [
    'framework_version' => env('TRMNL_BLADE_FRAMEWORK_VERSION', '2.1.0'),
    'framework_css_version' => env('TRMNL_BLADE_FRAMEWORK_CSS_VERSION', '2.2.1'),
    'framework_js_version' => env('TRMNL_BLADE_FRAMEWORK_JS_VERSION', '2.1.0'),
    'framework_css_url' => env('TRMNL_BLADE_FRAMEWORK_CSS_URL', null),
    'framework_js_url' => env('TRMNL_BLADE_FRAMEWORK_JS_URL', null),
];
```

**Optionally**, you can publish the views using

```bash
php artisan vendor:publish --tag="trmnl-views"
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Benjamin Nussbaum](https://github.com/bnussbau)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
