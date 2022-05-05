<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conditionals </title>

    <style>


*{
    margin:0;
    padding:0;
    box-sizing:border-box;
}
        .container
        {
            max-width :80%;
            background-color:grey;
            margin:auto;
            padding:23px;
        }
        </style>

</head>
<body>
 <div class="container">


 <h1>Conditionals in php</h1>

 <?php

$age=18;
if($age>30)
{
    echo"You can go to party";
}

else if($age==18)
{
    echo"You are  still kid";

}

else{
    echo"You cannot go to party";
}

?>
 </div>




</body>
</html>