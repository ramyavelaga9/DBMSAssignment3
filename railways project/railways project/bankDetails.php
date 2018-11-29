
<?php

$data    = $_POST["result"];
$data    = json_decode("$data", true);
$username=$data["username"];


$con= mysqli_connect('localhost','enduser','16011a0516');


if(!$con)
{

echo "Not connected to server";

}

if(!mysqli_select_db($con,'Railways'))
{
echo "Database not connected";
}

$sql="SELECT bankAccount FROM Person WHERE username='$username'";

$result=$con->query($sql);

if($result->num_rows>0)
{

   
    while($row=$result-> fetch_assoc())
    {
        echo $row["bankAccount"];
    }
    

}

else {

echo "Not Listed";

}



?>



