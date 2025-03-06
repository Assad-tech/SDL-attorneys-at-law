<?php

namespace App\Providers;

use App\Models\SiteContent;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        View::composer(['User.layout.header', 'User.layout.footer'], function ($view) {
            $view->with('siteContent', SiteContent::first());
            
        });
    }
}
