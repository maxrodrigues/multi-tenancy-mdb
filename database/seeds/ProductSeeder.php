<?php

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $categories = Category::all();
        factory(Product::class, 64)
            ->make()
            ->each(function(Product $product) use ($categories){
                $product->category_id  = $categories->random()->id;
                $product->save();
            });
    }
}
