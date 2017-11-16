<?php
require_once('dbconnect.php');
$sql="select * from product where category=".$_GET['category'];
if($result=mysqli_query($connection,$sql))
{
	$products['product']=array();
	while($row=mysqli_fetch_assoc($result))
	{
		array_push($products['product'], $row);
	}
	echo json_encode($products);
}