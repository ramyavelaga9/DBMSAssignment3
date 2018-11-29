<?php
$data    = $_POST["result"];
$data    = json_decode("$data", true);
$username=$data["username"];

$con= mysqli_connect('localhost','enduser','16011a0516');


if(!$con)
{

echo "Not connected to server";

}

if(!mysqli_select_db($con,'Tickets'))
{
echo "Database not connected";
}

$sql="UPDATE ticket SET status='booked' WHERE username='$username'";

if($con->query($sql)===TRUE)
{


}
else 
{
    echo "Error deleting record: " . $con->error;
}


$con->close();

?>