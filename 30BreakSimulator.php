<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%f %f", $velocity, $stops);
    $velocity = floatval($velocity);
    $stops = floatval($stops);
    // $case[] = floatval(-1 * ($velocity / $stops));
    $case[] = number_format((float) -1 * ($velocity / $stops), 2, '.', '');
}

foreach ($case as $key => $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
