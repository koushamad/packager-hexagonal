<?php

namespace :lc:vendor\:uc:package\Application\Services;

use :lc:vendor\:uc:package\Domain\Contracts\Repositories\PingRepositoryContract;
use :lc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :lc:vendor\:uc:package\Domain\Models\Ping;
use PingWriteException;

/**
 * Class PingService
 * @package :lc:vendor\:uc:package\Application\Services
 */
class PingService implements PingServiceContract
{
    private $pingRepository;

    /**
     * PingService constructor.
     * @param PingRepositoryContract $pingRepository
     */
    public function __construct(PingRepositoryContract $pingRepository)
    {
        $this->pingRepository = $pingRepository;
    }

    /**
     * @param string $ip
     * @return Ping
     * @throws PingWriteException
     */
    public function ping(string $ip): Ping
    {
        return $this->pingRepository->pingIp($ip);
    }
}
