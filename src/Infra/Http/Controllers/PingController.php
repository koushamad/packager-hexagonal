<?php

namespace :lc:vendor\:uc:package\Infra\Http\Controllers;

use :lc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :lc:vendor\:uc:package\Infra\Http\Requests\PingRequest;
use PingWriteException;

/**
 * Class PingController
 * @package :lc:vendor\:uc:package\Infra\Http\Controllers
 */
class PingController extends BaseController
{
    private $pingService;

    /**
     * PingController constructor.
     * @param PingServiceContract $pingService
     */
    public function __construct(PingServiceContract $pingService)
    {
        $this->pingService = $pingService;
    }

    /**
     * @param PingRequest $pingRequest
     * @return string
     * @throws PingWriteException
     */
    public function ping(PingRequest $pingRequest): string
    {
        $this->pingService->ping($pingRequest->getClientIp());

        return 'Pong';
    }
}