<?php

namespace :lc:vendor\:uc:package\Application\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class :uc:package
 * @package :lc:vendor\:uc:package\Application\Facades
 */
class :uc:packageFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return ':lc:package';
    }
}
