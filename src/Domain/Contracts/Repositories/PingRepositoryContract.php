<?php

namespace :lc:vendor\:uc:package\Domain\Contracts\Repositories;

use :lc:vendor\:uc:package\Domain\Models\Ping;
use PingWriteException;

/**
 * Interface PingRepositoryContract
 * @package :lc:vendor\:uc:package\Domain\Contract\Repository
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
