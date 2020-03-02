<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

function isPrime($num)
{
    if ($num < 2) {
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
for ($i =0; $i<$testcase; $i++) {
    $number = readline();
    if (isPrime($number)) {
        $case[] = 'Yes';
    } else {
        $case[] = 'No';
    }
}

foreach ($case as $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
