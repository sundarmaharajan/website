<?php 
	include_once("config.php");
	include_once("ownerheader.php");
	include_once("style.php");
?>	
<?php
error_reporting(0);

$query2 = "select Name from addndrf where uname='".$_SESSION['login_ndrf']."'";
			//echo $query2;
			$result1 = mysql_query($query2);
			if(mysql_num_rows($result1))
				{
			$row1 = mysql_fetch_assoc($result1);
		
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




<form action="notify.php" method="post" enctype="multipart/form-data" name="addroom">
<center>

<center><font color="white" size="14">Add Truck Details </font></center>

Owner Name<br />
 <input name="uname" type="text" class="ed" id="unameid" value="<?php echo $_SESSION['login_user'];?>"/>
 <br />

Disaster/Seminor Heading<br />
 <input name="DH" type="text" class="ed" id="DH" />
 <br />
  Description<br />
 <input name="DES" type="text" class="ed" id="DES" />
 <br />
  Date<br />
 <input name="DAT" type="text" class="ed" id="DAT" />
<br>
 Select Image: <br />
 <input type="file" name="image" class="ed"><br />
 
  <input type="submit" name="Submit" value="Upload" id="button1" />
  
  &nbsp; 
  <a href="viewnotify.php">My Update</a>
   &nbsp;
 <a href="viewallnotify.php">View All Notifications</a>
 </center>
 </form>

</div>
</div>
</div>
</div>
</div>


<?php
include('footer.php');
?>
