<?php

namespace :uc:vendor\:uc:package\Application\Listeners;

use :uc:vendor\:uc:package\Domain\Events\PingEvent;
use Log;

/**
 * Class EventSubscriber
 * @package :uc:vendor\:uc:package\Application\Listeners
 */
class EventSubscriber
{
    /**
     * Register the listeners for the subscriber.
     *
     * @return array
     */
    public function subscribe(): array
    {
        return [
            PingEvent::class => [
                [EventSubscriber::class, 'pingSubscriber']
            ]
        ];
    }

    /**
     * @param PingEvent $event
     */
    public function pingSubscriber(PingEvent $event)
    {
        Log::info("Subscribe Ping Event IP: " . $event->ip);
    }
}
