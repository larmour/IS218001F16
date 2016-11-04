<?php
//*isset, empty, null, switch and if statements
//isset used to check whether a variable is set or not, returns false if testing variable contains a null value
//empty used to check whether a variable is empty or not. considered empty if it does not exist or if its value equals false

//switch statement can check for multiple values if no matching label is found, the program
//looks for the optional default clause. Break is necessary to keep code from running

echo "If statements: ";
echo '<br>';
$var1 = true;
echo '<br>';
if(isset($var1)) {
   echo "This variable is empty.";
 }
echo '<br>';
$var2 = " ";
if (empty($var2)) {
   echo "This variable is empty.";
 }
echo '<br>';
$var3 = NULL;
if(is_null($var3)) {
  echo "This variable is null.";
 }
echo '<br>';
$var4;
if(is_null($var4)==true) {
  echo 'Creates a non Null variable.';
 }
echo '<br>';
echo 'Switch statements: ';
echo '<br>';
function checkvar($var) {
  $info = 'This variable is ';
  }
  if(isset($info) == true){  
    echo 'This variable is set';
    echo '<br>';
  }
  else{
    echo 'This variable is not set, please set your variables';
    echo '<br>';
  }
  if(empty($info)== false){
    echo 'This variable is full';
    echo '<br>';
  }
  else{
     echo 'This variable is empty';
     echo '<br>';
  }
  if(is_null($info) == true) {
     echo 'This variable is null';
     echo '<br>';
  }
  else{
    echo 'This variable is not null';
    echo '<br>';
  }
  return $info;
 echo '<br>'; 
 echo checkvar($var1);
 echo '<br>';
 echo checkvar($var2);
 echo '<br>';
 echo checkvar($var3);
 echo '<br>';
 echo checkvar($var4);
 echo '<br>';
 echo 'Switch- case statement: ';
 $interger = 25;
 
 switch($interger) {
   case 1/2:
      echo 'This is not an interger';
      break;
   default: 
      echo 'This number is valid';
      break;
}
?>
