<?php

use App\Models\Company;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Company::class, 1)->create([
            'name' => 'Empresa 1'
        ]);

        factory(Company::class, 1)->create([
            'name' => 'Empresa 2'
        ]);
    }
}
