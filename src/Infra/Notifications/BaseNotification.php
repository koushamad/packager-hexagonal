<?php

namespace :lc:vendor\:uc:package\Infra\Notifications;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Notification;
use Illuminate\Bus\Queueable;

/**
 * Class BaseNotification
 * @package :lc:vendor\:uc:package\Infra\Notifications
 */
abstract class BaseNotification extends Notification implements ShouldQueue
{
    use Queueable;
}
