<?php

namespace :uc:vendor\:uc:package\Tests\Unit\Services;

use :uc:vendor\:uc:package\Application\Services\PingService;
use :uc:vendor\:uc:package\Domain\Contracts\Repositories\PingRepositoryContract;
use :uc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :uc:vendor\:uc:package\Domain\Exceptions\PingWriteException;
use :uc:vendor\:uc:package\Domain\Models\Ping;
use :uc:vendor\:uc:package\Tests\TestCase;
use PHPUnit\Framework\MockObject\MockObject;

/**
 * Class PingServiceTest
 * @package :uc:vendor\:uc:package\Tests\Unit\Services
 */
class PingServiceTest extends TestCase
{
    /** @var PingServiceContract|MockObject */
    private $service;

    /** @var PingRepositoryContract|MockObject */
    private $pingRepository;

    public function construct(): void
    {
        $this->pingRepository = $this->createMock(PingRepositoryContract::class);

        $this->service = new PingService($this->pingRepository);
    }

    public function destruct(): void
    {
        // TODO: Implement destruct() method.
    }

    public function setService($methods = []): void
    {
        $this->service = $this->getMockBuilder(PingServiceContract::class)
            ->setConstructorArgs([$this->pingRepository])
            ->setMethods($methods)
            ->getMock();
    }

    /**
     * @test
     * @throws PingWriteException
     */
    public function it_should_return_ping_when_given_ip()
    {
        /** @var Ping $ping */
        $ping = Ping::factory()->create();
        $ip = $this->faker->ipv4;

        $this->pingRepository->expects($this->once())->method('pingIp')->with($ip)->willReturn($ping);

        $this->assertEquals($ping, $this->service->ping($ip));
    }
}
