<?php

namespace :lc:vendor\:uc:package\Infra\Database\Seeders;

use Illuminate\Database\Seeder;
use :lc:vendor\:uc:package\Domain\Models\Ping;

/**
 * Class :uc:packageDatabaseSeeder
 * @package :lc:vendor\:uc:package\Infra\Database\Seeders
 */
class :uc:packageDatabaseSeeder extends Seeder
{
    public function run()
    {
        Ping::factory(1000)->create();
    }
}
