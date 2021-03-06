<?php

namespace :uc:vendor\:uc:package\Application\Jobs;

use :uc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :uc:vendor\:uc:package\Domain\Exceptions\PingWriteException;

/**
 * Class PingJob
 * @package :uc:vendor\:uc:package\Application\Jobs
 */
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
     * @throws PingWriteException
     */
    public function handle(PingServiceContract $pingService)
    {
        $pingService->ping($this->ip);
    }
}
