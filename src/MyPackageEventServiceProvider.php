<?php

namespace :uc:vendor\:uc:package;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use :uc:vendor\:uc:package\Application\Listeners\PingListener;
use :uc:vendor\:uc:package\Domain\Events\PingEvent;

class :uc:packageEventServiceProvider extends ServiceProvider
{
    protected $listen = [
        PingEvent::class => [
            PingListener::class,
        ]
    ];

    /**
     * The subscriber classes to register.
     *
     * @var array
     */
    protected $subscribe = [
        ':uc:vendor\:uc:package\Application\Listeners\EventSubscriber',
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();
    }
}
