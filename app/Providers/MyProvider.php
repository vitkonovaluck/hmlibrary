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
        $this->navMenu();
        $this->topNews();
    }

    public function topMenu(){
        View::composer('menu.navig',function ($view){
            $view->with('navig',\App\Models\Menu::where('parent_id','2')->where('published','1')->orderBy('sort')->get());
        });
    }

    public function navMenu(){
        View::composer('menu.navbar',function ($view){
            $view->with('navbar',\App\Models\Menu::where('parent_id','1')->where('published','1')->orderBy('sort')->get());
        });
    }

    public function topNews(){
        View::composer('rigth_bar.news',function ($view){
            $view->with('news',\App\Models\Newse::orderBy('posted_at','desc')->limit(5)->get());
        });
    }
}
