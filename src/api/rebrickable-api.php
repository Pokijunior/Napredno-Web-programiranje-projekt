<?php
header('Content-Type: application/json');
$dotenv = parse_ini_file(__DIR__ . '/../.env');
$api_key = $dotenv['REBRICKABLE_API_KEY'];
$cacheTime = 86400;
$url = "https://rebrickable.com/api/v3/lego/sets/?theme_id=601&page_size=60";
$cacheFile = 'cache_' . md5($url) . '.json';

if (file_exists($cacheFile) && (time() - filemtime($cacheFile) < $cacheTime)) {
    echo file_get_contents($cacheFile);
    exit;
}

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    "Authorization: key $api_key",
    "Accept: application/json"
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
curl_close($ch);

if ($httpCode === 200) {
    file_put_contents($cacheFile, $response);
}

echo $response;