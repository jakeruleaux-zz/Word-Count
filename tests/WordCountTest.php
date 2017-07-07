<?php
    require_once "src/WordCount.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {
        function testWordLower()
        {
            $test_word_lower= new RepeatCounter;
            $lower_word = "WORD";

            $result = $test_word_lower->countRepeats($lower_word);
            $this->assertEquals("word", $result);
        }

        // function testphraseLower()
        // {
        //     $test_phrase_lower= new RepeatCounter;
        //     $lower_phrase = "THIS IS A TEST";
        //     $result = $test_phrase_lower->countRepeats($lower_phrase, $lower_word);
        //     $this->assertEquals("this is a test", $result);
        // }

        // function testWordCount()
        // {
        //     $test_word_count= new RepeatCounter;
        //     $lower_phrase = "this is a test or test";
        //     $result = $test_word_count->countRepeats($lower_phrase);
        //     $this->assertEquals("2", $result);
        // }



    }
?>
