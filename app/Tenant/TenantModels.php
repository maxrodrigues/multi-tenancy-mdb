<?php

namespace App\Tenant;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

trait TenantModels
{
    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope(new TenantScope());

        static::creating(function (Model $model) {
            $companyId = Auth::user()->company_id;
            $model->company_id = $companyId;
        });
    }
}
