<?php

namespace spec\Triplecheck\Phpcs;

use PhpSpec\ObjectBehavior;
use PhpSpec\Matcher\InlineMatcher;
use Prophecy\Argument;

class PluginSpec extends ObjectBehavior
{

    function it_is_initializable()
    {
        $this->shouldHaveType('Triplecheck\Phpcs\Plugin');
    }


    function it_should_implement_abstract_plugin_class()
    {
        $this->shouldHaveType('Triplecheck\Common\AbstractPlugin');
    }


    function it_should_implement_interface_runnable()
    {
        $this->shouldImplementMethod('run');
    }


    function it_should_have_a_command_builder()
    {
        $this->getCommandBuilder()->shouldReturnAnInstanceOf('AdamBrett\ShellWrapper\Command\Builder');
    }

    public function getMatchers()
    {
        return [
            'implementMethod' => function ($subject, $key) {
                return method_exists($subject, $key);
            }];
    }
}
