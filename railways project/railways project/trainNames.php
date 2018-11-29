<?php

$con= mysqli_connect('localhost','enduser','16011a0516');
$unListed="UnListed";

if(!$con)
{

echo "Not connected to server";

}

if(!mysqli_select_db($con,'TrainNames'))
{
echo "Database not connected";
}


// <option value="train2">train 2</option>
$sql="SELECT * FROM name";
$result=$con->query($sql);

if($result->num_rows>0)
{

while($row=$result-> fetch_assoc())
{
    echo "<option value='".$row["tName"]."'>".$row["tName"]."</option>";
}

}
else 
{

    echo "<option value='".$unListed."'>".$unListed."</option>";
}

?>