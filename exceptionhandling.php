<?php

echo "Exception Handling \n";
 
class FileExistException extends Exception{}
class FileReadException extends Exception{}
class FileWriteException extends Exception{}

$csvfilename = 'abd.csv';
try{
  try{
    $data = file_get_contents($csvfilename);
    if($data === false){
      throw new Exception();
    }
  }
  catch(Exception $e){
    if(!file_exists($csvfilename)){
      throw new FileExistException($csvfilename." does not exist \n");
    }
    elseif(!is_readable($csvfilename)){
      throw new FileReadException($csvfilename." is not readable \n");
    }
    elseif(!is_writable($filename)){
      throw new FileWriteException($csvfilename." is not writable \n");
    }
    else{
      throw new Exception("Unknown error accessing file.");
    }
  }
}  
catch(FileExistException $fee){
  echo $fee->getMessage();
  error_log($fee->getTraceAsString());
}
catch(FileReadException $fre){
  echo $fre->getMessage();
  error_log($fre->getTraceAsString());
}
catch(FileWriteException $fwe){
  echo $fwe->getMessage();
  error_log($fwe->getTraceAsString());
}
?>