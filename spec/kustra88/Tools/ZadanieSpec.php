<?php

namespace spec\kustra88\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ZadanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kustra88\Tools\Zadanie');
    }
}
