<?php

namespace :uc:vendor\:uc:package\Application\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use :uc:vendor\:uc:package\Application\Jobs\PingJob;
use :uc:vendor\:uc:package\Domain\Events\PingEvent;
use Log;

/**
 * Class PingListener
 * @package :uc:vendor\:uc:package\Application\Listeners
 */
class PingListener implements ShouldQueue
{
    /**
     * @param PingEvent $event
     */
    public function handle(PingEvent $event)
    {
        PingJob::dispatch($event->ip)->onQueue('pending')->delay(now()->addSeconds(3));
    }

    /**
     * @param PingEvent $event
     * @param $exception
     */
    public function failed(PingEvent $event, $exception)
    {
        Log::error($exception->getMessage());
    }
}
