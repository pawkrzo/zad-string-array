<?php

namespace spec\Shuwax\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SortowanieSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Shuwax\Tools\Sortowanie');
    }    
    
    
     function it_should_have_setter_and_getter()
    {
        $this->setText('ala ma ala')->getText()->shouldReturn('ala ma ala');
    }

    function it_should_convert_sort()
    {
    $this->setText('ala ma ala')->sort()->shouldReturn('ala - 2 ma - 1 ');
    }
}
