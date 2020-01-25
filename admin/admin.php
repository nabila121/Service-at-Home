<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
</head>
<body>

	<table height="600" width="1000" bgcolor="#ccc" align="center">
		
			<tr>
					<td height="150" width="100%" colspan="2" align="center" bgcolor="#898765"><h1>Admin Panel</h1></td>
			</tr>

				<tr>
					<td height="50" >
						<table width="100%" bgcolor="#f4f4f4" height="100%" border="1" bordercolor="#ff0000" > 
								<tr>
										<td align="center"><a href="#"> Home</a></td>
										<td align="center"><a href="add_services.php" target="frmAdminBody"> Add Services</a></td>
										<td align="center"><a href="service_package.php"  target="frmAdminBody"> Add Package</a></td>
										<td align="center"><a href="#"> View Order</a></td>
										<td align="center"><a href="#"> Logout</a></td>
								</tr>

						</table>
					</td>
			</tr>

			<tr>
					<td height="500" bgcolor="#ccc">
						<iframe src="add_services.php" name="frmAdminBody" height="100%" width="100%"></iframe>
					</td>
			</tr>


			<tr>
					<td height="100" bgcolor="#876544" align="center">
						Footer
					</td>
			</tr>




	</table>

</body>
</html>