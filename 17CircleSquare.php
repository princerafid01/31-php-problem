<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
    function twoDecimalePlace($number)
    {
        return number_format(floor($number*100)/100, 2, '.', ''); // don't round the number
    }
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%f %f", $r, $s);  // %s for string, %lf for double, %f float
    $r = abs($r);
    $s = abs($s);
    $diameter = twoDecimalePlace($r *2);
    $diagonal = twoDecimalePlace($s * sqrt(2));
    if ($diameter === $diagonal) {
        $case[] = 'Yes';
    } else {
        $case[] = 'No';
    }
}

foreach ($case as $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
