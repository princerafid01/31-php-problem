<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    // fscanf(STDIN, "%d", $number); // reads number from STDIN
    $number  = readline();
    $root = sqrt($number);
    if ($number === 0) {
        echo 'Case '. ($i+1) .': NO'."\n";
    } elseif (strpos($root, '.') === false) {
        echo 'Case '. ($i+1) .': YES'."\n";
    } else {
        echo 'Case '. ($i+1) .': NO'."\n";
    }
}

// foreach ($case as $key => $value) {
//     fprintf(STDOUT, 'Case ');
//     fprintf(STDOUT, $key+1);
//     fprintf(STDOUT, ": ");
//     fprintf(STDOUT, $value.PHP_EOL);
// }
