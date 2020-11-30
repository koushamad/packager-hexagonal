<?php

namespace :uc:vendor\:uc:package\Infra\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class BaseMail
 * @package :uc:vendor\:uc:package\Infra\Mail
 */
abstract class BaseMail extends Mailable
{
    use Queueable, SerializesModels;
}
