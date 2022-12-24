<?php

namespace BardSoftware\LaravelAttributes;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use BardSoftware\LaravelAttributes\Commands\LaravelAttributesCommand;

class LaravelAttributesServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-attributes')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_attributes_table')
            ->hasCommand(LaravelAttributesCommand::class);
    }

    public function boot()
    {
      $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}
