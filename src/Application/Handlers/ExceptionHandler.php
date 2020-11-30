<?php

namespace :uc:vendor\:uc:package\Application\Handlers;

use App\Exceptions\Handler;
use :uc:vendor\:uc:package\Domain\Contracts\Handlers\ExceptionHandlerContract;
use :uc:vendor\:uc:package\Domain\Exceptions\PingWriteException;
use Log;

/**
 * Class ExceptionHandler
 * @package :uc:vendor\:uc:package\Application\Handlers
 */
class ExceptionHandler extends Handler implements ExceptionHandlerContract
{
    /**
     * Register the exception handling callbacks for the application.
     *
     * @return void
     */
    public function register()
    {
        $this->reportable(function (PingWriteException $e) {
            Log::error($e->getMessage(), $e->getTrace());
        });

        parent::register();
    }
}
