<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    // input row and column
    fscanf(STDIN, "%d %d", $row, $column);
    for ($j =0; $j<$row; $j++) {
        $console_row[$i][] = readline();
    }
}

// foreach ($console_row as $a) {
//     foreach ($a as $key => $value) {
//         if (substr_count($value, '$') > 1) {
//             $arr_spilt = str_split($value);
//             foreach ($arr_spilt as $index => $word) {
//                 if ($word === '$') {
//                     $case[$key + 1][] = $index + 1;
//                 }
//             }
//         } elseif (strpos($value, '$')) {
//             $case[$key + 1][] = strpos($value, '$') + 1;
//         } else {
//             $case[$key + 1][] = 0;
//         }
//     }
// }



foreach ($console_row as $a) {
    foreach ($a as $key => $value) {
        if (substr_count($value, '$') > 1) {
            $arr_spilt = str_split($value);
            foreach ($arr_spilt as $index => $word) {
                if ($word === "$") {
                    $case[$key + 1][] = $index + 1;
                }
            }
        } elseif (strpos($value, '$')) {
            $case[$key + 1][] = strpos($value, '$') + 1;
        }
        // if (substr_count($value, '$') === 0) {
        // $case[$key + 1][] = 0;
        // $case[$key + 1] = 'No Gold Found';
        // }
    }
}

// print_r($case);
// foreach ($case as $key => $value) {
    // foreach ($value as $a => $b) {
        // fprintf(STDOUT, 'Case ');
        // fprintf(STDOUT, $a+1);
        // fprintf(STDOUT, ": ".PHP_EOL);
        // if ($b === 0) {
            // fprintf(STDOUT, 'No Gold Found'.PHP_EOL);
        // } else {
            // fprintf(STDOUT, $b . ' , '.$key.PHP_EOL);
        // }
    // }
// }
$counting = 0;
foreach ($case as $val => $a) {
    $counting++;
    echo 'Case '.$counting.': '.PHP_EOL;
    foreach ($a as $key => $b) {
        echo $val.' '.$b;
        echo PHP_EOL;
    }
}
