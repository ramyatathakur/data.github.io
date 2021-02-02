<?php
    header("Pragma: no-cache");
    header("Cache-Control: no-cache");
    header("Expires: 0");
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Form </title>
	<style type="text/css">
		body{
			margin:10px 300px;
			background: #dbceeb;
		}
	</style>
</head>
<body>
	

	<div style="background:gray;">
	<fieldset>
		<center><h1>Online Skills Developments Program Only for 2021 Batch</h1>
		</center>
	<hr>
	</fieldset>
	<fieldset>
		<legend>Personal Info</legend>
		<form action="connect.php" method="post">
			<table>
				<tr>
					<td>First Name</td>
					<td><input type="text" id="fname" name="fname" placeholder="Enter Your First Name" required></td>
				</tr>
				<tr>
					<td>Last Name</td>
					<td><input type="text" id="lname"  name="lname" placeholder="Enter Your Last Name"></td>
				</tr>
				<tr>
					<td>Current location</td>
					<td><input type="text" id="location" name="location" placeholder="Enter Your Location" required ></td>
				</tr>
				<tr>
					<td>College/University</td>
					<td><input type="text" id="college" name="college" placeholder="Enter Your College" required></td>
				</tr><td>Email</td>
					<td><input type="email" id="email" name="email" placeholder="Enter Your Email" required></td>
				</tr>
				
				<tr>
					<td>Phone Number</td>
					<td><input type="tel" id="number" name="number" placeholder="Enter Your Phone Number" required></td>
				</tr>

				<tr>
                    <td>Required Internship</td>
                    <td>
                        <input type="radio" name="status"  id="s1" value="web" >Website Design & Development
                        
                        <input type="radio" name="status" id="s2" value="digi">Digital Marketing
						<input type="radio" name="status" id="status" value="gra">  Graphic design<br>


						<input type="checkbox" name="terms" id="terms" required>I accept all the terms and conditions. <br>




                    </td>
                </tr>			
			</table>
			</fieldset>
		
			<a href="checkout.php" ><input type="button" id="pay" name="pay" value="Proceed to pay" required></a>
				<center>

				<br><br>
				<input type="submit" name="submit" id="submit" value="submit">
					<input type="reset" name="reset" id="reset" value="Reset">

				</center>
			</fieldset>
		</form>
</div>
</body>
</html>


