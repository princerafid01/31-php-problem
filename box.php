<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$number = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%d %d %d", $a, $b, $c); // reads number from STDIN
    $number[] = $a;
}
foreach ($number as $key => $value) {
    $result = round(sqrt(3) * $value, 2);
    fprintf(STDOUT, $result.PHP_EOL);
}
