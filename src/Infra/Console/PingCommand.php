<?php

namespace :uc:vendor\:uc:package\Infra\Console;

use Illuminate\Console\Command;
use :uc:vendor\:uc:package\Domain\Events\PingEvent;

/**
 * Class PingCommand
 * @package :uc:vendor\:uc:package\Infra\Console
 */
class PingCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = ':lc:package:ping {ip}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send drip e-mails to a user';

    public function handle()
    {
        PingEvent::dispatch($this->argument('ip'));
    }
}
