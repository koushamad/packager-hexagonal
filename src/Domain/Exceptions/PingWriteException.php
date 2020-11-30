<?php

namespace :uc:vendor\:uc:package\Domain\Exceptions;

use Exception;
use :uc:vendor\:uc:package\Domain\Models\Ping;

/**
 * Class PingWriteException
 * @package :uc:vendor\:uc:package\Domain\Exceptions
 */
class PingWriteException extends Exception
{
    public function __construct(Ping $ping, int $code = 0, Throwable $previous = null)
    {
        parent::__construct('Can Not Write Ip: ' . $ping->ip, $code, $previous);
    }
}
