<?php

    require_once 'src/ScrabbleScore.php';

    class ScrabbleScoreTest extends PHPUnit_Framework_TestCase
    {

    function test_singleLetter()
    {
        //arrange
        $test_scrabble = new ScrabbleScore;
        $input = 'A';

        //act
        $result = $test_scrabble->scrabble_score_calculator($input);

        //assert
        $this->assertEquals('1', $result);
    }




    }

?>
