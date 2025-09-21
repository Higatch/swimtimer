<?php
header('Content-Type: text/plain; charset=UTF-8');

$json = $_POST['data'] ?? '';
$data = json_decode($json, true);

if (!$data) {
    echo "No lap data received." . PHP_EOL;
    exit;
}
$summary = [];
foreach ($data as $row) {
    $key = sprintf('Lane %d - %s', $row['lane'], $row['swimmer']);
    $lap = floatval($row['lap']);
    $summary[$key][] = $lap;
}

foreach ($summary as $swimmer => $laps) {
    echo $swimmer . PHP_EOL;
    foreach ($laps as $i => $time) {
        printf("  #%d: %.1f s" . PHP_EOL, $i + 1, $time);
    }
    $avg = array_sum($laps) / count($laps);
    printf("  Avg: %.2f s" . PHP_EOL . PHP_EOL, $avg);
}
?>

