<?php
  //get_class_methods: get the class methods' names
  class myclass {
    // constructor
    function myclass()
    {
        return(true);
    }

    // method 1
    function myfunc1()
    {
        return(true);
    }

    // method 2
    function myfunc2()
    {
        return(true);
    }
 }

 $class_methods = get_class_methods('myclass');
 
 foreach ($class_methods as $method_name) {
    echo "$method_name\n";
}

?>