<?php

namespace Bnussbau\TrmnlBlade;

use Bnussbau\TrmnlBlade\Commands\TrmnlBladeCommand;
use Illuminate\Support\Facades\Route;
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

        if (config('trmnl-blade.offline', false)) {
            Route::get('vendor/trmnl-blade/{path}', function ($path) {
                $filePath = __DIR__.'/../resources/'.$path;
                if (file_exists($filePath)) {
                    $extension = pathinfo($filePath, PATHINFO_EXTENSION);
                    $mimeTypes = [
                        'css' => 'text/css',
                        'js' => 'application/javascript',
                        'woff' => 'font/woff',
                        'woff2' => 'font/woff2',
                        'png' => 'image/png',
                    ];

                    $mimeType = $mimeTypes[$extension] ?? 'application/octet-stream';

                    return response()->file($filePath, ['Content-Type' => $mimeType]);
                }
                abort(404);
            })->where('path', '.*');
        }
    }
}
