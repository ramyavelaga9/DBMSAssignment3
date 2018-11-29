
<?php

$email=$_POST["username"];
$password=$_POST["psw"];


$con= mysqli_connect('localhost','enduser','16011a0516');


if(!$con)
{

echo "Not connected to server";

}

if(!mysqli_select_db($con,'Railways'))
{
echo "Database not connected";
}

$sql="SELECT username FROM Person WHERE username='$email' AND password='$password'";

$result=$con->query($sql);

if($result->num_rows>0)
{

   
        print "1";
    

}

else {

print "0";

}



?>



