<?php
        include('../dbconnect.php');
	    $email=$_POST['mail'];
	    $password=$_POST['pass'];
	    $query="SELECT * FROM `teacher` WHERE `Email`='$email' AND `Password`='$password'";
	    $run=mysqli_query($con,$query);
	    $info=mysqli_fetch_assoc($run);
?>

<html>
    <head>
	    <title>teacher details</title>
		<link rel="stylesheet" href="../css/style_index.css">
		<style>
            .logo_div
			{
				border:2px solid black;
				width:300px;
				height:200px;
			}
			
			td
			{
				padding:10px;
			}
			.login_div
			{
				margin-left:0px;
				left:350px;
			}
			a{
				font-style:none;
			}
		</style>
	</head>
	<body>
	    
        <div class="header">
            <h1>Welcome To Teacher Section</h1>
        </div>
		<div class="main_div">
		    <div class="logo_div">
			    <img src="../dataimg/<?php echo $info['Photo'];?>" width="300px" height="200px">
			</div>
			<div class="login_div">
			    <h2>Welcome <?php echo $info['Fname']?></h2>
			    <table width="100%">
				    <tr>
					    <td>First Name :</td>
					    <td><?php echo $info['Fname'];?></td>
						<td rowspan="7"><a href="editprofile_Teacher.php?id=<?php echo $info['SN.']?>">Edit Profile</a></td>
						               
					</tr>
					<tr>
					    <td>Last name :</td>
					    <td><?php echo $info['Lname'];?></td>
					</tr>
					<tr>
					    <td>Department :</td>
					    <td><?php echo $info['Department'];?></td>
					</tr>
					<tr>
					    <td>Salary :</td>
					    <td><?php echo $info['Salary'];?></td>
					</tr>
					<tr>
					    <td>DOB :</td>
					    <td><?php echo $info['DOB'];?></td>
						
					</tr>
					<tr>
					    <td>Address :</td>
					    <td><?php echo $info['Address'];?></td>
					</tr>
					<tr>
					    <td>Email :</td>
					    <td><?php echo $info['Email'];?></td>
					</tr>
					<tr>
					    <td>Password :</td>
					    <td><?php echo $info['Password'];?></td>
						<td><a href="logout_Teacher.php">Logout</a></td>
					</tr>
					
				</table>
			</div>
		</div>
	</body>
</html>
