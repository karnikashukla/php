<html>
<head>
	<title>Registration Page</title>
</head>
<body>
	<form action="user.php" method="post">
		<table>
			<tr>
				<td>
					<label>Username : 
						<input type="text" name="uname">
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Create Password :
						<input type="password" name="pass">
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Re-enter Password : 
						<input type="password">
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Mobile number : 
						<input type="text" name="mob">
					</label>
				</td>
			</tr>
			<tr>
				<td>
					<label>Email id :
						<input type="email" name="email">
					</label>
				</td>
			</tr>
		</table>
		<tr>
			<td>
				<label>Address : 
					<input type="text" name="address">
				</label>
			</td>
		</tr>
		<br>
		<br>
		<tr>
			<td>
				<button>Submit</button>		
			</td>
		</tr>
		
	</form>
</body>
</html>