<?php
    require_once "src/WordCount.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testWordLower()
        {
            $test_word_lower = new RepeatCounter;
            $lower_word = "WORD";

            $result = $test_word_lower->countRepeats($lower_word);

            $this->assertEquals("word", $result);
        }

        function testWordCounter()
        {
            $test_word_count = new RepeatCounter;
            $lower_word = "test";
            $lower_phrase = "this is a test";

            $result = $test_word_count->countRepeats($lower_word, $lower_phrase);

            $this->assertEquals("1", $result);
        }

    }
?>
