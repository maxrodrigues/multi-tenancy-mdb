<?php

namespace App;

use App\Models\Admin;
use App\Models\UserTenant;
use App\Tenant\TenantModels;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable, TenantModels;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ["name", "email", "password"];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        "email_verified_at" => "datetime",
    ];

    public static function createAdmin(array $attributes)
    {
        $user = self::create($attributes);
        $admin = Admin::create([]);
        $user->userable()->associate($admin);

        return $user;
    }

    public static function createUserTenant(array $attributes)
    {
        $user = self::create($attributes);
        $admin = UserTenant::create([]);
        $user->userable()->associate($admin);

        return $user;
    }

    public function fill(array $attributes)
    {
        !isset($attributes['password']) ?: $attributes['password'] = bcrypt($attributes['password']);
        return parent::fill($attributes);
    }

    public function userable()
    {
        return $this->morphTo();
    }
}
