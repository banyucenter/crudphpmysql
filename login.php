<!DOCTYPE html>
<html>
<head>
	<title>Login User</title>
</head>
<body>
 
	<h2>Login User </h2>
	<br/>
	<a href="index.php">KEMBALI</a>
	<br/>
	<br/>
	<h3>Login Member</h3>
	<form method="post" action="login_aksi_user.php">
		<table>
			<tr>			
				<td>Nama</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="password" name="password"></td>
			</tr>
            
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>