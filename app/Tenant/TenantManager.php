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
    public function getTenant(): ?Company
    {
        //NULL or Company
        return $this->tenant;
    }

    /**
     * @param  Company $tenant
     * @return void
     */
    public function setTenant(?Company $tenant): void
    {
        $this->tenant = $tenant;
    }

    /**
     * @return void
     */
    public function disableTenant(): void
    {
        $this->tenant = null;
    }
}
