<?php
$input = array("red", "green", "blue", "yellow");
array_splice($input, 3, 0, "purple");
print_r($input);
// $input is now array("red", "green",
// "blue", "purple", "yellow");
?>
