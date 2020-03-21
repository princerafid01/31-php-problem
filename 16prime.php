<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

function isPrime($num)
{
    if ($num < 2) { // 0 or 1
        return false;
    }
    for ($i = 2; $i <= $num / 2; $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }
    return true;
}

fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i=0; $i<$testcase; $i++) {
    // $number = readline();
    fscanf(STDIN, "%d", $number); // reads number from STDIN

    if (isPrime($number)) {
        echo 'Yes'.PHP_EOL;
    } else {
        echo 'No'.PHP_EOL;
    }
}

    // foreach ($case as $value) {
    //     fprintf(STDOUT, $value.PHP_EOL);
    // }
