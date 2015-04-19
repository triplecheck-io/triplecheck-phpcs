<?php

namespace spec\Triplecheck\Phpcs;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ScoringSpec extends ObjectBehavior
{
    public $results = '{"totals":{"errors":8,"warnings":0},"files":{"\/home\/amacgregor\/Projects\/TripleCheck\/triplecheck-phpcs\/tests\/SimpleTest.php":{"errors":8,"warnings":0,"messages":[{"message":"Missing file doc comment","source":"PEAR.Commenting.FileComment.Missing","severity":5,"type":"ERROR","line":2,"column":1},{"message":"Missing function doc comment","source":"PEAR.Commenting.FunctionComment.Missing","severity":5,"type":"ERROR","line":4,"column":8},{"message":"Opening brace should be on a new line","source":"PEAR.Functions.FunctionDeclaration.BraceOnSameLine","severity":5,"type":"ERROR","line":4,"column":34},{"message":"Expected \"if (...) {\\n\"; found \"if(...) { \"","source":"PEAR.ControlStructures.ControlSignature","severity":5,"type":"ERROR","line":6,"column":5},{"message":"Closing brace must be on a line by itself","source":"PEAR.WhiteSpace.ScopeClosingBrace.Line","severity":5,"type":"ERROR","line":6,"column":31},{"message":"Missing function doc comment","source":"PEAR.Commenting.FunctionComment.Missing","severity":5,"type":"ERROR","line":9,"column":8},{"message":"Opening brace should be on a new line","source":"PEAR.Functions.FunctionDeclaration.BraceOnSameLine","severity":5,"type":"ERROR","line":9,"column":37},{"message":"Closing brace must be on a line by itself","source":"PEAR.WhiteSpace.ScopeClosingBrace.Line","severity":5,"type":"ERROR","line":13,"column":15}]}}}';

    function let()
    {
        $results = json_decode($this->results);
        $this->beConstructedWith($results);
    }
    
    function it_is_initializable()
    {
        $this->shouldHaveType('Triplecheck\Phpcs\Scoring');
    }
    
    function it_should_calculate_the_score()
    {
        $this->calculate()->shouldHaveType('StdClass');
    }
    
}
