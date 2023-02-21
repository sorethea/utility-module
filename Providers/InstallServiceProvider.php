<?php

namespace Modules\Utility\Providers;

use Illuminate\Support\ServiceProvider;
use Modules\LAM\Providers\BaseInstallServiceProvider;
use Modules\Utility\Database\Migrations\CreateAddressesTable;
use Modules\Utility\Database\Migrations\CreateCommentsTable;
use Modules\Utility\Database\Migrations\CreatePhonesTable;
use Modules\Utility\Database\Migrations\CreatePricesTable;
use Modules\Utility\Database\Migrations\CreateRatingsTable;
use Modules\Utility\Database\Migrations\CreateTagsTable;
use Modules\Utility\Database\Migrations\CreateVisitsTable;
use Modules\Utility\Database\Seeders\UtilityDatabaseSeeder;

class InstallServiceProvider extends BaseInstallServiceProvider
{
    public function install()
    {
        $seed = new UtilityDatabaseSeeder();
        $seed->run();
    }

}
