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
    function it_should_have_setter_and_getter()
    {
        $this->setStr('piotrek piotrek kustra piotrek')->getStr()->shouldReturn('piotrek piotrek kustra piotrek');
    }
    function it_should_generate_wynik()
    {
        $this->setStr('piotrek piotrek kustra piotrek')->wynik()->shouldReturn('piotrek - 3; kustra - 1; ');
    }
}
