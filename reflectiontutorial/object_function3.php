<?php
  //property_exists — Checks if the object or class has a property
  class myClass {
    public $homework;
    private $quiz;
    static protected $test;

    static function test() {
        var_dump(property_exists('myClass', 'quiz')); //true
    }
}

var_dump(property_exists('myClass', 'homework'));   //true
var_dump(property_exists(new myClass, 'homework')); //true
var_dump(property_exists('myClass', 'quiz'));   //true
var_dump(property_exists('myClass', 'readings'));    //false
var_dump(property_exists('myClass', 'test'));   //true
myClass::test();

?>