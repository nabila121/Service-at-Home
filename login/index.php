<?php


	$admin="nahian";
	$password=123;
	
	if(isset($_POST["Submit"]))
	{
		if($_POST["name"]==$admin  && $_POST["password"]==$password)
		{
			print "<script>location='../admin/admin.php'</script>";
		}
		else
		{
			print "Invalid User!! ";
		}
		
		
	}

?>


<style type="text/css">
<!--
.style1 {
	color: #FFFFFF;
	font-size: 36px;
	font-weight: bold;
}
-->
</style>
<form id="form1" name="form1" method="post" action="">
  <table width="691" height="301" border="1" align="center" bgcolor="#F4F4F4">
    <tr>
      <td height="79" colspan="3" align="center" bgcolor="#000099"><span class="style1">Login For Administrator </span></td>
    </tr>
    <tr>
      <td width="279">User Name </td>
      <td width="33">:</td>
      <td width="490"><input type="text" name="name" placeholder="User Name" /></td>
    </tr>
    <tr>
      <td>Password</td>
      <td>:</td>
      <td><input type="password" name="password"  placeholder="Password" /></td>
    </tr>
    <tr>
      <td colspan="3" align="center"><input type="submit" name="Submit" value="     Login    " /></td>
    </tr>
  </table>
</form>
