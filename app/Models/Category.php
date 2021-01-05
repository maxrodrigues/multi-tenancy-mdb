<?php

namespace App\Models;

use App\Tenant\TenantModels;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use TenantModels;
    protected $fillable = ["name"];

    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
