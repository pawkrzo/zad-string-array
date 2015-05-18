<?php

namespace spec\Shuwax\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class DlugoscSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Shuwax\Tools\Dlugosc');
    }
        
    function it_should_have_setter_and_getter()
    {
        $this->setText('ja tez tata ja')->getText()->shouldReturn('ja tez tata ja');
    }
    function it_should_convert_dlugosc()
    {
    $this->setText('ja tez tata ja')->dlugosc()->shouldReturn('tata - 4 tez - 3 ja - 2 ');
    }
}
