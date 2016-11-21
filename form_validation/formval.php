<?php

class sanitize { 
  public function sanitizeEmail($fieldname) {
    if(isset($_POST[$fieldname])) {
      return filter_var($_POST[$fieldname], FILTER_SANITIZE_EMAIL);
    }
  }
}
class validate {
  public function validateEmail($fieldname) {
    $email = filter_var($_POST[$fieldname], FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return TRUE;
    } else {
      return FALSE ;
    }
   }
}
//Sanitize the examples
$sanitize = new sanitize();
echo $sanitize->sanitizeEmail('email');


//validate the examples
$validate = new validate();
echo '<br>';
if($validate->validateEmail('email')) {
  echo 'This email is valid';
}

?>
