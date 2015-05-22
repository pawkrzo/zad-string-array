<?php

namespace spec\dpyc\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class Zadanie1Spec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('dpyc\Tools\Zadanie1');
    }
    
    function it_should_have_setter_and_getter()
    {
        $this->setStr('damian ma kota damian ma')->getStr()->shouldReturn('damian ma kota damian ma');
    }
    
    function it_should_generate_wynik()
    {
        $this->setStr('damian ma kota damian ma')->wynik()->shouldReturn('damian - 2; ma - 2; kota - 1; ');
    }
}
