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
//            $categories = Category::all();

            // $categories = Category::withCount('products')->get();

//            $categories = Category::withCount('products')
//                ->orderBy('products_count', 'desc')
//                ->get();

            $categories = Category::withCount('products')
                ->has('products')
                ->get();

            $view->with('categories', $categories);
        });

        view()->composer('category.low-price', function ($view) {
/*            $maxPrice = 500;

            $maxPriceCondition = function ($query) use ($maxPrice) {
                $query->where('amount', '<=', $maxPrice);
            };*/

            $categories = Category::whereHas('products', function ($query) {
                $maxPrice = 500;

                $query->where('amount', '<=', $maxPrice);
            })
                ->withCount(['products' => function ($query) {
                        $maxPrice = 500;

                        $query->where('amount', '<=', $maxPrice);
                    }])
                ->orderBy('products_count', 'desc')
                ->get();

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
