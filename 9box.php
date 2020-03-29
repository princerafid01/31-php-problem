<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$number = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%f %f %f", $ab, $bc, $cd); // reads number from STDIN
    if ($ab == $bc) {
        if ($bc == $cd) {
            echo number_format(sqrt(3) *$ab, 2, '.', '') . "\n";
        } else {
            $ab  = $ab ** 2;
            $bc  = $bc ** 2;
            $cd  = $cd ** 2;
            echo number_format(sqrt($ab + $bc+ $cd), 2, '.', '')  . "\n";
        }
    } else {
        $ab  = $ab ** 2;
        $bc  = $bc ** 2;
        $cd  = $cd ** 2;
        echo number_format(sqrt($ab + $bc+ $cd), 2, '.', '') . "\n";
    }
}
// foreach ($number as $key => $value) {
//     $result = round(sqrt(3) * $value, 2);
//     fprintf(STDOUT, $result.PHP_EOL);
// }
