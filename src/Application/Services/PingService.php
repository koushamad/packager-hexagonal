<?php

namespace :uc:vendor\:uc:package\Application\Services;

use :uc:vendor\:uc:package\Domain\Contracts\Repositories\PingRepositoryContract;
use :uc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :uc:vendor\:uc:package\Domain\Models\Ping;
use :uc:vendor\:uc:package\Domain\Exceptions\PingWriteException;
use :uc:vendor\:uc:package\Infra\Mail\PingMail;

/**
 * Class PingService
 * @package :uc:vendor\:uc:package\Application\Services
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
