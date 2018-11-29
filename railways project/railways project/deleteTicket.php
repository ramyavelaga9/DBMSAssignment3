<?php


$data    = $_POST["result"];
$data    = json_decode("$data", true);
$passengername=$data["passengerName"];
$date=$data["date"];



$con= mysqli_connect('localhost','enduser','16011a0516');




if(!$con)
{

echo "Not connected to server";

}

if(!mysqli_select_db($con,'Tickets'))
{
echo "Database not connected";
}


$sql="DELETE FROM ticket WHERE passengerName='$passengername' AND dateOfJ='$date' ";

if($con->query($sql)===TRUE)
{


}
else 
{
    echo "Error deleting record: " . $con->error;
}


$con->close();

?>