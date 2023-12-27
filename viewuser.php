<?php 
include_once("adminheader.php");
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
<h2>Customer Details</h2>
<br>

<br>
	<table border="2" cellspacing="6" class="displaycontent"  width="1000" height="120" style="border:4px solid lightblue;" align="center">
	<tr>
	    
			<th bgcolor=transparent><font color=white size=2>S.no</font></th>
			<th bgcolor=transparent><font color=white size=2>User Name</font></th>
			<th bgcolor=transparent><font color=white size=2>Mobile</font></th>
			<th bgcolor=transparent><font color=white size=2>Mail</font></th>
<th bgcolor=transparent><font color=white size=2>Action</font></th>		
			  
	</tr>
	
	<?php
	
	$query = "select * from user";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_assoc($result))
		{
 ?>
	<tr>
		
       
		<td bgcolor=transparent><font color=white size=2><?php echo $row['sno']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['name']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['mobile']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><?php echo $row['mail']; ?></font></td>
		<td bgcolor=transparent><font color=white size=2><a href="?delete=<?php echo $row['sno'];?>">Delete</a></font></td>

		
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
	
	$query = "delete from user where sno='".$_GET['delete']."'";
	mysql_query($query);
		echo '<script>alert("Deleted");</script>';
	
		
header("location:viewuser.php");
	exit;
	}
include('footer.php');
?>
