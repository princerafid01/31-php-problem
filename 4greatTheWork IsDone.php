<?php
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
