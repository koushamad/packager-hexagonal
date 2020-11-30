<?php

namespace :uc:vendor\:uc:package\Domain\Contracts\Repositories;

use :uc:vendor\:uc:package\Domain\Models\Ping;
use :uc:vendor\:uc:package\Domain\Exceptions\PingWriteException;

/**
 * Interface PingRepositoryContract
 * @package :uc:vendor\:uc:package\Domain\Contract\Repository
 */
interface PingRepositoryContract
{
    /**
     * @param string $ip
     * @return Ping
     * @throws PingWriteException
     */
    public function pingIp(string $ip): Ping;
}
