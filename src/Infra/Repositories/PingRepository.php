<?php

namespace :lc:vendor\:uc:package\Infra\Repositories;

use :lc:vendor\:uc:package\Domain\Contracts\Repositories\PingRepositoryContract;
use :lc:vendor\:uc:package\Domain\Models\Ping;
use PingWriteException;

/**
 * Class PingRepository
 */
class PingRepository implements PingRepositoryContract
{
    /**
     * @param string $ip
     * @return Ping
     * @throws PingWriteException
     */
    public function pingIp(string $ip): Ping
    {
        $ping = Ping::where('ip', $ip)->firstOrNew();

        $ping->ip = $ip;
        $ping->updated_at = now();

        if (!$ping->save()) {
            throw new PingWriteException($ping);
        }

        return $ping;
    }
}
