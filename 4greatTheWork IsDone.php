<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$input = readline();
$arr = explode(' ', $input);
$finished_hour = $arr[0];
$members = $arr[1];
$work =0;
$case=[];

// $input =  file_get_contents("php://stdin");
$work=0;


function run()
{
    global $members;
    global $work;
    $fp = fopen('php://stdin', 'r');
    if (!feof($fp)) {
        for ($i =0; $i<$members; $i++) {
            $input = readline();
            $work += (int)$input;
        }
        $case[] = $work;
    }
    run();
}

run();
echo 'EOF!';

// if ($input == false) {
    // exit(0);
// } else {
    // $work += $input;
// }

// print_r($input);
// $math_result = ceil($finished_hour/$work);
// $result = 'Project will finish within ' . $math_result ;
// $result .= ((int)$math_result === 1) ? ' day.':' days.';
// echo $result."\n";
//
