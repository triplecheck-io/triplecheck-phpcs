<?php

namespace Triplecheck\Phpcs;

use Triplecheck\Common\Score as Score;

class Scoring
{
    protected $_results;

    public function __construct($results)
    {
        $this->_results = $results;
    }

    public function calculate()
    {
        $this->_checkResults();
        $score = new Score();

        foreach ($this->_results->files as $filename => $data)
        {
            $baseScore = 5;
            if ($baseScore > $data->errors) { 
                $baseScore -= $data->errors; 
            }else {
                $baseScore = 0;
            }
            $score->addResult($baseScore);
        }

        return $score->getScore() / $score->getFileCount() ;
    }

    protected function _checkResults()
    {
        if(!isset($this->_results))
        {
            return false;
        }
    }
}
