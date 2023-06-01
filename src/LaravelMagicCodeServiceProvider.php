<?php

namespace AbdulMajidCSE\LaravelMagicCode;

use AbdulMajidCSE\LaravelMagicCode\Helpers\MagicCode;
use Illuminate\Support\ServiceProvider;

class LaravelMagicCodeServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->bind('abdulmajidcse_magic_code', function () {
            return new MagicCode();
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(): void
    {
        //
    }
}
