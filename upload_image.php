<?php
	if(isset($_POST['image']))
	{
		$now=DateTime::createFromFormat('U.u',microtime(true));
		$id=$now->format('YmdHisu');
		$upload_folder="images";
		$path="$upload_folder/$id.jpeg";
		$image=$_POST['image'];
		if(file_put_contents($path, base64_decode($image))!=false)
		{
			$sql="inseer into product('pname','price','contact','category','name','username') values('{$pname}','{$price}','{$contact}','{$category}','{$name}','$username');";
			if(mysqli_query($connection,$sql))
			{
				echo "Success";
			}
			else
			{
				echo "Error in mysql query!";
			}

		}
		else
		{
			echo "Error in uploading image!";
		}
	}
	else
	{
		echo "image not uploaded";
		exit;
	}