<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
$count =0;
for ($i =0; $i<$testcase; $i++) {
    $count++;
    fscanf(STDIN, "%d %d %d %d %d", $cx, $cy, $r, $px, $py); // reads number from STDIN
    $cx = abs($cx);
    $cy = abs($cy);
    $px = abs($px);
    $py = abs($py);
    $calc = sqrt(($px - $cx)**2 + ($py - $cy) **2);
    if ($calc > $r) {
        $case[] = 'Case '. $count .': Outside';
    } elseif ($calc < $r) {
        $case[] = 'Case '. $count .': Inside';
    } else {
        $case[] = 'Case '. $count .': OnCircle';
    }
}

foreach ($case as $key => $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
