<?php

$app->get('/', function () use ($app) {
    $app->render('home.twig');
})->name('home');

$app->get('/flash', function () use ($app) {
    $app->flash('global', 'page.twig wrong');
    $app->response->redirect($app->useName('home'));
});
