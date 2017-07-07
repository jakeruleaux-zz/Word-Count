<?php

    class RepeatCounter
    {



        function countRepeats($input_phrase, $input_word)
        {
            $lower_word = strtolower($input_word);
            // var_dump($lower_word);
            // return $lower_word;
            $lower_phrase = strtolower($input_phrase);
            $explode_phrase = explode(" ", $lower_phrase);
            // return $lower_phrase;

            $word_array = [];
            // var_dump($word_array);
            foreach ($explode_phrase as $phrase)
             {
                if ($phrase == $lower_word) {
                    array_push($word_array, "1");
// var_dump($phrase);
                }

            }
            $word_total = array_sum($word_array);
            return $word_total;
            var_dump($word_total);
        }







    }



 ?>
