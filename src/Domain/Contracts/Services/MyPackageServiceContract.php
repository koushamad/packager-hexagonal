<?php

namespace :uc:vendor\:uc:package\Domain\Contracts\Services;

use :uc:vendor\:uc:package\Domain\Exceptions\PingWriteException;
use :uc:vendor\:uc:package\Domain\Models\Ping;

interface :uc:packageServiceContract
{
    /**
     * @param string $ip
     * @throws PingWriteException
     * @return Ping
     */
    public function ping(string $ip): Ping;
}
