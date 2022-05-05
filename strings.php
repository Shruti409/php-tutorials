<?php

echo "<h1>STRINGS IN PHP</h1>";
$str="ShrutiVohra";
echo $str;
echo "<br>";
$len=strlen($str);
//strlen ()  to find the length of the string;
echo "The length of the string is =";
echo $len;
//to concatenate string use dot operator
echo"<br>";
echo "The length of the string is".$len;

echo "<br>";

//to count the number of words in  a string use str_word_count() method


$strr="hello i am shruti vohra";

echo "the number of words present in strr string is =".str_word_count($strr);
// to reverse string use strrev () function
echo "<br>";

echo "The reverse string is = ".strrev($strr);
//to search any chararcter or word in string  use strpos() function

echo "<br>";

echo "the search for am in this string is".strpos($strr,"am");

//if the word is not present it will return nothing
echo "<br>";


echo $str.$strr;

echo "<br>";
$a=12;
echo "i am"."Shruti".$a;


echo "<br>";
//to replace a  word in string use  str_replace()  function

echo "The replaced string is".str_replace("shruti","pratham",$strr);

//it will replace the word at every occurance
?>

