<?php
  include_once("userheader.php"); 
  include_once("style.php");
  include_once("config.php");

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


<h2>New User Registeration Here</h2>

	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="300" height="300">
	
	
	<tr>
		<td class="col" style="color: #000000"><p>User Name:</p></td>
		<td><input type="text" name="name"  value=""  style="color: #000000" class="textbox"/></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p>Password:</p></td>
		<td><input type="password" name="pwd"  value=""  style="color: #000000" class="textbox"/></td>
	</tr>

	<tr>
		<td class="col" style="color: #000000"><p>Mobile:</p></td>
		<td><input type="text" name="mob" value=""  style="color: #000000"  class="textbox" /></td>
	</tr>
	<tr>
		<td class="col" style="color: #000000"><p>Email:</p></td>
		<td><input type="text" name="mail" value=""  style="color: #000000"  class="textbox" /></td>
	</tr>


	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Register"  style="color: #000000"/>
		     	
		</td>
	</tr>

	
		
	
	</table><a href="userlogin.php">BACK</a>
 </center>
 </form>
</div>


<?php

 if(isset($_POST['register']))
	 {
	 	         		
	$query = "INSERT INTO `user`"; 
	$query .= " VALUES ('null','".$_POST['name']."', '".$_POST['mob']."', '".$_POST['pwd']."','".$_POST['mail']."')";
          
	if(mysql_query($query)){
		echo ' SUCCESSFULLY';
	  echo '<script> alert("REGISTERED SUCCESSFULLY");</script>';
	}
	else{
		echo 'NOT REGISTERD';
	}
	header("location:userlogin.php");
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