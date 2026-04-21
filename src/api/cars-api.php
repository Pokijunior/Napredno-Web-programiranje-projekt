<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$xml = simplexml_load_file('../cars.xml');

$cars = [];
foreach ($xml->car as $car) {
    $cars[] = [
        'id'    => (int)$car->id,
        'name'  => (string)$car->name,
        'image' => (string)$car->image,
        'alt'   => (string)$car->alt
    ];
}

echo json_encode($cars);
?>