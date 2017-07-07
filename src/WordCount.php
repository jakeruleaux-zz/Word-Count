<?php

    class RepeatCounter
    {



        function countRepeats($input_word, $input_phrase)
        {
            $lower_word = strtolower($input_word);
            // return $lower_word;
            $lower_phrase = strtolower($input_phrase);
            $explode_phrase = explode(" ", $lower_phrase);
            // return $lower_phrase;

            $word_array = [];
            // var_dump($word_array);
            foreach ($explode_phrase as $phrase)
             {
                if ($phrase == $lower_phrase) {
                    $lower_word = "1";
                    array_push($word_array, $lower_word);
                }

            }
            $word_total = array_sum($word_array);
            return $word_total;
            var_dump($word_array);
        }







    }



 ?>
