<?php
  include_once("header.php"); 
  include_once("style.php");
 if(isset($_POST['login']))
 {
	if($_POST['uid']=="admin" && $_POST['password']=="admin")
	 {
		
	 header("location:adminhome.php");

	 }
	 else
	 {
	 	 	echo '<script> alert("Login Failed");</script>';
	 }
 }
 
?>

<style>
h2 {
  color: white;
  font-family: verdana;
  font-size: 140%;

}
p  {
  color: white;
  font-family: Georgia, serif;
  font-size: 100%;
   font-weight: bold;
}
</style>


	<form action="" name="login_form" id="login_form"  method="post">
	<div class="imgcontainer">
<div align="center">

<meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Carousel Start -->
    <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <img class="w-100" src="img/a2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                       <div class="container">
  <h2>Admin Login</h2>
  <table class="displaycontent" width="400" height="120">
  	<tr>
    <td><label for="uname"><p>Username</p></label></td>
  <td> <input type="text" placeholder="Enter Username" name="uid" required class="textbox"></td>
		</tr>

	<tr>
	<td>
    <label for="psw"><p>Password</p></label></td>
   <td> <input type="password" placeholder="Enter Password" name="password" required class="textbox"></td>
		</tr>
		  </table>
        <br>
    <input type="submit" name="login" value="Login" style="color: #000000"/>
	<a href="index.php" class="nav-item nav-link">Back</a>
 
  </div>
   </div>
                    </div>
                </div>

</div>
</div>
</div>
	</form>

</div>

<?php include("footer.php")?>