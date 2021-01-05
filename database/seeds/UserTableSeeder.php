<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        #factory(User::class, 1)->create([
        #    'name' => 'Adminitrador',
        #    'email' => 'admin@user.com'
        #]);
        factory(User::class, 1)->create([
            #'name' => 'Adminitrador',
            'email' => 'user1@user.com',
            'company_id' => 1
        ]);
        factory(User::class, 1)->create([
            #'name' => 'Adminitrador',
            'email' => 'user2@user.com',
            'company_id' => 2
        ]);
    }
}
