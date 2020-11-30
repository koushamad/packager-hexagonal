<?php

namespace :uc:vendor\:uc:package\Domain\Events;

/**
 * Class PingEvent
 * @package :uc:vendor\:uc:package\Domain\Events
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
