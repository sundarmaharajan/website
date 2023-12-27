<?php
  include_once("header.php"); 
  include_once("style.php");
  include_once("config.php");


 if(isset($_POST['login']))
	  {
	$query ="select * from  user where name='".$_POST['uid']."'  and	password ='".$_POST['password']."'";
	$result = mysql_query($query);
	if(mysql_num_rows($result))
		{
	$row = mysql_fetch_assoc($result);
		$_SESSION['login_user'] = $row['name'];
		echo '<script> alert("Login success"); window.location.href = "userhome.php" </script>';
		}
 else
	 {
		echo '<script> alert("Login failed");</script>';
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
  <h2>User Login</h2>
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
	<a href="userregister.php" class="nav-item nav-link">New Register?</a>
 
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