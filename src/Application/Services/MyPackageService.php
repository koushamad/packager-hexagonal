<?php

namespace :uc:vendor\:uc:package\Application\Services;

use :uc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;

/**
 * Class :uc:package
 * @package :uc:vendor\:uc:package\Application\RPC
 */
class :uc:packageService
{
    private $pingService;

    /**
     * :uc:package constructor.
     * @param PingServiceContract $pingService
     */
    public function __construct(PingServiceContract $pingService)
    {
        $this->pingService = $pingService;
    }

    /**
     * @param string $ip
     */
    public function ping(string $ip): void
    {
        $this->pingService->ping($ip);
    }
}
