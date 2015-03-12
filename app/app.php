<?php

    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/ScrabbleScore.php";

    $app = new Silex\Application();

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__."/../views"
    ));

    $app->get('/', function() use ($app) {
        return $app['twig']->render('form.twig');
    });

    $app->get('/score', function() use ($app) {
        $scrabble_word_score = new ScrabbleScore;
        $score = $scrabble_word_score->scrabble_score_calculator($_GET['word']);

        return $app['twig']->render('score.twig', array('result' => $score, 'input' => $_GET['word']));
    });

    return $app;

?>
