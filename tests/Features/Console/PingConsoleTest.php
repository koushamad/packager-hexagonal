<?php

namespace :uc:vendor\:uc:package\Tests\Features\Console;

use :uc:vendor\:uc:package\Tests\TestCase;
use TiMacDonald\Log\LogFake;
use Illuminate\Support\Facades\Log;

/**
 * Class PingConsoleTest
 * @package :uc:vendor\:uc:package\Tests\Features\Console
 */
class PingConsoleTest extends TestCase
{
    public function construct(): void
    {
        // TODO: Implement construct() method.
    }

    public function destruct(): void
    {
        // TODO: Implement destruct() method.
    }

    /**
     * @test
     */
    public function it_should_ping_ip()
    {
        $ip = $this->faker->ipv4;
        $logs = [
            'Subscribe Ping Event IP: '. $ip,
        ];

        Log::swap(new LogFake);

        $this->artisan(':lc:package:ping', ['ip' => $ip]);

        $this->assertDatabaseHas('pings', ['ip' => $ip]);

        Log::assertLogged('info', function ($message, $context) use ($logs) {
            return in_array($message, $logs);
        });
    }
}
