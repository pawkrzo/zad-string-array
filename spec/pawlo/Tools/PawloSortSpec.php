<?php

namespace spec\pawlo\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PawloSortSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('pawlo\Tools\PawloSort');
    }
    function it_should_have_setter_and_gettter()
    {
        $this->setStr('Kotek')->getStr()->shouldReturn('Kotek');
    }
      function it_should_sort_by_length()
    {
        $this->setStr('kotek ali')->sort()->shouldReturn('kotek -5 ali -3');
    }
}
