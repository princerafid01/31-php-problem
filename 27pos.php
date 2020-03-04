<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d", $testcase); // reads number from STDIN
$case = [];
for ($i =0; $i<$testcase; $i++) {
    $count =0;
    fscanf(STDIN, "%d", $items); // items purchased
    for ($j=1; $j <= $items ; $j++) {
        fscanf(STDIN, "%f %d", $price, $qty); // reads Price and quantity of each item
        $count += $price * $qty; // counting total price
    }
    fscanf(STDIN, "%d", $given); // reads the amount given by the customer

    $case[] = floor($given - $count);
}

foreach ($case as $key => $value) {
    fprintf(STDOUT, 'Case ');
    fprintf(STDOUT, $key+1);
    fprintf(STDOUT, ": ");
    fprintf(STDOUT, $value.PHP_EOL);
}
