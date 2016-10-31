<?php
//* $GLOBALS is used to acess global variables from anywhere in the PHPscript, PHP stores all global
//variables in an array called $GLOBALS[index] variables names are returned as keys in the array

function test() {
  $foo = "local variable";

  echo '$foo in global scope: ' . $GLOBALS["foo"] ."\n";
  echo '<br>';
  echo '$foo in current scope: ' . $foo . "\n";
}

$foo = "Example content";
test();

echo '<br>';
//* $_SERVER is a PHP super global variable which holds information
//about headers, paths and script locations. The entries in this array
// are created by the web server
echo '<br> $_SERVER['SERVER_NAME'];
echo '<br>';
echo 'Host name: ' . $_SERVER['REMOTE_HOST'];
echo '<br>';
echo 'Timestamp: ' . $_SERVER['REQUEST_TIME'];

echo '<br>';
//$_GET can be used to collect form data after submitting an HTML form and can also collect data sent in the URL

echo '<br>$_GET: In this example, click this <a href="' . $_SERVER['PHP_SELF'] . '?myname=Lindsey">link</a>';
echo '<br>Hey ' . htmlspeacialchars($_GET["myname"] . '!!';

echo '<br>';
//$_POST is a PHP superglobal that is used to collect form-data, an array of all the variable
//that were passed into the current php script through the HTTP post method which are encoded
//inside the HTTP
echo '<br>$_POST: Hey ' . htmlspecialchars($_POST["myanme']) . '!!';
echo 'This code will not run because ther is no post variables being sent.';
echo '<br>';

//$_FILES is an associated array of items uploaded to the current script via HTTP post method 
echo '<br>$_FILES<br>';
echo '<br>' . print_r($_FILES);
echo '<br>This is empty due to not having any files being passed into the php file.';

?>