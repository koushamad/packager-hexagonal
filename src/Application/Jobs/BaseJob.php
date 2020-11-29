<?php

namespace :lc:vendor\:uc:package\Application\Jobs;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Bus\Batchable;
use Illuminate\Bus\Queueable;

/**
 * Class BaseJob
 * @package :lc:vendor\:uc:package\Application\Job
 */
class BaseJob implements ShouldQueue
{
    use Batchable, Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
}
