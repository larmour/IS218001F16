<?php

class sanitize { 
  public function sanitizeEmail($fieldname) {
    if(isset($_POST[$fieldname])) {
      return filter_var($_POST[$fieldname], FILTER_SANITIZE_EMAIL);
    }
  }
  public function sanPassword($fieldname) {
    if(isset($_POST[$fieldname])) {
       return filter_var($_POST[$fieldname], FILTER_SANITIZE_PASSWORD);
    }
  }
  public function sanURL($fieldname) {
    if(isset($_POST[$fieldname])) {
      return filter_var($_POST[$fieldname], FILTER_SANITIZE_URL);
    }
  }
}
class validate {
  public function valEmail($fieldname) {
    $email = filter_vat($_POST[$fieldname], FILTER_SANITIZE_EMAIL);
    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
      return TRUE;
    } else {
      return FALSE ;
    }
   }
   public function valPassword($fieldname) {
     $password = filter_var($_POST[$fieldname], FILTER_SANITIZE_PASSWORD);
     if(filter_var($password, FILTER_VALIDATE_PASSWORD)) {
       return TRUE;
     } else {
       return FALSE;
     }
  }
  public function valURL($fieldname) {
    $url = filter_var($_POST[$fieldname], FILTER_SANTIZE_URL);
    if(filter_var($email, FILTER_VALIDATE_URL)) {
      return TRUE;
    } else {
      return FALSE;
    }
  }
}
//Sanitize the examples
$san = new sanitize();
echo $san->sanEmail('email');
echo '<br>';
echo $san->sanURL('url');

//validate the examples
$val = new validate();
echo '<br>';
if($val->valEmail('email')) {
  echo 'This email is valid';
}
echo '<br>';
if($val->valPassword('password')) {
  echo 'This password is valid';
}
echo '<br>';
if($val->valURL('URL')) {
  echo 'This URL is valid';
}
?>
