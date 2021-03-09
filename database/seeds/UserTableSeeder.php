<?php

use App\Models\Admin;
use App\Models\Company;
use App\Models\UserTenant;
use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    private $password = 'password';
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $self = $this;
        
        \Tenant::setTenant(Company::find(1));
        factory(User::class, 1)->make([
            "email" => "admin@user.com",
        ])->each(function ($user) use ($self) {
            Admin::createUser([
                'user' => $user->toArray() + ['password' => $self->password]
            ]);
        });

        \Tenant::setTenant(Company::find(2));
        factory(User::class, 1)->make([
            "email" => "user1@user.com",
        ])->each(function ($user) use ($self) {
            UserTenant::createUser([
                'user' => $user->toArray() + ['password' => $self->password]
            ]);
        });

        \Tenant::setTenant(Company::find(3));
        factory(User::class, 1)->make([
            "email" => "user2@user.com",
        ])->each(function ($user) use ($self) {
            UserTenant::createUser([
                'user' => $user->toArray() + ['password' => $self->password]
            ]);
        });
    }
}
