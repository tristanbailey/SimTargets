<?php

// charts demo with lavacharts > google charts
//

use \Khill\Lavacharts\Lavacharts;

$app->get('/chart', function () use ($app) {

    // set up
    $lava = new Lavacharts();
    $stocksTable = $lava->DataTable();

    $stocksTable->addDateColumn('Day of Month')
                ->addNumberColumn('Projected')
                ->addNumberColumn('Official');

    // Random Data For Example
    for ($a = 1; $a < 30; $a++) {
        $rowData = [
          "2014-8-$a", rand(800, 1000), rand(800, 1000),
        ];

        $stocksTable->addRow($rowData);
    }

    // give chart a name and type
    $chart = $lava->LineChart('myFancyChart');

    // give chart the data
    $chart->datatable($stocksTable);

    // Example #1, output into a div you already created
    // <div id="myStocks"></div>
    $chart = $lava->render('LineChart', 'myFancyChart', 'myStocks');

    // not seem to add the js includes >> >>
    //
    // Example #2, have the library create the div
    $chart2 = $lava->render('LineChart', 'myFancyChart', 'myStocks2', true);

    // Example #3, have the library create the div with a fixed size
    $chart3 = $lava->render('LineChart', 'myFancyChart', 'myStocks3', ['height' => 300, 'width' => 600]);

    $app->render('chart.twig', [
        'chart'  => $chart,
        'chart2' => $chart2,
        'chart3' => $chart3,
        ]);

})->name('chart');
