<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

use Illuminate\Support\Facades\View;

class MyProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->topMenu();
    }

    public function topMenu(){
        View::composer('menu.navig',function ($view){
            $view->with('navig',\App\Models\Menu::where('menu_main','2')->where('published','1')->orderBy('menu_sort')->get());
        });
    }
}
