<?php

namespace :uc:vendor\:uc:package\Domain\Contracts\Services;

use :uc:vendor\:uc:package\Domain\Models\Ping;
use PingWriteException;

/**
 * Interface PingServiceContract
 * @package :uc:vendor\:uc:package\Domain\Service
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
