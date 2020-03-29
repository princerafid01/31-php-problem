<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    fscanf(STDIN, "%d", $maximum);
    $url= readline();
    //lower case  all letter

    //--I am Rahat from BD
    $data = str_replace("\t", '-', $url);
    $new_url = preg_replace('/[^A-Za-z0-9\-]/', '-', strtolower($data));
    //-i-am-rahat-from-bd
    $new_url = trim(preg_replace('~-{2,}~', '-', $new_url), '-');

    $pro_url =  trim(substr($new_url, 0, $maximum), '-');

    echo $pro_url.PHP_EOL;
}
