<?php

namespace Dartui\StraussPrefixError;

use Mailgun\Mailgun;

class Test
{
    public function __construct()
    {
        $this->mailgun = Mailgun::create();
        $this->title = 'Mailgun';
    }
}