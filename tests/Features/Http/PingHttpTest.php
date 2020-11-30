<?php

namespace :uc:vendor\:uc:package\Tests\Features\Http;

use Illuminate\Http\Response;
use :uc:vendor\:uc:package\Tests\TestCase;

/**
 * Class PingTest
 * @package :uc:vendor\:uc:package\Tests\Features
 */
class PingHttpTest extends TestCase
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
    public function it_should_return_pong()
    {
        $response = $this->get('/:lc:vendor/:lc:package/api/v1/ping');

        $this->assertSame($response->getStatusCode(), Response::HTTP_OK);
        $this->assertSame($response->content(), 'Pong');
        $this->assertDatabaseHas('pings', ['ip' => '127.0.0.1']);
    }
}
