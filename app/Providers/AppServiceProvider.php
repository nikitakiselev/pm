<?php

namespace App\Providers;

use App\Category;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('category.sidebar', function ($view) {
            $categories = Category::all();

            // $categories = Category::withCount('products')->get();

//            $categories = Category::withCount('products')
//                ->orderBy('products_count', 'desc')
//                ->get();

//            $categories = Category::withCount('products')
//                ->has('products')
//                ->get();

            $view->with('categories', $categories);
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
