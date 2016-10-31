<?php
  
   echo '1. string addslashes(string $str)';
   $str = "Is your last name O'Mcdonald?";
   echo "$str";
   echo addslashes($str);

   
   echo '2. string chr (int $ascii)';
   $str = chr(43);
   $str1 = chr(61);
   echo("5 $str 5 $str1 10");


  
   echo '3. string chunk_split';
   $str = "ASAP";
   echo chunk_split($str,1,".");


   
   echo '4. string count_chars';
   $str = "PHP is alot of work??!";
   $strArray = count_chars($str,1);

   foreach ($strArray as $key=>$value)
     {
     echo "The character <b>' ".chr($key)." '</b> was found $value time(s) <br>";
     }



   // 
   echo '5. string echo';
   echo "This homework assignment";


   //explode() function breaks a string into an array 
   echo '6. string explode';
   $str = "Today is a beautiful day. This world is nice.";
   print_r (explode(" ",$str));


  // htmlentities() function converts characters to HTMLentities similar to htmlspecialchars
  //except all characters which have HTML character entity equivalents are translated into
  //these entities
  echo '7. string htmlentities';
  $str = "A 'quote' is <b>bold</b>";
  echo htmlentities($str);


  //htmlspecialchars_decode function converts some predefined HTML entities to characters
  echo '8. string htmlspecialcars_decode()';
  $str = 'I do not like &quot;PHP&quot;.';
  echo htmlspecialchars_decode($str, ENT_QUOTES); 
 

  //implode() function returns a string from the elements of an array
  echo '9. string implode';
  $arr = array('Hi','my','name','is',' Lindsey',' Armour!');
  echo implode(" ", $arr);


 // md5 function calculates the MD5 hash of a string, uses the RSA data security
 echo '10. string md5';
 $str = "World";
 echo md5($str);


 //rtrim function removes whitespace or other predefined characters from the right side of a
 //string
 echo '11. string rtrim';
 $str = 'Beautiful World!';
 echo "Without rtrim: " . $str;
 echo "<br>";
 echo "With trtim: " . rtrim($str);

 //str_getcsv function parses a string for fields in CSV format and returns an array
 // containing the fields read
 echo '12. string str_getcsv';
 $str_CSV = '"Apple","RED","#D62433"
 "Orange","ORANDE","#FEB635"
 "Banana","YELLOW","#FEE492"
 "Grapes","VIOLET","#B370AD"
 "KIWI","GREEN","#9BA207"
 "Dates","BROWN","#922E2F"';

 $row = str_getcsv($str_CSV, "\n");
 $length = count($row);
 for($i=0;$i<$length;$i++) {
  $data = str_getcsv($row[$i], ",");
   print_r($data);



 //strip_tags function strips a string from HTML, XML, and PHP tags
 echo '13. string strip_tags';
 $text = '<p> This is a paragraph text.</p><!-- Comment --><a href="fragment">Other text
 provided</a>';
 echo strip_tags($text);


 //strpos function finds the position of the first occurrence of a string inside another
 // string(not case-sensitive)
 echo '14. string strpos';
 $numberedString= "0,1,2,3,4,5,6,7,8,9";
 $fivePos = strpos($numberedString,"5");
 echo "The position of 5 in the string is $fivePos";



 //strleng function returns the length of the given string
 echo '15. string strlen';
 $str =' abcd efg hijk ';
 echo strlen($str);
?>
