<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%s", $text); // reads number from STDIN
    $main = strtolower($text);
    $reversed = strrev($main);

    if ($main == $reversed) {
        $case[] = 'Yes';
    } else {
        $case[] = 'No';
    }
}

foreach ($case as $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
