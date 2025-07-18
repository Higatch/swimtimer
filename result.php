<?php
header('Content-Type: text/plain; charset=UTF-8');

// 受け取った POST データ（JSON 文字列）を取得
$json = $_POST['data'] ?? '';
$data = json_decode($json, true);

if (!$data) {
    echo "No lap data received." . PHP_EOL;
    exit;
}

/*
  $data は [
    {"lane":1, "swimmer":"たろう", "lap":"28.3"},
    ...
  ] の配列
*/

// ── 選手ごとにラップをまとめる ─────────────────────
$summary = [];               // ["Lane1:たろう" => [28.3, 29.1, ...]]
foreach ($data as $row) {
    $key = sprintf('Lane %d - %s', $row['lane'], $row['swimmer']);
    $lap = floatval($row['lap']);
    $summary[$key][] = $lap;
}

// ── 出力 ────────────────────────────────────────────
foreach ($summary as $swimmer => $laps) {
    echo $swimmer . PHP_EOL;
    foreach ($laps as $i => $time) {
        printf("  #%d: %.1f s" . PHP_EOL, $i + 1, $time);
    }
    $avg = array_sum($laps) / count($laps);
    printf("  Avg: %.2f s" . PHP_EOL . PHP_EOL, $avg);
}
?>
