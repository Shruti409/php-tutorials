<?php
if(isset($_POST['name']))
$server ="localhost";
$username="root";
$password="";

$con=mysqli_connect($server,$username,$password);

if(!$con)
{
    die("connection failed due to".mysqli_connect_error());
}

echo "Successful connection";



$name=$_POST['name'];
$age=$_POST['age'];
$pno=$_POST['pno'];
$mail=$_POST['mail'];
$marks10=$_POST['marks10'];
$marks12=$_POST['marks12'];
$marksbtech=$_POST['marksbtech'];
$about=$_POST['about'];
//$name=$_POST['name'];

$sql= "INSERT INTO `form`. `form` ( `Name`, `Age`, `Phone`, `Email`, `10Marks`, `12Marks`, `BtechMarks`, `dt`, `others`) VALUES ('$name,', '$age', '$pno', '$mail', '$marks10', '$marks12', '$marksbtech', current_timestamp(), '$about');";
//echo $sql;


if($con->query($sql))
{
echo "Successfully inserted";
}

else{
    echo "ERROR: $sql <br> $con->error";


}

$con->close();

?>