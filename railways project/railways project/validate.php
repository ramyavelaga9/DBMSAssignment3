<?php

$email=$_POST["username"];
$password=$_POST["psw"];
$aadharNumber=$_POST["aadharNumber"];
$bankAccount=$_POST["bankAccount"];
$initialAmount=$_POST["initialAmount"];

$con= mysqli_connect('localhost','enduser','16011a0516');


if(!$con)
{

echo "Not connected to server";

}

if(!mysqli_select_db($con,'Railways'))
{
echo "Database not connected";
}


$sql="SELECT username FROM Person WHERE username='$email' AND aadharNumber='$aadharNumber'";
$result=$con->query($sql);


if($result->num_rows>0)
{

echo "Name already In Use";

}
else 
{

// add data

$sql="INSERT INTO Person (username,password,aadharNumber,bankAccount,initialAmount) VALUES ('$email','$password','$aadharNumber','$bankAccount','$initialAmount')";

if(!mysqli_query($con,$sql))
{
echo "There is some error adding the account";
}
else 
{
echo "Account Added Sucesfully";

}

}
$con->close();

?>