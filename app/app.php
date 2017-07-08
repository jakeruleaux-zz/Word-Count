<?php
    date_default_timezone_set("America/Los_Angeles");
    require_once __DIR__."/../vendor/autoload.php";
    require_once __DIR__."/../src/RepeatCounter.php";

    use Symfony\Component\Debug\Debug;
Debug::enable();

    $app = new Silex\Application();

    $app['debug'] = true;

    $app->register(new Silex\Provider\TwigServiceProvider(), array(
        'twig.path' => __DIR__.'/../views'
    ));

    $app->get("/", function() use ($app) {
          return $app['twig']->render('form.html.twig');
      });

      $app->get("/count", function() use ($app) {
          $final_count = new RepeatCounter;
          $the_outcome = $final_count->countRepeats($_GET['input_phrase'], $_GET['input_word']);
          return $app['twig']->render('count.html.twig', array('result' => $the_outcome));
      });



    return $app;
?>
