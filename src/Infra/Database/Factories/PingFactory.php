<?php

namespace :uc:vendor\:uc:package\Infra\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use :uc:vendor\:uc:package\Domain\Models\Ping;

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
