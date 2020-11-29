<?php

namespace :lc:vendor\:uc:package\Domain\Events;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

/**
 * Class BaseEvent
 * @package :lc:vendor\:uc:package\Domain\Events
 */
abstract class BaseEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;
}
