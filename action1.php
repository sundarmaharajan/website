<?php
include('adminheader.php');
include('config.php');
include('style.php');
?>


<?php
error_reporting(0);

if(isset($_GET['select'])){

$query2 = "select * from truck where sno='".$_GET['select']."'";
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



<div id="container">
<div background="">
<br>

<div id="error_msg"></div>
<form action="" method="post" >



<div align="center">


<div class="content">
    <div class="content_resize">

    <form action="" name="Orderupdate_form" id="Orderupdate_form"   method="post">

<div align="center">

<h2> New Truck Owner Information </h2>
	<center >
	</table>
	
	<br>
<br>
	<table border="0" cellspacing="4" cellspadding="4"  class="displaycontent"  width="400" height="150">
	<caption></caption>

	<tr>
		<td class="col"><p><font color=#ff3300 size=2>Owner ID:</font></p></td>
		<td><input type="text" name="sid" value="<?php echo $row['sno']; ?>" class="textbox"  /></td>
	</tr>
	
		<tr>
		<td class="col"><p><font color=#ff3300 size=2>Approval:</font></p></td>
		<td><select color=#ff3300 name="Roll" class="textbox"> 
    <option  color=black value="approved">Conform</option>
    <option  color=black value="Rejected">Not Conform</option> 
   </select>
</td>
	</tr>
	
	
	<tr>
		<td>&nbsp;</td>
		<td >
			<input type="submit" name="register" value="Update" />
		    
		</td>
	</tr>

	
		
	
	</table>


	</form>
</div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<?php
 
 
if(isset($_POST['register'])){

	$query = "update truck set sta='".$_POST['Roll']."' where sno= '".$_POST['sid']."'";
	echo $query;
      
	   
	if(mysql_query($query)){
		echo 'UPDATE SUCCESSFULLY';

	}
	else{
		echo 'NOT UPDATE';
	}
	header("location:newreg.php");
	exit;
//}
 }

?>

<?php
include('footer.php');
?>
 