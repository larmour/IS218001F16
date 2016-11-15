<?php
//array_diff computes the difference of arrays

$array0 = array("lindsey" => "pink" , "green", "yellow", "purple");
$array1 = array("jace" => "blue", "green", "purple");
$result = array_diff($array0, $array1);

print_r($result);
?>

