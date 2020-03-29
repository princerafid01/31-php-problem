<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%d %d %d %d", $x1, $y1, $x2, $y2); // reads number from STDIN
    $count =0;
    if ($x1 > $x2) {
        $big1 = $x1;
        $small1 = $x2;
    } else {
        $big1 = $x2;
        $small1 = $x1;
    }
    if ($y1 > $y2) {
        $big2 = $y1;
        $small2 = $y2;
    } else {
        $big2 = $y2;
        $small2 = $y1;
    }
    for ($j=$small1; $j < $big1; $j++) {
        $count++;
    }
    for ($j=$small2; $j < $big2; $j++) {
        $count++;
    }

    // $case[] = $count;
    fprintf(STDOUT, 'Case ');
    fprintf(STDOUT, $i+1);
    fprintf(STDOUT, ": ");
    fprintf(STDOUT, $count.PHP_EOL);
}

// foreach ($case as $key => $value) {
//     fprintf(STDOUT, 'Case ');
//     fprintf(STDOUT, $key+1);
//     fprintf(STDOUT, ": ");
//     fprintf(STDOUT, $value.PHP_EOL);
// }
