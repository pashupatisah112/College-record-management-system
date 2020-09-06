<?php
	include('../dbconnect.php');
	$sid=$_GET['id'];
	$query="SELECT * FROM `teacher` WHERE `SN.`='$sid'";
	$run=mysqli_query($con,$query);
    $edit=mysqli_fetch_assoc($run);
?>
<html>
    <head>
	    <title>edit</title>
		<link rel="stylesheet" href="../css/style_index.css">
		<style>
		    td
			{
				padding:3px;
			}
			.logo_div
			{
				border:2px solid black;
				width:300px;
				height:200px;
			}
			.login_div
			{
				margin-left:0px;
				left:350px;
			}
		</style>
	</head>
	<body>
        <div class="header">
            <h1>Edit Your Profile :</h1>
        </div>
		<div class="main_div">
		    <div class="logo_div">
			    <img src="../dataimg/<?php echo $edit['Photo'];?>" width="300px" height="200px">
			</div>
			<div class="login_div">
			    <h2>Edit <?php echo $edit['Fname']?>'s Details:</h2>
			    <table id="signup_form">
		            <form action="updateprofile_Teacher.php "method="post" enctype="multipart/form-data">
			        <tr>
			            <td>First Name:</td>
				        <td><input type="text" name="fname" value="<?php echo $edit['Fname']?>"></td>
				    </tr>
				    <tr>
				        <td>Last Name:</td>
				        <td><input type="text" name="lname"  value="<?php echo $edit['Lname']?>"></td>
				    </tr>
					<tr>
					    <td>Department:</td>
					    <td><input type="text" name="dept" value="<?php echo $edit['Department'];?>"></td>
					</tr>
					<tr>
					    <td>Salary :</td>
					    <td><input type="text" name="salary" value="<?php echo $edit['Salary'];?>"></td>
					</tr>
				    <tr>
				        <td>Date Of Birth :</td>
				        <td><input type="text" name="dob" value="<?php echo $edit['DOB']?>"></td>
				    </tr>
					<tr>
				        <td>Address :</td>
					    <td><input type="text" name="address" value="<?php echo $edit['Address']?>"></td>
				    </tr>
				    <tr>
				        <td>Email :</td>
				        <td><input type="email" name="email" placeholder="name@example.com" value="<?php echo $edit['Email']?>"></td>
				    </tr>
				    <tr>
				        <td>Password :</td>
						<td><input type="password" name="pass" value="<?php echo $edit['Password']?>"></td>
				    </tr>
				    <tr>
				        <td>Confirm Password :</td>
						<td><input type="password" name="repass" value="<?php echo $edit['Password']?>"></td>
				    </tr>
					<tr>
					    <td>Upload photo :</td>
						<td><input type="file" name="image" value="<?php echo $edit['Photo']?>"></td>
					</tr>
				        <td><input type="submit" name="update" value="Update"></td>	
				    </tr>
			    </form>
		        </table>
			</div>
		</div>
	</body>
</html>
