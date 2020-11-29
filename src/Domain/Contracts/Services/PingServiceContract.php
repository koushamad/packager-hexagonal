<?php

namespace :lc:vendor\:uc:package\Domain\Contracts\Services;

use :lc:vendor\:uc:package\Domain\Models\Ping;
use PingWriteException;

/**
 * Interface PingServiceContract
 * @package :lc:vendor\:uc:package\Domain\Service
 */
interface PingServiceContract
{
    /**
     * @param string $ip
     * @throws PingWriteException
     * @return Ping
     */
    public function ping(string $ip): Ping;
}
