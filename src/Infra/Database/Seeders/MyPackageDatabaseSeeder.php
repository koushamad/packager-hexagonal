<?php

namespace :uc:vendor\:uc:package\Infra\Database\Seeders;

use Illuminate\Database\Seeder;
use :uc:vendor\:uc:package\Domain\Models\Ping;

/**
 * Class :uc:packageDatabaseSeeder
 * @package :uc:vendor\:uc:package\Infra\Database\Seeders
 */
class :uc:packageDatabaseSeeder extends Seeder
{
    public function run()
    {
        Ping::factory(10)->create();
    }
}
