<?php
    require_once "src/WordCount.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
    
        function testWordCounter()
        {
            $test_word_count = new RepeatCounter;
            $lower_word = "test";
            $lower_phrase = "this is a test";

            $result = $test_word_count->countRepeats($lower_word, $lower_phrase);

            $this->assertEquals("this", $result);
        }

    }
?>
