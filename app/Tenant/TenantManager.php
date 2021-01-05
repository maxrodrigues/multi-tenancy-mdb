<?php
declare(strict_types=1);

namespace App\Tenant;

use App\Models\Company;

class TenantManager
{
    private $tenant;

    /**
     * @return Company
     */
    public function getTentant(): ?Company
    {
        //NULL or Company
        return $this->tenant;
    }

    /**
     * @param  Company $tenant
     * @return void
     */
    public function setTenant($tenant): void
    {
        $this->tenant = $tenant;
    }
}
