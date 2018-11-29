<?php

include 'index.html';

$servername="localhost";
$username="enduser";
$password="16011a0516";
$db="Railways";
$results=0;

// creating connection

$con= new mysqli($servername,$username,$password,$db);

// check connection

if($con->connect_error)
{
die("connection_failed: " . $con->connect_error);
}
else 
{
echo "Connected Succesfully";
}


$sql="SELECT username FROM Person";
$result=$con->query($sql);

$result_name;

if($result->num_rows>0)
{

while($row=$result->fetch_assoc())
{

    if($row["username"]=="AmmuNicky")
    {
   $result_name=$row["username"];
   echo "<h1>" . $result_name . "</h1>";
    }

}

}




// redirect();

// function redirect() 
// {
//     ob_start();
//     header("refresh:1; url=index.html");
//     ob_end_flush();
//     die();
// }

mysqli_close($con);


?>
