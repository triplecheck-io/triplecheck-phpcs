<?php

namespace Triplecheck\Phpcs;


class Plugin extends \Triplecheck\Common\AbstractPlugin implements
    \Triplecheck\Common\Plugin\ConfigurableInterface,
    \Triplecheck\Common\Plugin\RunnableInterface
{

    public $_pluginCode = 'phpcs';

    public function run()
    {
        $this->_shell->run($this->_command);
    }

    public function configure($options)
    {
        if (isset($options['flag'])) {
            $this->_command->addFlag($options['flag']);
        }
        if (isset($options['argument'])) {
            $this->_command->addArgument($options['argument']);
        }
        if (isset($options['param'])) {
            $this->_command->addParam($options['param']);
        }
    }

    public function getCommandBuilder()
    {
        return $this->_command;
    }
}
