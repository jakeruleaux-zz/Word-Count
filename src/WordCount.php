<?php

    class RepeatCounter
    {

        function countRepeats($input)
        {
            $phrase_arr = [];
            $lower_word = strtolower($input);
            return $lower_word;
            $lower_phrase = strtolower($input);
            array_push($phrase_arr, $lower_phrase);
            $phrase_arr = (array_count_values($phrase_arr));
            return $phrase_arr;
        }







    }



 ?>
