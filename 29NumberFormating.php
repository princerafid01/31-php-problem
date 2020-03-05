<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%s", $numbers);
    if (substr($numbers, 0, 2) === '88') {
        $numbers = $numbers;
    } else {
        $numbers = '88' .  $numbers;
    }
    $operator_given = substr($numbers, 2, 3);
    switch ($operator_given) {
        case '011':
        $case[] = $numbers .' Citycell';
        break;

        case '015':
        $case[] = $numbers .' Teletalk';
        break;

        case '016':
        $case[] = $numbers .' Airtel';
        break;

        case '017':
        $case[] = $numbers .' Grameenphone';
        break;

        case '018':
        $case[] = $numbers .' Robi';
        break;


        default:
        $case[] = $numbers .' Banglalink';
        break;
    }
}

foreach ($case as $key => $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
