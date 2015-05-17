<?php

namespace spec\furtakm\Tools;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ShortcutSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('furtakm\Tools\Shortcut');
    }
    
    function it_should_generate_shortcut()
    {
        $this->setStr('Lorem Ipsum')->setLenght(5)->shortcut()->shouldReturn('Lorem');
    }
}
