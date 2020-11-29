<?php

namespace :lc:vendor\:uc:package\Domain\Events;

use :lc:vendor\:uc:package\Domain\Models\Ping;

/**
 * Class PingEvent
 * @package :lc:vendor\:uc:package\Domain\Events
 */
class PingEvent extends BaseEvent
{
    public $ip;

    /**
     * PingEvent constructor.
     * @param string $ip
     */
    public function __construct(string $ip)
    {
        $this->ip = $ip;
    }
}
