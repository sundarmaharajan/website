<?php
  include_once("userheader.php"); 
  include_once("style.php");
  include_once("config.php");

  ?>

<?php
error_reporting(0);

if(isset($_GET['select'])){

$query2 = "select * from truck where name='".$_GET['select']."'";
			//echo $query2;
			$result = mysql_query($query2);
			if(mysql_num_rows($result)){
			$row = mysql_fetch_assoc($result);
			}
}
?>




<style>
h2 {
  color: white;
  font-family: verdana;
  font-size: 240%;

}
p  {
  color: white;
  font-family: Georgia, serif;
  font-size: 100%;
   font-weight: bold;
}
</style>

  <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <img class="w-100" src="img/a2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                       <div class="container">


<form  method="post" enctype="multipart/form-data" name="addroom">
<br>
<center>
<h2>Welcome: <?php echo $_SESSION['login_user'];?></h2>

<h2>Hire Your Truck Here</h2>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300" height="300">
	
	<tr>
		<td class="col" style="color: #000000"><p>User Name:</p></td>
		<td><input type="text" name="uname"  value="<?php echo $_SESSION['login_user']; ?>"  style="color: #000000" class="textbox"/></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p>Owner Name:</p></td>
		<td><input type="text" name="owname"  value="<?php echo $row['name']; ?>"  style="color: #000000" class="textbox"/></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p>Pickup Location:</p></td>
		<td><input type="text" name="loc1"  value=""  style="color: #000000" class="textbox"/></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000"><p>Drop Location:</p></td>
		<td><input type="text" name="loc2" value=""  style="color: #000000"  class="textbox" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p>Weight:</p></td>
		<td><input type="text" name="weight" value=""  style="color: #000000"  class="textbox" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p>From Date:</p></td>
		<td><input type="date" name="dat1" value=""  style="color: #000000"  class="textbox" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p>To Date:</p></td>
		<td><input type="date" name="dat2" value=""  style="color: #000000"  class="textbox" /></td>
	</tr>
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Book"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table><a href="viewalltruck.php">BACK</a>
 </center>
 </form>
</div>


<?php

 if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `orderr`"; 
	$query .= " VALUES ('null','".$_POST['uname']."', '".$_POST['owname']."', '".$_POST['loc1']."', '".$_POST['loc2']."', '".$_POST['weight']."', '".$_POST['dat1']."', '".$_POST['dat2']."',  'pending')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("Booked Successfully");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:userhome.php");
//	exit;
 
 }




?>






</div>
</div>
</div>
</div>
</div>
<?php
  include_once("footer.php");
  ?>