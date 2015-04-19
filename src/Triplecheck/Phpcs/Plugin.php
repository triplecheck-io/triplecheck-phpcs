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

    public function configure()
    {
        return;
    }

    public function getCommandBuilder()
    {
        return $this->_command;
    }
}
