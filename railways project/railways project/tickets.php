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

$sql="SELECT * FROM ticket WHERE username='$username'";
$result=$con->query($sql);

if($result->num_rows>0)
{

while($row=$result-> fetch_assoc())
{
    echo "<tr class='ROW'>"."<td id='pn'>".$row["passengerName"]."</td>"."<td id='d' >".$row["dateOfJ"]."</td>"."<td>1234</td>"."<td>".$row["status"]."</td>"."<td><input class='cb' type='checkbox'></td>"."</tr>";

}

}
else 
{

echo "<tr>"."<td>-</td>"."<td>-</td>"."<td>-</td>"."<td>-</td>"."<td>-</td>"."</tr>";

}

?>