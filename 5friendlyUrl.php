<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%d", $maximum);
    $url= readline();
    //lower case  all letter
    $url = substr($url, 0, $maximum);
    $sanitized_url = trim(preg_replace('/[^a-z0-9]+/', '-', strtolower($url)), '-');

    $case[] = $sanitized_url;
}

foreach ($case as $key => $value) {
    fprintf(STDOUT, $value.PHP_EOL);
}
