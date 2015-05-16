<?php

namespace spec\annabiala94\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ConvertSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('annabiala94\Tools\Convert');
    }
    
     function it_should_have_setter_and_getter()
    {
        $this->setStr('XI')->getStr()->shouldReturn('XI');
    }
    
    function it_should_convert_roman()
  {
        $this->setStr('XI')->toarabic()->shouldReturn(11);
  }
  
}
