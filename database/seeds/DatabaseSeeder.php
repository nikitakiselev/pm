<?php

use App\Product;
use App\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        $categories = factory(Category::class, 10)->create();

        $products = factory(Product::class, 500)->create();

        $products->each(function (Product $product) use ($categories) {
            $randomCategories = $categories->random(3);

            $product->categories()->attach($randomCategories->pluck('id'));
        });

        // Empty categories
        factory(Category::class, 5)->create();
    }
}
