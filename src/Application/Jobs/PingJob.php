<?php

namespace :lc:vendor\:uc:package\Application\Jobs;

use :lc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;

class PingJob extends BaseJob
{
    private $ip;

    /**
     * PingJob constructor.
     * @param string $ip
     */
    public function __construct(string $ip)
    {
        $this->ip = $ip;
    }

    /**
     * @param PingServiceContract $pingService
     */
    public function handle(PingServiceContract $pingService)
    {
        $pingService->ping($this->ip);
    }
}