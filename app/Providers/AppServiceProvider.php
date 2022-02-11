<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repository\PostRepository;
use App\Repository\PostEloquent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       $this->app->bind(PostRepository::class ,PostEloquent::class);
    }
}
