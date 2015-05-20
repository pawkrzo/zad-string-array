<?php

namespace spec\kzolnierz\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Zad1Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kzolnierz\Tools\Zad1');
    }
}
