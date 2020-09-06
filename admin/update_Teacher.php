<?php
    include('admin_session.php');
        include('../dbconnect.php');
	    $fname=$_POST['fname'];
	    $lname=$_POST['lname'];
	    $department=$_POST['dept'];
		$salary=$_POST['salary'];
		$bdate=$_POST['dob'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$password=$_POST['pass'];
		
	    $imgname=$_FILES['image']['name'];
	    $tempname=$_FILES['image']['tmp_name'];
	    
	    move_uploaded_file($tempname,"../dataimg/$imgname");
	
	    $query="UPDATE `teacher` SET `Fname`='$fname',`Lname`='$lname',`Department`='$department',`Salary`='$salary',`DOB`='$bdate',`Address`='$address',`Email`='$email',`Password`='$password',`Photo`='$imgname'";
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
	    <title>Home</title>
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
			    <h2>Mr.<?php echo $fname?>'s Profile</h2>
			    <table width="100%">
				    <tr>
					    <td>First Name :</td>
					    <td><?php echo $fname;?></td>
						<td rowspan="7"><a href="edit_Teacher.php?id=<?php echo $info['SN.']?>"><div class="button">Edit</div></a><br>
						                <a href="delete_Teacher.php?id=<?php echo $info['SN.']?>"><div class="button">Delete</div></a>
					</tr>
					<tr>
					    <td>Last name :</td>
					    <td><?php echo $lname;?></td>
					</tr>
					<tr>
					    <td>Department :</td>
					    <td><?php echo $department;?></td>
					</tr>
					<tr>
					    <td>Salary :</td>
					    <td><?php echo $salary;?></td>
					</tr>
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
						<td><a href="teacher_List.php"><div class="button">Go Back</div></a></td>
					</tr>
					
				</table>
			</div>
		</div>
	</body>
</html>
    