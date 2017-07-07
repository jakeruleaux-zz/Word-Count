<?php
    require_once "src/WordCount.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testWordLower()
        {
            $test_word_lower= new RepeatCounter;
            $input = "THIS";
            $result = $test_word_lower->countRepeats($input);
            $this->assertEquals("this", $result);
        }


    }
?>
