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
            $company = \Tenant::getTenant();
            #$companyId = Auth::user()->company_id;
            if ($company) {
                $model->company_id = $company->id;
            }
        });
    }
}
