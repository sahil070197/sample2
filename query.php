<?php
require_once('dbconnect.php');
$sql="select * from product where pname like '%".$_GET['name']."%'";
if($result=mysqli_query($connection,$sql))
{
	$products['product']=array();
	while($row=mysqli_fetch_assoc($result))
	{
		array_push($products['product'], $row);
	}
	json
	echo json_encode($products);
}