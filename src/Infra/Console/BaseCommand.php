<?php

namespace :uc:vendor\:uc:package\Infra\Console;

use App;
use Illuminate\Console\Command;
use Illuminate\Contracts\Debug\ExceptionHandler;
use :uc:vendor\:uc:package\Domain\Contracts\Handlers\ExceptionHandlerContract;

/**
 * Class BaseCommand
 * @package :uc:vendor\:uc:package\Infra\Console
 */
abstract class BaseCommand extends Command
{

    /**
     * PingCommand constructor.
     */
    public function __construct()
    {
        App::singleton(
            ExceptionHandler::class,
            ExceptionHandlerContract::class
        );

        parent::__construct();
    }
}
