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
                'title' => __('menu.home'),
                'alias' => 'welcome'
            ],
            [
                'title' => __('menu.categories'),
                'alias' => 'news::categories'
            ],
            [
                'title' => __('menu.admin'),
                [
                    'title' => 'Новости',
                    'alias' => 'admin::news'
                ],
                [
                    'title' => 'Пользователи',
                    'alias' => 'admin::profile'
                ],

            ]
        ];

        \View::share('menu', $menu);
    }
}
