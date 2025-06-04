<?php

namespace Bnussbau\TrmnlBlade;

use Bnussbau\TrmnlBlade\Commands\TrmnlBladeCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

class TrmnlBladeServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('trmnl-blade')
            ->hasConfigFile()
            ->hasViews('trmnl')
            ->hasCommand(TrmnlBladeCommand::class);
    }

    public function packageBooted(): void
    {
        // Register the components with the 'trmnl' prefix
        // Blade::componentNamespace('Bnussbau\\TrmnlBlade\\View\\Components', 'trmnl');
    }
}
