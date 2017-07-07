<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";
    $app = new Silex\Application();
    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
          return $app['twig']->render('form.html.twig');
      });

      $app->get("/count", function() use ($app){
          $final_count = new RepeatCounter;
          $the_outcome = $final_count->countRepeats($_GET['input_phrase'], ['input_word']);
          return $app['twig']->render('score.html.twig', array('result' => $the_outcome));
      });



    return $app;
?>
