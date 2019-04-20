<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register Page</title>
	<link rel="stylesheet" type="text/css" href="styles.css">
	
</head>
<body>
	<div class="top">
		<table align="center">
			<tr>
				<td align="center" width="400"><img src="Images/santilogo2.png" width="350" height="100"></td>
				<td width="800" align="center" >
					<h1>Sports Supply | Register </h1>
				</td>	
				<td >
					 <h2>Phone: (555)555-5555</h2> 
					 <h2>Adress: 2 Central Ave, New Jersey.</h2>
				</td>
			</tr>
			
		</table>
		
	</div>
	<br>

	<form action="Registration_Successful.php" method="post">
	<table class="form" align="center">
		<tr>
			<td>
				<label><p class="form">Email-Address:</p></label>
			</td>
			<td><input type="email" name="Email" placeholder="name@gmail.com"  required autofocus /></td>
		</tr>
		<tr>
			<td>
				<label><p class="form">Password:</p></label>
			</td>
			<td><input type="password" name="Password" placeholder="name@gmail.com"  required /></td>
		</tr>
		<tr>
			<td>
				<label><p class="form">First Name:</p></label>
			</td>
			<td><input type="text" name="F_Name" required ></td>
		</tr>
		<tr>
			<td>
				<label><p class="form">Last Name:</p></label>
			</td>
			<td><input type="text" name="L_Name" required ></td>
		</tr>
		<tr>
			<td>
				<label><p class="form">Address:</p></label>
			</td>
			<td><input type="text" name="Address" required ></td>
		</tr>
		<tr>
			<td>
				<label><p class="form">Phone Number:</p></label>
			</td>
			<td><input type="tel" name="Phone" placeholder="(###) ###-####" pattern="\(\d{3}\) +\d{3}-\d{4}"  required /></td>
		</tr>
	</table>

	<p align="center">
		<input class="send" type="Submit" value="Register">
	</p>
		
	</form>




</body>
</html>