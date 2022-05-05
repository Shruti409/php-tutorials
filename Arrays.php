<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays in php</title>
</head>
<body>
    

<h1>ARRAYS IN PHP</h1>
<?php
//Arrays is a collection of items in php

$languages=array("Python","c","c++","php","java"); //syntsx to create array

//echo $languages;  it will give error
echo $languages[0];
echo"<br>";
echo $languages[1];
echo"<br>";
echo $languages[2];
echo"<br>";
echo $languages[3];
echo"<br>";
echo $languages[4];
echo"<br>";

$randomarray=array("shruti",1,2,1.4,"vohra");

echo $randomarray[0];
echo"<br>";
echo $randomarray[1];
echo"<br>";
echo $randomarray[2];
echo"<br>";
echo $randomarray[3];
echo"<br>";
echo $randomarray[4];
echo"<br>";
//you can store multiple data types in an array in php it is hetrogeneous in nature

//Methods in Arrays


//count method
echo "<br>";
echo count($languages);
echo "<br>";
echo count($randomarray);


//Loops
echo"<h1>LOOPS IN PHP</h1>";
//while loop

$a=0;
while($a<=10)
{
echo "The value of a is =  ";
echo $a;
echo "<br>";
$a++;

}

//iterating arrays in php using while loop

$x=0;
while($x< count($languages))
{
    echo "The value of language is = ";
    echo $languages[$x];
    echo "<br>";
    $x++;
}


//do while loop

$x=0;
do{

    echo "The value of array is = ";
    echo $randomarray[$x];
    echo "<br>";
    $x++;
    
}
while($x< count($randomarray));


//in do while loop first iteration will always be ececuted;


//for loop

for ($a=0; $a < 10; $a++) { 
    # code...

    echo "The value of a is using for loop =";
    echo $a;
    echo "<br>";

}

// for each loop
//it makes easy to iterate over arrays

foreach($languages as $values)
{
    echo "The value of languages using for each loop is ";
    echo $values;
    echo "<br>";


}

?>
</body>
</html>