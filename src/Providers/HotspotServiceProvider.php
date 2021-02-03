<?php

namespace devcake\hotspotpackage\Providers;

use Illuminate\Support\ServiceProvider;
use Nuwave\Lighthouse\Events\BuildSchemaString;

class HotspotServiceProvider extends ServiceProvider
{
    public function register()
    {
        /**
         * Listen for the BuildSchema event provided by Lighthouse fired before
         * building the AST from the user-defined schema string. This automatically
         * adds our graphql to the schema where our package is used
         *
         * IMPORTANT: Event is only fired once if schema caching is active
         */
        app('events')->listen(
            BuildSchemaString::class,
            function (): string {
                return file_get_contents(__DIR__ . "/../../graphql/Schema.graphql");
            }
        );

        //$this->registerModels();
    }

    /**
     * Publishes the models to the default laravel 8 model directory. Enabling Lighthouse
     * to properly handle queries
     */
    protected function registerModels()
    {
        $this->publishes([
            __DIR__ . '/../Models/Hotspot.php' => app_path('Models/Hotspot.php')
        ]);

        $this->publishes([
            __DIR__ . '/../Models/Video.php' => app_path('Models/Video.php')
        ]);
    }

    public function boot()
    {
        /**
         * This line automatically migrates the tables defined within our package when
         * php artisan migrate is called.
         */
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
    }
}