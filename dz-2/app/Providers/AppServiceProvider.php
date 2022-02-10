<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $menu = [
            [
                'title' => 'Главная',
                'alias' => 'welcome'
            ],
            [
                'title' => 'Категории',
                'alias' => 'news::categories'
            ]
        ];

        \View::share('menu', $menu);
    }
}
