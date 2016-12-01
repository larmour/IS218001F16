<?php

class curl {
public $page;

function httpGetException($object)
{ 
   $ch = curl_init();

curl_setopt($ch,CURLOPT_URL, $object);
curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);

   $output = curl_exec($ch);

   if($output == false)
   {
      echo "Error Number:".curl_errno($ch)."<br>";
      echo "Echo String:".curl_error($ch);

   }
   curl_close($ch);
   return $output;
}
function httpPost($url,$params)
{ 
   $postData = '';
   // create name value pairs seperated by the & symbol
   foreach($params as $k => $x)
   { 
     $postData .= $k . '='.$x.'&';
   }
   $postData = rtrim($postData, '&');

   $ch = curl_init();

   curl_setopt($ch,CURLOPT_URL,$url);
   curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
   curl_setopt($ch,CURLOPT_HEADER, false);
   curl_setopt($ch, CURLOPT_POST, count($postData));
   curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);

   $output = curl_exec($ch);

   if($output == false)
   {
      echo "Error Number:".curl_errno($ch)."<br>";
      echo "Error String:".curl_error($ch);
   }

   curl_close($ch);
   return($output);
 }
}

 $page = new curl;
 $url = "http://hayageek.com/examples/php/curl-examples.post.php";

 $page->httpGetException($url);

 $page1 = new curl;
 $params = array( 
    "name" => "Lindsey Armour",
    "age" => "21",
    "school" => "NJIT"
 );

 echo $page1->httpPost($url,$params);

?>
