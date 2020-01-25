
<?php 
include('../includes/connection.php');
$db=new DBConnect();
//echo $db->errolr;
error_reporting(0);
$id=mysqli_real_escape_string($db->link,isset($_POST["id"])?$_POST["id"]:"");
$title=mysqli_real_escape_string($db->link,isset($_POST["title"])?$_POST["title"]:"");
$details=mysqli_real_escape_string($db->link,isset($_POST["Details"])?$_POST["Details"]:"");
//for add


$option=mysqli_real_escape_string($db->link,isset($_GET["option"])?$_GET["option"]:"");

if($option=="edit")
{
	
	$selectService="select * from add_services where s_id='".$_GET["id"]."'";

     $ServiceResult=$db->link->query($selectService);
     $fetch_data=$ServiceResult->fetch_array();
        		
   // print "<pre>";
   //  print_r($fetch_data);



}

if(isset($_REQUEST["save"]))
{
    if(!empty($title))
    {
       $sql="INSERT INTO `add_services`(`s_id`,`title`,`details`)  VALUES('$id','$title','$details')";
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



if(isset($_REQUEST["update"]))
{
    if(!empty($title))
    {
       $sql="REPLACE INTO `add_services`(`s_id`,`title`,`details`)  VALUES('$id','$title','$details')";
      // echo $sql;
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

if(isset($_REQUEST["delete"]))
{
    if(!empty($id))
    {
       $sql="DELETE FROM `add_services` where `s_id`='$id' ";
      // echo $sql;
          $save=$db->link->query($sql);
        if($save)
        {
        	unlink("../images/$id.jpg");
        	
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


if($option=="delete")
{

   
       $sql="DELETE FROM `add_services` where `s_id`='".$_GET['id']."' ";
      // echo $sql;
          $save=$db->link->query($sql);
        if($save)
        {
        	unlink("../images/$id.jpg");
        	
            echo $db->message="<span style='color:GREEN;'> Successfully</span>";
        }
        else
        {
             echo $db->message="<span style='color:RED;'> Unsuccessfully</span>";
        }
  


}
//end add
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Service</title>
</head>
<body>
	<form method="post" enctype="multipart/form-data">
		<table width="600" align="center" bgcolor="#ccc" border="1" bordercolor="#ff0000"height="400">
		
				<tr>	
					<td colspan="3" align="center" bgcolor="#456789"><h2>Add Service</h2></td>
				</tr>
				<tr>
					<td>Service ID</td>
					<td>:</td>
					<td><input type="text" name="id" value="<?php print $fetch_data[0]?>"></td>
				</tr>
				<tr>
					<td>Service Title</td>
					<td>:</td>
					<td><input type="text" name="title" value="<?php print $fetch_data[1]?>"></td>
				</tr>
				<tr>
					<td>Service Details</td>
					<td>:</td>
					<td>
						
						<textarea cols="50" rows="5" name="Details">
							<?php print $fetch_data[2]?>
								
							</textarea>
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
						<input type="submit" name="save" value="Save">

						<input type="submit" name="update" value="Update">

						<input type="submit" name="delete" value="Delete">

						<input type="submit" name="view" value="View">

						<input type="submit"  name="reset" value="Reset">

					</td>
				</tr>

	</table>


<?php
	if(isset($_POST["view"]))
	{


?>
<table width="100%" align="center" bgcolor="#fff" border="1" bordercolor="#098765">

			  <tr>	
					<td colspan="5" align="center" bgcolor="#456789" height="50"><h2>View Service</h2></td>
			  </tr>

			<tr>
					<td>Service ID</td>
					<td>Title</td>
					<td> Details</td>
					<td> Image</td>
					<td> Edit/Delete</td>
			</tr>

			
				<?php 

				  $query="select * from add_services";
        		$result=$db->link->query($query);
        		 while($fetch_service=$result->fetch_array())
        			 {?>

        			 		<tr>

        			 				<td align="center" height="50"><?php echo $fetch_service[0]?></td>
        			 				<td align="center"  height="50"> <?php echo $fetch_service[1]?></td>
        			 				<td align="center"  height="50"><?php echo $fetch_service[2]?></td>
        			 				<td align="center"  height="50">
        			 					<img src="../images/<?php echo $fetch_service[0]?>.jpg" height="50" width="100">
        			 				</td>
        			 				<td align="center"  height="50">
        			 					<a href="add_services.php?option=edit&id=<?php echo $fetch_service[0]?>">Edit</a>

        			 					&nbsp &nbsp
        			 					<a href="add_services.php?option=delete&id=<?php echo $fetch_service[0]?>">Delete</a>

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