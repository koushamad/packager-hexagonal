<?php

namespace :uc:vendor\:uc:package\Infra\Mail;

use :uc:vendor\:uc:package\Domain\Models\Ping;

/**
 * Class PingMail
 * @package :uc:vendor\:uc:package\Infra\Mail
 */
class PingMail extends BaseMail
{
    protected $ping;

    /**
     * PingMail constructor.
     * @param Ping $ping
     */
    public function __construct(Ping $ping)
    {
        $this->ping = $ping;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build(): PingMail
    {
        return $this->view(':lc:vendor.:lc:package.email.ping');
    }
}
