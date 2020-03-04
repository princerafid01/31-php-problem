<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%d %d", $a, $b); // reads number from STDIN
    $case[] = floor(($a+$b) / 2);
}

foreach ($case as $key => $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
