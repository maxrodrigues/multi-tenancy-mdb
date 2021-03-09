<?php

namespace App\Models;

use App\Tenant\TenantModels;
use App\User;
use Illuminate\Database\Eloquent\Model;

class UserTenant extends Model
{
    #use TenantModels;
    
    public static function createUser(array $attributes)
    {
        $userTenant = self::create([]);
        $userTenant->user()->create($attributes['user']);
        return $userTenant;
    }

    public function user(){
        return $this->morphOne(User::class, 'userable');
    }
}
