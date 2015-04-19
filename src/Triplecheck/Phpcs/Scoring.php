<?php

namespace Triplecheck\Phpcs;

class Scoring
{
    protected $_results;

    public function __construct($results)
    {
        $this->_results = $results;
    }

    public function calculate()
    {
        if(!isset($this->_results))
        {
            return false;
        }

        foreach ($this->_results->files as $filename => $data)
        {
        }
        

        return $this->_results;
    }
}
