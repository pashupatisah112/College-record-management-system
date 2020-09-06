<?php
    include('admin_session.php');
?>
<html>
    <head>
	    <title>Home</title>
		<link rel="stylesheet" href="../css/style_index.css">
		<style>
		    td
			{
				padding:3px;
			}
			.button_cancel{
				position:absolute;
				left:400px;
				top:350px;
				width:75px;
				height:30px;
				background-color:rgb(128,0,0,0.3);
				padding-top:5px;
				padding-left:5px;
				border-radius:10px 10px 10px 10px;
				
			}
		</style>
	</head>
	<body>
        <div class="header">
            <h1>Welcome To Admin Dashboard</h1>
        </div>
		<div class="main_div">
		    <div class="logo_div">
			    <img src="../assets/logo.png">
			</div>
			<div class="login_div">
			    <h2>Add New Student:</h2>
			    <table id="signup_form">
		            <form action="add_Student.php" method="post" enctype="multipart/form-data">
			        <tr>
			            <td>First Name :</td>
				        <td><input type="text" name="fname" required="required"></td>
				    </tr>
				    <tr>
				        <td>Last Name :</td>
				        <td><input type="text" name="lname"  required="required"></td>
				    </tr>
					<tr>
					    <td>Course-type :</td>
						<td><input type="text" name="course"></td>
					</tr>
				    <tr>
				        <td>Date Of Birth :</td>
				        <td><input type="text" name="dob" placeholder="dd-mm-year" required="required"></td>
				    </tr>
					<tr>
				        <td>Address :</td>
					    <td><input type="text" name="address" required="required"></td>
				    </tr>
				    <tr>
				        <td>Email :</td>
				        <td><input type="email" name="email" required="required" placeholder="name@example.com"></td>
				    </tr>
				    <tr>
				        <td>Password :</td>
						<td><input type="password" name="pass" required="required"></td>
				    </tr>
				    <tr>
				        <td>Confirm Password :</td>
						<td><input type="password" name="repass"></td>
				    </tr>
					<tr>
					    <td>Upload photo :</td>
						<td><input type="file" name="image">
					</tr>
				        <td><input type="submit" name="signup" value="Add"></td>	
				    </tr>
			    </form>
				
		        </table>
				<a href="home_admin.php"><div class="button_cancel">Cancel</div></a>
			</div>
		</div>
	</body>
</html>