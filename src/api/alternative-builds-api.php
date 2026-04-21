<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$xml = simplexml_load_file('../alternative-builds.xml');

$builds = [];
foreach ($xml->car as $car) {
    $alternatives = [];
    foreach ($car->alternatives->alt_car as $alt) {
        $alternatives[] = [
            'image' => (string)$alt->image,
            'name'  => (string)$alt->name
        ];
    }

    $builds[] = [
        'main' => [
            'image' => (string)$car->main->image,
            'alt'   => (string)$car->main->alt
        ],
        'alternatives' => $alternatives
    ];
}

echo json_encode($builds);
?>