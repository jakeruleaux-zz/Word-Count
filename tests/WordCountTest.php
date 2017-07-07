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

        function testphraseLower()
        {
            $test_phrase_lower= new RepeatCounter;
            $input = "THIS IS A TEST";
            $result = $test_phrase_lower->countRepeats($input);
            $this->assertEquals("this is a test", $result);
        }

        function testWordCount()
        {
            $test_word_count= new RepeatCounter;
            $input = "word word";
            $result = $test_word_count->countRepeats($input);
            $this->assertEquals("2", $result);
        }



    }
?>
