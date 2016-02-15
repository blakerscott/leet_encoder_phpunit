<?php

	require_once __DIR__.'/../vendor/autoload.php';
	require_once __DIR__.'/../src/Leet.php';

	$app = new Silex\Application();

	$app->register(new Silex\Provider\TwigServiceProvider(), array('twig.path' => __DIR__.'/../views'));

	$app->get('/', function() use ($app) {
		return $app['twig']->render("form.html.twig");
	});

	$app->get("/view_translated_word", function() use($app) {
			$my_word = new Leet;
			$translated_word = $my_word->makeLeet($_GET['phrase']);
			return $app['twig']->render('new_word.html.twig', array('result' => $translated_word));
	});

	return $app;

?>
