<?php
$input = $argv[1];
$geld = array(50,20,10,5,2,1);

foreach ($geld as $value) {
    $rest = floor($input/$value);
    $input = $input - ($value * $rest);
    echo $rest . " x " . $value . " Euro" ."\n";

}
?>