<?php

$app->get('/page', function() use ($app) {
    //var_dump($app->request->getPath());
    $cur = $app->router()->getCurrentRoute()->getName();
    $app->render('page.twig', ['cur' => $cur]);
})->name('page');

