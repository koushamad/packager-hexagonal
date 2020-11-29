<?php

namespace :lc:vendor\:uc:package\Infra\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use :lc:vendor\:uc:package\Domain\Models\Ping;

class PingFactory extends Factory
{

    protected $model = Ping::class;

    /**
     * @return array
     */
    public function definition(): array
    {
        return [
            'ip' => $this->faker->ipv4,
        ];
    }
}
