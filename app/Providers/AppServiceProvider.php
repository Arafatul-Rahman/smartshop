<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
use App\Category;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('fonEnd.includes.menu',function($view){
           $publishedCategories= Category::where('statusinfo',1)->get();
           $view->with('publishedCategories',$publishedCategories);

        });
         View::composer('fonEnd.includes.heder',function($view){
           $publishedCategories= Category::where('statusinfo',1)->get();
           $view->with('publishedCategories',$publishedCategories);

        });     
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}