<?php

$data    = $_POST["result"];
$data    = json_decode("$data", true);

$username=$data["username"];
$passengerName=$data["passengerName"];
$ticktNumber="12345";
$dateOfJ=$data["dateOfJ"];
$status=$data["status"];

$con= mysqli_connect('localhost','enduser','16011a0516');


if(!$con)
{

echo "Not connected to server";

}

if(!mysqli_select_db($con,'Tickets'))
{
echo "Database not connected";
}

$sql="INSERT INTO ticket (username,passengerName,dateOfJ,ticketNum,status) VALUES ('$username','$passengerName','$dateOfJ','$ticktNumber','$status')";
if(!mysqli_query($con,$sql))
{
echo "There is some error adding the account";
}
else 
{
echo "Account Added Sucesfully";

}


?>