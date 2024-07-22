<?php

namespace Dartui\StraussPrefixError;

use Dartui\StraussPrefixError\Dependencies\Mailgun\Mailgun;

class Test
{
    public function __construct()
    {
        $this->mailgun = Mailgun::create();
        $this->title = 'Dartui\StraussPrefixError\Dependencies\Mailgun';
    }
}