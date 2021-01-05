<?php

use App\Models\Category;
use App\Models\Company;
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
        \Tenant::setTenant(Company::find(1));
        factory(Category::class, 8)->create();

        \Tenant::setTenant(Company::find(2));
        factory(Category::class, 12)->create();
    }
}
