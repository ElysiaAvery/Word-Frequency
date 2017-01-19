<?php
  date_default_timezone_set('America/Los_Angeles');
  require_once __DIR__."/../vendor/autoload.php";
  require_once __DIR__."/../src/WordFrequency.php";

  $app = new Silex\Application();

  $app->register(new Silex\Provider\TwigServiceProvider(), array(
    'twig.path' => __DIR__.'/../views'
  ));

  $app->get("/", function() use ($app) {
    return $app['twig']->render('words.html.twig');
  });

  $app->get("/word_check", function() use($app) {
    $my_WordFrequency = new WordFrequency;
    $user_sentence = $_GET['sentence'];
    $user_word = $_GET['word'];
    if(!isset($user_sentence) || trim($user_sentence) == "" || !isset($user_word) || trim($user_word) == "") {
      var_dump("You have not entered information in all the fields!");
      return $app['twig']->render('words.html.twig');
    }
    $word_count = $my_WordFrequency->checkWordFrequency($_GET['sentence'], $_GET['word']);
    return $app['twig']->render('word_count.html.twig', array('result' => $word_count));
  });

  return $app;
?>
