<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%d", $number); // reads number from STDIN
    $root = sqrt($number);
    if (strpos($root, '.') === false) {
        $case[] = 'Yes';
    } else {
        $case[] = 'No';
    }
}

foreach ($case as $key => $value) {
    fprintf(STDOUT, 'Case ');
    fprintf(STDOUT, $key+1);
    fprintf(STDOUT, ": ");
    fprintf(STDOUT, $value.PHP_EOL);
}
