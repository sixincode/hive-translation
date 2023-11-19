<?php

namespace Sixincode\HiveTranslation;

use Sixincode\ModulesInit\Package;
use Sixincode\ModulesInit\PackageServiceProvider;
use Sixincode\HiveTranslation\Commands\HiveTranslationCommand;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;
use Sixincode\HiveTranslation\Http\Middlewares as HelperMiddlewares;

class HiveTranslationServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/sixincode/hive-template
         */
        $package
            ->name('hive-translation')
            ->hasConfigFile(['hive-translation','hive-translation-middlewares'])
            ->hasViews()
            ->hasAssets()
            ->hasTranslations()
            // ->hasIcons()
            ->hasBladeComponents()
            // ->hasLayouts()
            ->hasRoutes(['web','api'])
            ->hasMigration('create_hive-translation_table')
            ->hasMiddlewares([
                  HelperMiddlewares\FindLocale::class,
                  HelperMiddlewares\SwitchLocale::class,
              ], 'web')
            // ->runsMigrations()
            ->hasCommand(HiveTranslationCommand::class);
    }

    public function bootingPackage()
    {
        $this->loadTranslationsFrom($this->package->basePath("/../resources/lang"), "#");

        $this->publishes([
          $this->package->basePath("/../resources/lang") => $this->app->langPath("vendor/{$this->package->shortName()}"),
        ]);
     }
}
