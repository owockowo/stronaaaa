<?php
header('Content-Type: application/json');
header('Access-Control-Allow-Origin: *');

$file = 'counter.txt';

if (!file_exists($file)) {
    file_put_contents($file, '0');
}

$count = (int)file_get_contents($file);
$count++;
file_put_contents($file, (string)$count);

echo json_encode(['visits' => $count]);
?>
