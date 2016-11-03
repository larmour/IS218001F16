<?php
  //get_obj_vars: Gets the properties of the given object
 
class fruit {
    private $apples;
    public $bannas = 1;
    public $carrots;
    private $oranges;
    static $grapes;
   
    public function test() {
        var_dump(get_object_vars($this));
    }
}

$test = new fruit;
var_dump(get_object_vars($test));

$test->test();

?>
 