
<html>
    <head>
	    <title>Home</title>
		<link rel="stylesheet" href="../css/style_index.css">
		<style>
		    td
			{
				padding:3px;
			}
		</style>
	</head>
	<body>
        <div class="header">
            <h1>Welcome To Student Section</h1>
        </div>
		<div class="main_div">
		    <div class="logo_div">
			    <img src="../assets/logo.png">
			</div>
			<div class="login_div">
			    <h2>Sign Up And Create An Account</h2>
			    <table id="signup_form">
		            <form method="post" enctype="multipart/form-data">
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
				        <td><input type="submit" name="signup" value="Sign Up"></td>	
				    </tr>
			    </form>
				
		        </table>
				<a href="home_Student.php">Cancel</a>
			</div>
		</div>
	</body>
</html>
<?php
    if(isset($_POST['signup'])){
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
	    
	    move_uploaded_file($tempname,"dataimg/$imgname");
	    $query="INSERT INTO `student`(`Fname`, `Lname`, `course`, `DOB`, `Address`, `Email`, `Password`, `Photo`) VALUES ('$fname','$lname','$course','$bdate','$address','$email','$password','$imgname')";
	    $run=mysqli_query($con,$query);
	
	    if($run==TRUE){
			?>
			<script>
			    alert('data updated successfully...You can login now.');
			</script>
			<?php
            header('location:home_Student.php');			
	    }
	}		
?>