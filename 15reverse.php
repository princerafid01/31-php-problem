<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
for ($i =0; $i<$testcase; $i++) {
    $text = readline();


    $arr = str_split($text);
    $arr_r = array_reverse($arr);
    echo implode('', $arr_r). "\n";
}

// foreach ($case as $value) {
//     fprintf(STDOUT, $value.PHP_EOL);
// }
