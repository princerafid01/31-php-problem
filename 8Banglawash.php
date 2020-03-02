<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
$status = [];
fscanf(STDIN, "%d", $testcase); // reads number from STDIN

for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%d %d %d %d", $b1, $b2, $p1, $p2);  // %s for string, %lf for double, %f float
    fscanf(STDIN, "%d %d %d %d", $b3, $b4, $p3, $p4);  // %s for string, %lf for double, %f float
    $result_ban_1 = $b1 + $b2;
    $result_pak_1 = $p1 + $p2;
    $result_ban_2 = $b3 + $b4;
    $result_pak_2 = $p3 + $p4;

    if ($result_ban_1 > $result_pak_1 && $result_ban_2 > $result_pak_2) {
        $status[] =  'Banglawash';
    } else {
        $status[] =  'Miss';
    }
}
foreach ($status as $key => $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
