<?php


namespace :uc:vendor\:uc:package\Tests\Unit\Services;


use :uc:vendor\:uc:package\Application\Services\:uc:packageService;
use :uc:vendor\:uc:package\Domain\Contracts\Services\:uc:packageServiceContract;
use :uc:vendor\:uc:package\Domain\Contracts\Services\PingServiceContract;
use :uc:vendor\:uc:package\Domain\Exceptions\PingWriteException;
use :uc:vendor\:uc:package\Domain\Models\Ping;
use :uc:vendor\:uc:package\Tests\TestCase;
use PHPUnit\Framework\MockObject\MockObject;


class :uc:packageServiceTest extends TestCase
{
    /** @var :uc:packageServiceContract|MockObject */
    private $service;

    /** @var PingServiceContract|MockObject */
    private $pingService;

    public function construct(): void
    {
        $this->pingService = $this->createMock(PingServiceContract::class);
        $this->service = new :uc:packageService($this->pingService);
    }

    public function destruct(): void
    {
        // TODO: Implement destruct() method.
    }

    /**
     * @test
     * @throws PingWriteException
     */
    public function it_should_return_ping_when_try_to_ping()
    {
        /** @var Ping $ping */
        $ping = Ping::factory()->create();
        $ip = $this->faker->ipv4;

        $this->pingService->expects($this->once())->method('ping')->with($ip)->willReturn($ping);

        $result = $this->service->ping($ip);

        $this->assertSame($ping, $result);
    }
}
