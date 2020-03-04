<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    $count=0;
    fscanf(STDIN, "%d", $a); // reads number from STDIN
    for ($j=0; $j <= $a ; $j++) {
        $count += $j;
    }
    $case[] = $count;
}

foreach ($case as $key => $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
