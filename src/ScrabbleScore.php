<?php

    class ScrabbleScore
    {

        function scrabble_score_calculator($input)
        {
            $input_uc = strtoupper($input);
            $one_point = array ('A', 'E', 'I', 'O', 'U', 'L', 'N', 'R', 'S', 'T');
            $two_point = array ('D', 'G');
            $split_input = str_split($input_uc);
            $number = array();
            foreach ($split_input as $letter_input) {

                foreach ($one_point as $letter) {
                    if ($letter_input == $letter) {
                        $letter_input = 1;
                        array_push($number, $letter_input);
                    }
                }
            }
            $output = array_sum($number);
            return $output;
        }

    }

?>