<?php
  //is_a():Checks if the object is of this class or has this class as one of its parents
  // define a class
  class WidgetFactory
  {
    var $oink = 'moo';
  }

  // create a new object
  $WF = new WidgetFactory();

  if (is_a($WF, 'WidgetFactory')) {
    echo "yes, \$WF is still a WidgetFactory\n";
  }

?>
