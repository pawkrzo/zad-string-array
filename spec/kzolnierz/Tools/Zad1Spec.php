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
    
    function it_should_have_setter_and_getter()
    {
        $this->setStr('kici kici mial mial mial')->getStr()->shouldReturn('kici kici mial mial mial');
    }
    function it_should_generate_statystyka()
    {
        $this->setStr('kici kici mial mial mial')->statystyka()->shouldReturn('kici - 2; mial - 3; ');
    }
}
