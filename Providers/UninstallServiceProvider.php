<?php

namespace Modules\Utility\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\LAM\Providers\BaseUninstallServiceProvider;
use Modules\Utility\Database\Seeders\UtilityDatabaseSeeder;

class UninstallServiceProvider extends BaseUninstallServiceProvider
{
    public function uninstall()
    {
        $seed = new UtilityDatabaseSeeder();
        $seed->rollback();
    }
}
