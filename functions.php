<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


echo "<h1> FUNCTIONS IN PHP</h1>";

function print5(){    //creating a function

    echo "FIVE";

}
//function  is a piece of code that performs a particular task
//CALLING FUNCTION
print5();
echo "<br>";
//again calling a function
print5();

echo "<br>";

//Types of functions in php

//a built in function
// eg var_dump() it is used to tell about the type of variable


//b user defined function


function numberrr($num)
{
    echo "Your entered number is = ";
    echo $num;
}

numberrr(50);

echo "<br>";
numberrr(90);

echo "<br>";



?>


</body>
</html>