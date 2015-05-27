<?php

namespace spec\pawkrzo\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ZadanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('pawkrzo\Tools\Zadanie');
    }
}
