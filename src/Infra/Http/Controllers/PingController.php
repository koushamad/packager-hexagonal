<?php

namespace :uc:vendor\:uc:package\Infra\Http\Controllers;

use :uc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :uc:vendor\:uc:package\Infra\Http\Requests\PingRequest;
use :uc:vendor\:uc:package\Domain\Exceptions\PingWriteException;

/**
 * Class PingController
 * @package :uc:vendor\:uc:package\Infra\Http\Controllers
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
        parent::__construct();
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
