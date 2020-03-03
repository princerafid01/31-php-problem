<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN

$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%s", $string);  // %s for string, %lf for double, %f float
    $strings = str_split($string);
    sort($strings);
    foreach ($strings as $string) {
        if (!isset($case[$i][$string])) {
            $case[$i][$string] = 1;
        } else {
            $case[$i][$string]++;
        }
    }
}
foreach ($case as $key => $value) {
    fprintf(STDOUT, 'Case ');
    fprintf(STDOUT, $key+1 .PHP_EOL);
    fprintf(STDOUT, ':' .PHP_EOL);
    foreach ($value as $alpha => $times) {
        fprintf(STDOUT, $alpha. ' '. $times.PHP_EOL);
    }
}
