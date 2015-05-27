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
    function it_should_have_setter_and_getter()
    {
        $this->setStr('zdam zdam sesje zdam')->getStr()->shouldReturn('zdam zdam sesje zdam');
    }
    function it_should_generate_wynik()
    {
        $this->setStr('zdam zdam sesje zdam')->wynik()->shouldReturn('zdam - 3; sesje - 1; ');
    }
}
