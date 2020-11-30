<?php

namespace :uc:vendor\:uc:package\Application\Services;

use :uc:vendor\:uc:package\Domain\Contracts\Services\:uc:packageServiceContract;
use :uc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :uc:vendor\:uc:package\Domain\Exceptions\PingWriteException;
use :uc:vendor\:uc:package\Domain\Models\Ping;

/**
 * Class :uc:package
 * @package :uc:vendor\:uc:package\Application\RPC
 */
class :uc:packageService implements :uc:packageServiceContract
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
     * @return Ping
     * @throws PingWriteException
     */
    public function ping(string $ip): Ping
    {
        return $this->pingService->ping($ip);
    }
}
