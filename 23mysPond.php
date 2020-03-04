<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
fscanf(STDIN, "%d", $persons); // reads number from STDIN
$case = [];
$count =0;
for ($i = 0; $i<$testcase; $i++) {
    for ($j =0; $j<$persons; $j++) {
        fscanf(STDIN, "%s %d", $fn, $fm); // reads number from STDIN
        $case[$count][$fn] = $fm;
    }
    $count++;
}
foreach ($case as $key => $num) {
    echo  array_search(max($num), $num). ' '; //finds the maximum number in an array
    echo array_search(min($num), $num); //finds the minimum number in an array
    echo PHP_EOL; //  new line
}
