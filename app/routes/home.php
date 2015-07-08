<?php

$app->get('/', function() use ($app) {
    $cur = $app->router()->getCurrentRoute()->getName();
    $app->render('home.twig', ['cur' => $cur]);
})->name('home');


$app->get('/flash', function() use ($app) {
    $app->flash('global', 'page.twig wrong');
    $app->response->redirect($app->useName('home'));
});


