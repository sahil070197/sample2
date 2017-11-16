<?php
require_once('dbconnect.php');
$sql="select * from product where username like '".$_GET['username']."'";
if($result=mysqli_query($connection,$sql))
{
	$products['product']=array();
	while($row=mysqli_fetch_assoc($result))
	{
		array_push($products['product'], $row);
	}
	echo json_encode($products);
}