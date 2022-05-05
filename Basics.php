<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
    <h1>My first php Page</h1>

    <?php

    define('pi',3.14);
    define('fname',"shruti");//to define constants
    echo "HELLO WORLD and this is printed using echo";
    echo"<br>";
    echo "Second line";
    echo "<br>";

    //This is a comment 
    //comments are ignored and are not executed
    //This is a single line comment

    /*

    This is a multiline comment
    using multiline comments you can add a long paragraph as a comment that you do not want to execute



    */
    echo "<h3>Variables</h3>";
    //varibles
    $var1=23;
    $var2=12;
    echo $var1;
    echo"<br>"; //to add a new line

    echo $var2;
    echo "<br>";
    echo $var1+$var2;
    echo "<br>";

    //php is a dynamically typed language 

    //php is not a case sensitive language.
    //but in case of variables it is case sensitive

    //operators in php
    //  1 airthmetic operator

  echo "<h3>AIRTHMETIC OPERATORS</h3>";
    echo "The sum of variab;e 1 and variable 2 ";
    echo"<br>";
    echo $var1+$var2;
    echo"<br>";
    echo "The subtraction of variab;e 1 and variable 2 ";
    echo"<br>";
    echo $var1-$var2;
    echo"<br>";
    echo "The multiplication of variab;e 1 and variable 2 ";
    echo"<br>";
    echo $var1*$var2;
    echo"<br>";
    echo "The division of variab;e 1 and variable 2 ";
    echo"<br>";
    echo $var1/$var2;
    echo"<br>";

    echo "<h3>ASSIGNMENT OPERATORS</h3>";
    //  2 assignment operator
$newvar=$var1;
//assigning value of var1 to new var
echo "The value of new var is";
echo $newvar;

echo"<br>";
echo "Adding 1 to newvar";
echo"<br>";
echo $newvar+=1;
echo"<br>";
echo "Subtracting 1 from newvar";
echo"<br>";
echo $newvar-=1;
echo"<br>";

echo "Multiplying  2 to newvar";
echo"<br>";
echo $newvar*=2;
echo"<br>";

echo "Dividing 2 by newvar";
echo"<br>";
echo $newvar/=2;
echo"<br>";





    //  3 comparision operators

    echo "<h3>COMPARISION OPERATORS</h3>";
    //they return booleans i.e either return true or false
    //echo var_dump(1==3);
    echo "The value for 1==8 is";
    echo"<br>";
    
    echo var_dump(1==8);//false
echo"<br>";
echo "The value for 1>=8 is";
    echo"<br>";
    echo var_dump(1>=8); //false
    echo"<br>";
    echo "The value for 1>8 is";
    echo"<br>";
    echo var_dump(1>8);//false
    echo"<br>";
    echo "The value for 1<=8 is";
    echo"<br>";
    echo var_dump(1<=8);//true
    echo"<br>";

    echo "The value for 1<8 is";
    echo"<br>";
    echo var_dump(1<8);//true
    echo"<br>";



    echo "The value for 1!=8 is";
    echo"<br>";

    echo var_dump(1!=8);//true
    echo"<br>";




    //  4 increment decrement operators
    echo "<h3>INCREMENT DECREMENT OPERATORS</h3>";

    $A=10;
    echo "The value of A is after pre increment is = ";
    echo ++$A; //pre increment  11
    echo"<br>";
    echo "The value of A is after pre decrement is = ";
    echo --$A; //pre decrement   10
    echo"<br>";
    echo "The value of A is after post increment is = ";
    echo $A++;
    echo"<br>"; // post increment  10
    echo "The value of A is after post decrement is = ";
    echo $A--;
    echo"<br>";  //post decrement 11 

    
    //  5 logical operators

echo "<h3>LOGICAL OPERATORS</h3>";
echo"<br>";
//AND(&&)
//OR(||)
//XOR
//NOT(!)

//IT WORK ON BOOLEAN VALUES

$myvar=(true and true);

//echo $myvar;//it will print 1 

echo"<br>";
echo var_dump($myvar);
echo"<br>";
$myvar2=(true and false);
echo"<br>";
echo var_dump($myvar2);

echo"<br>";
$myvar3=(false and false);
echo"<br>";
echo var_dump($myvar3);

//or operator




echo"<br>";
$myvarr=(false or false);
echo"<br>";
echo var_dump($myvarr);

echo"<br>";
$myvarrr=(false or true);
echo"<br>";
echo var_dump($myvarrr);


echo"<br>";
$myvarrr9=(true or true);
echo"<br>";
echo var_dump($myvarrr9);

//XOR  if both are true or both are false then ans will be true else ans will be true

echo"<br>";
$x=(true xor true);
echo"<br>";
echo var_dump($x);

echo"<br>";
$y=(false xor true);
echo"<br>";
echo var_dump($y);

echo"<br>";
$z=(false xor false);
echo"<br>";
echo var_dump($z);

echo"<br>";
$w=(true xor false);
echo"<br>";
echo var_dump($w);


echo"<br>";
$yy=!true;
echo"<br>";
echo var_dump($yy);

echo"<br>";
$yyo=!false;
echo"<br>";
echo var_dump($yyo);


//DATA TYPES

echo "<h3> DATA TYPES</H3>";

// INTEGER
//STRING
//FLOAT
//BOOLEAN
//ARRAY
//OBJECT

//1 string
echo"<br>";
$name="Shruti vohra";
echo $name;
echo"<br>";
echo var_dump($name);

//2 integer
echo"<br>";
$name=100;
echo $name;
echo"<br>";
echo var_dump($name);

//3 float
echo"<br>";
$name=100.8;
echo $name;
echo"<br>";
echo var_dump($name);

// 4  boolean
echo"<br>";
$name=false;
echo $name;
echo"<br>";
echo var_dump($name);
echo"<br>";

//you can define constants using define keyword
echo pi;
echo"<br>";
echo fname;
    ?>
</body>
</html>