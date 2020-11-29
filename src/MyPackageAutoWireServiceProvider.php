<?php

namespace :uc:vendor\:uc:package;

use :uc:vendor\:uc:package\Application\Jobs\PingJob;
use :uc:vendor\:uc:package\Application\Services\PingService;
use :uc:vendor\:uc:package\Domain\Contracts\Jobs\PingJobContract;
use :uc:vendor\:uc:package\Domain\Contracts\Repositories\PingRepositoryContract;
use :uc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :uc:vendor\:uc:package\Infra\Repositories\PingRepository;

/**
 * Class :uc:packageAutoWireProvider
 * @package :uc:vendor\:uc:package
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
