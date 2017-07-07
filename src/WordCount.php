<?php

    class RepeatCounter
    {



        function countRepeats($input_word, $input_phrase)
        {
            $lower_word = strtolower($input_word);
            return $lower_word;
            $lower_phrase = strtolower($input_phrase);
            // return $lower_phrase;

            $word_array = [];
            var_dump($word_array);
            foreach ($lower_phrase as $word) {
                if ($word == $lower_word) {
                    array_push($word_array, $word);
                }

            }
            return $word_array;
        }







    }



 ?>
