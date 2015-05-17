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
}
