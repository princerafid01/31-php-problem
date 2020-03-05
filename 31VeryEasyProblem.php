<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%s", $string);
    if (substr_count($string, 'r') > 0) {
        $case[] = 'Not vely easy';
    } else {
        $case[] = 'Vely easy';
    }
}

foreach ($case as $key => $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
