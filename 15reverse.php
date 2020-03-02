<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    $text = readline(); // reads number from STDIN
    $arr = str_split($text);
    $arr_r = array_reverse($arr);
    $case[] = implode('', $arr_r);
}

foreach ($case as $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
