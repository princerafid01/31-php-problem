<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
// fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$testcase = readline();
for ($i =0; $i<$testcase; $i++) {
    $count=0;
    // fscanf(STDIN, "%d", $a); // reads number from STDIN
    $a = readline();
    for ($j=0; $j <= $a ; $j++) {
        $count += $j;
    }
    echo $count."\n";
}
