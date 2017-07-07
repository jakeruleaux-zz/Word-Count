<?php

    class RepeatCounter
    {

        function wordLower($input_word)
        {
            $lower_word = strtolower($input_word);
            return $lower_word;
        }
        // function phraseLower($input_phrase)
        // {
        // }

        function countRepeats($input_phrase)
        {

            // $phrase_arr = [];
            // var_dump($phrase_arr);
            $lower_phrase = strtolower($input_phrase);
            // array_push($phrase_arr, $lower_phrase);
            // return $phrase_arr;
            // $occurrences = (array_count_values($phrase_arr));
            // var_dump($occurrences);
            // $test = implode(" ", $occurrences);
            $test = substr_count($lower_phrase, 'test');
            return $test;
            // return $occurrences;
        }







    }



 ?>
