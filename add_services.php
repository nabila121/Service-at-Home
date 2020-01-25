<?php 
include('includes/connection.php');
$db=new DBConnect();
//echo $db->errolr;


$id=mysqli_real_escape_string($db->link,isset($_POST["id"])?$_POST["id"]:"");
$title=mysqli_real_escape_string($db->link,isset($_POST["title"])?$_POST["title"]:"");
$details=mysqli_real_escape_string($db->link,isset($_POST["Details"])?$_POST["Details"]:"");


//for add
if(isset($_REQUEST["save"]))
{

    if(!empty($title))
    {

       $sql="INSERT INTO `add_services`(`s_id`,`title`,`details`)  VALUES('$id','$title','$Details')";


          $save=$db->link->query($sql);
        if($save)
        {
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
	<title>Add Service</title>
</head>
<body>
	<form method="post">
		<table width="600" align="center" bgcolor="#ccc" border="1" bordercolor="#ff0000">
		
				<tr>	
					<td colspan="3" align="center" bgcolor="#456789"><h2>Add Service</h2></td>
				</tr>
				<tr>
					<td>Service ID</td>
					<td>:</td>
					<td><input type="text" name="id"></td>
				</tr>
				<tr>
					<td>Service Title</td>
					<td>:</td>
					<td><input type="text" name="title"></td>
				</tr>
				<tr>
					<td>Service Details</td>
					<td>:</td>
					<td>
						
						<textarea cols="50" rows="5" name="Details"></textarea>
					</td>
				</tr>
				<tr>	
					<td colspan="3" align="center">
						<input type="submit" name="save" value="Save">
						<input type="edit" name="edit" value="Edit">
						<input type="delete" name="delete" value="Delete">
						<input type="reset"  name="reset" value="Reset">
					</td>
				</tr>

	</table>
	</form>
	

</body>
</html>