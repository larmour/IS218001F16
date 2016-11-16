<?php
$array = array(0 => 'blue', 1 => 'red', 2 => 'green', 3 => 'red');

$key = array_search('green', $array); // $key = 2;
$key1 = array_search('red', $array);   // $key = 1;
print_r($key);
echo '<br>';
print_r($key1);
?>
