<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN


function commonString($first, $second)
{
    $len1 = strlen($first);
    $len2 = strlen($second);

    if ($len1 < $len2) {
        $shortest = $first;
        $longest = $second;
        $len_shortest = $len1;
    } else {
        $shortest = $second;
        $longest = $first;
        $len_shortest = $len2;
    }

    //check max len
    $pos = strpos($longest, $shortest);
    if ($pos !== false) {
        return $shortest;
    }

    for ($i = 1, $j = $len_shortest - 1; $j > 0; --$j, ++$i) {
        for ($k = 0; $k <= $i; ++$k) {
            $substr = substr($shortest, $k, $j);
            $pos = strpos($longest, $substr);
            if ($pos !== false) {
                return $substr;
            }
        }
    }

    return "";
}


for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%s %s", $one, $two);  // %s for string, %lf for double, %f float
    $case[] = 'Case X: ' . strlen(commonString($one, $two));
}

foreach ($case as $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
