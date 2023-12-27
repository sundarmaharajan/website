<?php
include('config.php');
if (!isset($_FILES['image']['tmp_name'])) 
	{
	echo "";
	}
	else
		
		{
	$file=$_FILES['image']['tmp_name'];
	$image= addslashes(file_get_contents($_FILES['image']['tmp_name']));
	$image_name= addslashes($_FILES['image']['name']);
			
			move_uploaded_file($_FILES["image"]["tmp_name"],"photos/" . $_FILES["image"]["name"]);
			 
			 $image="photos/" . $_FILES["image"]["name"];
			 $name=$_POST['name'];
			 $pwd=$_POST['pwd'];
			 $mob=$_POST['mob'];
			 $mail=$_POST['mail'];
			 $capc=$_POST['capc'];
			$address=$_POST['address'];
			$save=mysql_query("INSERT INTO truck (name,password,mobile,mail,capc,location,img) VALUES ('$name','$pwd','$mob','$mail','$capc','$address','$image')");
			
			header("location: ownerlogin.php");
			exit();	
			//echo $save;
	}
?>
