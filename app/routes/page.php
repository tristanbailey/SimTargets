<?php

$app->get('/page', function () use ($app) {
    $app->render('page.twig');
})->name('page');
