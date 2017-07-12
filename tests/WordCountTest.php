<?php
    require_once "src/RepeatCounter.php";
    class RepeatCounterTest extends PHPUnit_Framework_TestCase
    {

        function testWordLower()
        {
          $test_word_lower = new RepeatCounter;
          $lower_phrase = "This Is A Test";
          $lower_word = "Test";
          // $lower_phrase = "This Is A Test";

          $result = $test_word_lower->countRepeats($lower_phrase, $lower_word);

          $this->assertEquals("this is a test", "test", $result);
        }

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

        function testWordCounterFragments()
        {
            $test_word_count_fragments = new RepeatCounter;
            $lower_phrase = "this tester is tests a test or test";
            $lower_word = "test";

            $result = $test_word_count_fragments->countRepeats($lower_phrase, $lower_word);

            $this->assertEquals("2", $result);
        }

    }
?>
