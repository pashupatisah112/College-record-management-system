<?php
    include('admin_session.php');
	include('../dbconnect.php');
	$sid=$_GET['sid'];
	$query="SELECT * FROM `student` WHERE `SN.`='$sid'";
	$run=mysqli_query($con,$query);
    $info=mysqli_fetch_assoc($run);
?>
<html>
    <head>
	    <title>student details</title>
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
				text-decoration:none;
			}
			.button{
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
			    <img src="../dataimg/<?php echo $info['Photo'];?>" width="300px" height="200px">
			</div>
			<div class="login_div">
			    <h2>Mr.<?php echo $info['Fname']?>'s Profile</h2>
			    <table width="100%">
				    <tr>
					    <td>First Name :</td>
					    <td><?php echo $info['Fname'];?></td>
						<td rowspan="7"><a href="edit_Student.php?id=<?php echo $info['SN.']?>"><div class="button">Edit</div></a><br>
						                <a href="delete_Student.php?id=<?php echo $info['SN.']?>"><div class="button">Delete</div></a>
					</tr>
					<tr>
					    <td>Last name :</td>
					    <td><?php echo $info['Lname'];?></td>
					</tr>
					<tr>
					    <td>Course-Type :</td>
					    <td><?php echo $info['Course'];?></td>
					</tr>
					<tr>
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
						<td><a href="student_List.php"><div class="button">Go Back</div></a></td>
					</tr>
					
				</table>
			</div>
		</div>
	</body>
</html>