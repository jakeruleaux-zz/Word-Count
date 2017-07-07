<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function testWordCounter()
        {
            $test_word_count = new RepeatCounter;
            $lower_phrase = "this is a test";
            $lower_word = "test";

            $result = $test_word_count->countRepeats($lower_phrase, $lower_word);

            $this->assertEquals("1", $result);
        }

        function testWordCounterTwo()
        {
            $test_word_count_two = new RepeatCounter;
            $lower_phrase = "this is a test or test";
            $lower_word = "test";

            $result = $test_word_count_two->countRepeats($lower_phrase, $lower_word);

            $this->assertEquals("2", $result);
        }

        function testWordCounterThree()
        {
            $test_word_count_three = new RepeatCounter;
            $lower_phrase = "this test is test a test or test";
            $lower_word = "test";

            $result = $test_word_count_three->countRepeats($lower_phrase, $lower_word);

            $this->assertEquals("4", $result);
        }

    }
?>
