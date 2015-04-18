<?php

namespace spec\Triplecheck\Phpcs;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class PluginSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Triplecheck\Phpcs\Plugin');
    }
}
