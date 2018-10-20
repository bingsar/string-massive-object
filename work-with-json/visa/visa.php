<?php
$csvName = 'data.csv';
$handle = fopen($csvName, 'r');
$csv = array_map('str_getcsv', file($csvName));
print_r($csv);
$shortest = -1;
if (isset($argv[1])) {
    $input = $argv[1];
    foreach ($csv as $word) {
        $lev = levenshtein($input, $word[1]);
        if ($lev == 0) {
            $closest = $word[1];
            $shortest = 0;
            break;
        }
        if ($lev <= $shortest || $shortest < 0) {
            $closest = $word[1];
            $shortest = $lev;
        }
    }
    echo $closest . ': ' . $word[4];
}
//if ($shortest == 0) {
//        if ($word[1] == $argv[1]) {
//
//        }
//
// else {
//    echo 'Please type right country name';
//}