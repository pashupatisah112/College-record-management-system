<?php
        include('../dbconnect.php');
	    $fname=$_POST['fname'];
	    $lname=$_POST['lname'];
	    $course=$_POST['course'];
		$bdate=$_POST['dob'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$password=$_POST['pass'];
		
	    $imgname=$_FILES['image']['name'];
	    $tempname=$_FILES['image']['tmp_name'];
	    
	    move_uploaded_file($tempname,"../dataimg/$imgname");
	
	    $query="UPDATE `student` SET `Fname`='$fname',`Lname`='$lname',`Course`='$course',`DOB`='$bdate',`Address`='$address',`Email`='$email',`Password`='$password',`Photo`='$imgname'";
	    $run=mysqli_query($con,$query);
	
	    if($run==TRUE){
			?>
			<script>
			    alert('data updated successfully...');
			</script>
			<?php		
	    }	
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
				font-style:none;
			}
		</style>
	</head>
	<body>
	    
        <div class="header">
            <h1>Welcome To Student Section</h1>
        </div>
		<div class="main_div">
		    <div class="logo_div">
			    <img src="../dataimg/<?php echo $info['Photo'];?>" width="300px" height="200px">
			</div>
			<div class="login_div">
			    <h2>Welcome <?php echo $fname?></h2>
			    <table width="100%">
				    <tr>
					    <td>First Name :</td>
					    <td><?php echo $fname;?></td>
						<td rowspan="7"><a href="editprofile_Student.php?id=<?php echo $info['SN.']?>">Edit Profile</a></td>
						               
					</tr>
					<tr>
					    <td>Last name :</td>
					    <td><?php echo $lname;?></td>
					</tr>
					<tr>
					    <td>Course-Type :</td>
					    <td><?php echo $course;?></td>
					</tr>
					<tr>
					<tr>
					    <td>DOB :</td>
					    <td><?php echo $bdate;?></td>
						
					</tr>
					<tr>
					    <td>Address :</td>
					    <td><?php echo $address;?></td>
					</tr>
					<tr>
					    <td>Email :</td>
					    <td><?php echo $email;?></td>
					</tr>
					<tr>
					    <td>Password :</td>
					    <td><?php echo $password;?></td>
						<td><a href="logout_Student.php">Logout</a></td>
					</tr>
					
				</table>
			</div>
		</div>
	</body>
</html>   