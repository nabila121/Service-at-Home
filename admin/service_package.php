<?php 
include('../includes/connection.php');
$db=new DBConnect();
//echo $db->errolr;
$id=mysqli_real_escape_string($db->link,isset($_POST["id"])?$_POST["id"]:"");
$title=mysqli_real_escape_string($db->link,isset($_POST["serviceID"])?$_POST["serviceID"]:"");
$name=mysqli_real_escape_string($db->link,isset($_POST["package_name"])?$_POST["package_name"]:"");
$Details=mysqli_real_escape_string($db->link,isset($_POST["Details"])?$_POST["Details"]:"");
$duration=mysqli_real_escape_string($db->link,isset($_POST["duration"])?$_POST["duration"]:"");
$price=mysqli_real_escape_string($db->link,isset($_POST["price"])?$_POST["price"]:"");

//for add

if(isset($_REQUEST["Save"]))
{

    if(!empty($id))
    {

       $sql="INSERT INTO `service_package`(`s_title`,`package_id`,`p_name`,`p_details`,`p_duration`,`price`)
VALUES('$title','$id','$name','$Details','$duration','$price')";

          $save=$db->link->query($sql);
        if($save)
        {
        	$path="../images/$id.jpg";
        	move_uploaded_file($_FILES['img']['tmp_name'], $path);

             echo $db->message="<span style='color:GREEN;'> Successfully</span>";
        }
        else
        {
             echo $db->message="<span style='color:RED;'> Unsuccessfully</span>";
        }
    }
    else
    {
     echo  $message="Insert Data";

    }

}
//end add
 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Service Packages</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<table width="600" align="center" bgcolor="#ccc" border="1" bordercolor="#ff0000">
		
				<tr>	
					<td colspan="3" align="center" bgcolor="#456789"><h2>Add Service</h2></td>
				</tr>
				<tr>
					<td>Service Title</td>
					<td>:</td>
					<td>
						<select name="serviceID">
							<option>Select Service</option>
							<?php 
								    $query="select * from add_services";
        							  $result=$db->link->query($query);
        							  while($fetch_service=$result->fetch_array())
        							  {?>

        							  		<option value="<?php echo $fetch_service[0]?>"><?php echo $fetch_service[1]?></option>

        							  <?php 
        							  }
        							   ?>
						
					</select>
				</td>
				</tr>


		      <tr>
					<td>Package ID</td>
					<td>:</td>
					<td><input type="text" name="id"></td>
				</tr>


				<tr>
					<td>Package Name</td>
					<td>:</td>
					<td><input type="text" name="package_name"></td>
				</tr>

					<tr>
					<td>Package Details</td>
					<td>:</td>
					<td>
						
						<textarea cols="50" rows="5" name="Details"></textarea>
					</td>
				</tr>

				<tr>
					<td>Package Duration</td>
					<td>:</td>
					<td>
						
						<input type="text" name="duration">
					</td>
				</tr>

			<tr>
					<td>Package Price</td>
					<td>:</td>
					<td>
						
						<input type="text" name="price">
					</td>
				</tr>


	        <tr>
					<td>Image</td>
					<td>:</td>
					<td>
						
					<input type="file" name="img">
					</td>

				</tr>

				<tr>	
					<td colspan="3" align="center">
						<input type="submit" name="Save" value="Save">
						<input type="submit" name="view" value="View">
					
						
						

					</td>
				</tr>

	</table>
<?php
	if(isset($_POST["view"]))
	{


?>

<table width="100%" align="center" bgcolor="#fff" border="1" bordercolor="#098765">

			  <tr>	
					<td colspan="7" align="center" bgcolor="#456789" height="50"><h2>View Package </h2></td>
			  </tr>

			<tr>
					<td>Package ID</td>
					<td>Service Title</td>
					<td>Package Name</td>
					<td>Details</td>
					<td>Duration</td>
					<td>Price</td>
					<td>Image</td>
			</tr>

			
				<?php 

				  $query="select * from service_package";
        		$result=$db->link->query($query);
        		 while($fetch_service=$result->fetch_array())
        			 {?>

        			 		<tr>

        			 				<td align="center" height="50"><?php echo $fetch_service[0]?></td>
        			 				<td align="center"  height="50"> <?php echo $fetch_service[1]?></td>
        			 				<td align="center"  height="50"><?php echo $fetch_service[2]?></td>

        			 				<td align="center" height="50"><?php echo $fetch_service[3]?></td>
        			 				<td align="center"  height="50"> <?php echo $fetch_service[4]?></td>
        			 				<td align="center"  height="50"><?php echo $fetch_service[5]?></td>


        			 				<td align="center"  height="50">
        			 					<img src="../images/<?php echo $fetch_service[0]?>.jpg" height="50" width="100">
        			 				</td>

        			 		</tr>
        							  		

        							  <?php 
        							  }
        							   ?>





</table>
<?php
}
?>

	</form>
	

</body>
</html>