<?php 
include('../includes/connection.php');
$db=new DBConnect();
echo $db->errolr;

$s_title=mysqli_real_escape_string($db->link,isset($_POST["serviceID"])?$_POST["serviceID"]:"");
$p_id=mysqli_real_escape_string($db->link,isset($_POST["id"])?$_POST["id"]:"");
$p_name=mysqli_real_escape_string($db->link,isset($_POST["package_name"])?$_POST["package_name"]:"");
$p_details=mysqli_real_escape_string($db->link,isset($_POST["Details"])?$_POST["Details"]:"");
$p_duration=mysqli_real_escape_string($db->link,isset($_POST["duration"])?$_POST["duration"]:"");
$price=mysqli_real_escape_string($db->link,isset($_POST["price"])?$_POST["price"]:"");


//for add
if(isset($_REQUEST["save"]))
{

    if(!empty($id))
    {

       $sql="INSERT INTO `service_package`(`s_title`,`package_id`,`p_name`,`p_details`,`p_duration`,`price`) VALUES('$s_title','$p_id','$p_name','$p_details' ,'$p_duration' , '$price')";


       /*INSERT INTO `service_package`(`s_title`,`package_id`,`p_name`,`p_details`,`p_duration`,`price`)  VALUES('s-001','p-001','AC Maintenance','' ,'1 day' , '2000')*/


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
	<title>Service Packages</title>
</head>
<body>
	<form method="post">
		<table width="600" align="center" bgcolor="#ccc" border="1" bordercolor="#ff0000">
		
				<tr>	
					<td colspan="3" align="center" bgcolor="#456789"><h2>Add Service</h2></td>
				</tr>
				<tr>
					<td>Service Title</td>
					<td>:</td>
					<td>
						<select name="serviceID">
							<?php 
								    $query="select * from add_services";
        							  $result=$db->link->query($sql);
        							  while($fetch_service=$result->fetch_array())
        							  {?>

        							  		<option>sss</option>

        							  <?php 
        							  }
        							   ?>
						
					</select>
				</td>
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
						<img src="images/Screenshot_3.jpg" alt="image">
					</td>

				</tr>

				<tr>	
					<td colspan="3" align="center">
						<input type="submit" name="Save" value="Save">
						<input type="submit" name="Edit" value="Save">
						<input type="submit" name="Save" value="Save">
						<input type="submit" name="Save" value="Save">	
					</td>
				</tr>

	</table>
	</form>
</body>
</html>