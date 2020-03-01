<?php
// $stdin = fopen('php://stdin', 'r');
// $stdout = fopen('php://stdout', 'w');

// $line = fgets(STDIN); // reads one line from STDIN

// fscanf(STDIN, "%d %d", $time_to_finish, $members); // reads times and memeber number from STDIN
// fscanf(STDIN, "%d", $time_to_finish, $members); // reads number from STDIN
$input = readline();
$arr = explode(' ', $input);
$finished_hour = $arr[0];
$members = $arr[1];
$work =0;

for ($i =0; $i<$members; $i++) {
    $input = readline();
    $work += $input;
}
$math_result = ceil($finished_hour/$work);
$result = 'Project will finish within ' . $math_result ;
$result .= ($math_result === 1) ? ' day. ':' days. ';
$result .= PHP_EOL;
echo $result;
