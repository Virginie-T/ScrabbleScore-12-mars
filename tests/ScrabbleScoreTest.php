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
            $this->assertEquals(1, $result);
        }

        function test_duplicateSingleLetter()
        {
            //arrange
            $test_scrabble = new ScrabbleScore;
            $input = 'AA';

            //act
            $result = $test_scrabble->scrabble_score_calculator($input);

            //assert
            $this->assertEquals(2, $result);

        }

        function test_duplicateSingleLetterCaseInsensitive()
        {
            //arrange
            $test_scrabble = new ScrabbleScore;
            $input = 'Aa';

            //act
            $result = $test_scrabble->scrabble_score_calculator($input);

            //assert
            $this->assertEquals(2, $result);
        }

        function test_differentLettersSameValue()
        {
            //arrange
            $test_scrabble = new ScrabbleScore;
            $input = 'AE';

            //act
            $result = $test_scrabble->scrabble_score_calculator($input);

            //assert
            $this->assertEquals(2, $result);

        }

        function test_differentLettersDifferentValue()
        {
            //arrange
            $test_scrabble = new ScrabbleScore;
            $input = 'AD';

            //act
            $result = $test_scrabble->scrabble_score_calculator($input);

            //assert
            $this->assertEquals(3, $result);

        }

        function test_multiLetterAndDuplicate()
        {
            //arrange
            $test_scrabble = new ScrabbleScore;
            $input = 'ADD';

            //act
            $result = $test_scrabble->scrabble_score_calculator($input);

            //assert
            $this->assertEquals(5, $result);

        }

        function test_multiLetterMultiValues()
        {
            //arrange
            $test_scrabble = new ScrabbleScore;
            $input = 'ADB';

            //act
            $result = $test_scrabble->scrabble_score_calculator($input);

            //assert
            $this->assertEquals(6, $result);
        }

        function test_fourPointMethod()
        {
            //arrange
            $test_scrabble = new ScrabbleScore;
            $input = 'ADBF';

            //act
            $result = $test_scrabble->scrabble_score_calculator($input);

            //assert
            $this->assertEquals(10, $result);
        }

        function test_fivePointMethod()
        {
            //arrange
            $test_scrabble = new ScrabbleScore;
            $input = 'ADBFK';

            //act
            $result = $test_scrabble->scrabble_score_calculator($input);

            //assert
            $this->assertEquals(15, $result);
        }



    }

?>
