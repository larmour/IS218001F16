<?php
  //call_user_func_array: call a callback with an array of parameters
  function foobar($name, $UCID) {
     echo _FUNCTION_, " My name is $name and my UCID is $UCID\n";
  }
  class foo {
     function bar($name, $UCID) {
        echo _METHOD_, " got $name and $UCID\n"
     }
  }
  
  //call the foobar()n function with 2 arguments
  call_user_func_array('foobar' , array("Lindsey Armour", "la95"));
  
  
  //call the $foo->bar() mehod with 2 arguments
  $foo = new foo;
  call_user_func_array(array($foo, "bar"), array( "Jace Davis", "jnd3"));
  
?>