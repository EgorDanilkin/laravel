<?php

namespace App\Providers;

use App\Models\User;
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
            ],
            [
                'title' => __('menu.profile'),
                'alias' => 'home'
            ],
        ];



        \View::share('menu', $menu);
    }
}
