<?php 
include_once("userheader.php");
	include_once("config.php");
	include_once("style.php");
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


<div id="container">
<div background="">
<br>

<div id="error_msg"></div>
<form action="" method="post" >
<center>
 <div class="container-fluid p-0" style="margin-bottom: 90px;">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/a1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">

<h2>Welcome: <?php echo $_SESSION['login_user'];?></h2>
<h2>Booking Details</h2>
<br>

<br>
	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=transparent><font color=white size=2>S.no</font></th>
			<th bgcolor=transparent><font color=white size=2>Owner Name</font></th>
			<th bgcolor=transparent><font color=white size=2>Pickup Location</font></th>
			<th bgcolor=transparent><font color=white size=2>Drop Location</font></th>
			<th bgcolor=transparent><font color=white size=2>Goods Weight</font></th>
			<th bgcolor=transparent><font color=white size=2>From Date</font></th>
			<th bgcolor=transparent><font color=white size=2>To Date</font></th>
			<th bgcolor=transparent><font color=white size=2>Status</font></th>
			  
	</tr>
	
	<?php
	
	$query = "select * from orderr where uname='".$_SESSION['login_user']."'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=transparent><font color=white size=2><?php echo $row['sno']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['owname']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['loc1']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['loc2']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['weight']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['dat1']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['dat2']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['status']; ?></font></td>
		
	</tr>
	<?php }  ?>
	
	</table>


</center>
</form>
</div>
 </div>
                    </div>
                </div>
            </div>
			 </div>
  

<?php 

if(isset($_GET['delete']))
	{
	
	$query = "delete from orderr where sno='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:viewmyorder.php");
	exit;
	}
?>

<?php 
include_once("footer.php");
?>