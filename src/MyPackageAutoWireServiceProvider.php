<?php

namespace :lc:vendor\:uc:package;

use :lc:vendor\:uc:package\Application\Jobs\PingJob;
use :lc:vendor\:uc:package\Application\Services\PingService;
use :lc:vendor\:uc:package\Domain\Contracts\Jobs\PingJobContract;
use :lc:vendor\:uc:package\Domain\Contracts\Repositories\PingRepositoryContract;
use :lc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :lc:vendor\:uc:package\Infra\Repositories\PingRepository;

/**
 * Class :uc:packageAutoWireProvider
 * @package :lc:vendor\:uc:package
 */
class :uc:packageAutoWireServiceProvider
{
    /**
     * @return string[]
     */
    public static function boot(): array
    {
        return [
            //Services
            PingServiceContract::class => PingService::class,

            //Repositories
            PingRepositoryContract::class => PingRepository::class
        ];
    }
}
