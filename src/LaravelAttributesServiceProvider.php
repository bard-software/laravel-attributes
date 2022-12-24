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

    public function boot(){
        if($this->app->runningInConsole()){
            $this->publishes(
                [
                    __DIR__.'/../database/migrations/create_attribute_entities_table.php' => database_path('migrations/'.date('Y_m_d_his',time()).'_create_attribute_entities_table.php'),
                    __DIR__.'/../database/migrations/create_attribute_values_table.php' => database_path('migrations/'.date('Y_m_d_his',time()).'_create_attribute_values_table.php'),
                    __DIR__.'/../database/migrations/create_attributes_table.php' => database_path('migrations/'.date('Y_m_d_his',time()).'_create_attributes_table.php'),
                    __DIR__.'/../database/migrations/create_value_entities_table.php' => database_path('migrations/'.date('Y_m_d_his',time()).'_create_value_entities_table.php'),



                ]
            );
        }
    }
}
