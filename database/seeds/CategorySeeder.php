<?php

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(Category::class, 8)->create([
            'company_id' => 1
        ]);

        factory(Category::class, 12)->create([
            'company_id' => 2
        ]);
    }
}
