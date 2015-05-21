<?php

namespace spec\kamajo5\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ZadanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('kamajo5\Tools\Zadanie');
    }
    function it_should_have_setter_and_getter()
    {
        $this->setStr('kamil kamil jonaszko kamil')->getStr()->shouldReturn('kamil kamil jonaszko kamil');
    }
    function it_should_generate_wynik()
    {
        $this->setStr('kamil kamil jonaszko kamil')->wynik()->shouldReturn('kamil - 3; jonaszko - 1; ');
    }
}
