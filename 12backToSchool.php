<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
$count =0;
for ($i =0; $i<$testcase; $i++) {
    $count++;
    fscanf(STDIN, "%d %d %f %d %d", $cx, $cy, $r, $px, $py); // reads number from STDIN
    $calc = sqrt(($px - $cx)**2 + ($py - $cy) **2);
    if ($calc > $r) {
        echo  'Case '. $count .': Outside' . "\n";
    } elseif ($calc < $r) {
        echo  'Case '. $count .': Inside' . "\n";
    } else {
        echo  'Case '. $count .': OnCircle' . "\n";
    }
}

// foreach ($case as $key => $value) {
//     fprintf(STDOUT, $value.PHP_EOL);
// }
