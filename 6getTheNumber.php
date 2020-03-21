<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$on = [];
$sn = [];
//take input
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%d", $amount);
    for ($j =0; $j<$amount; $j++) {
        fscanf(STDIN, "%s", $orginal_number);
        $on[$i][$j] = $orginal_number;
    }

    for ($k =0; $k<$amount; $k++) {
        fscanf(STDIN, "%s", $starred_number);
        $sn[$i][$k] = explode(',', $starred_number);
    }
    echo PHP_EOL;
}

// foreach ($case as $key => $value) {
    // fprintf(STDOUT, $value.PHP_EOL);
// }
print_r($on);
echo PHP_EOL;
print_r($sn);
