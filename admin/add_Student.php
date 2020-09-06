<?php
        include('../dbconnect.php');
	    $fname=$_POST['fname'];
	    $lname=$_POST['lname'];
	    $course=$_POST['course'];
		$bdate=$_POST['dob'];
		$address=$_POST['address'];
		$email=$_POST['email'];
		$password=$_POST['pass'];
		$re_pass=$_POST['repass'];
		
	    $imgname=$_FILES['image']['name'];
	    $tempname=$_FILES['image']['tmp_name'];
	    
	    move_uploaded_file($tempname,"../dataimg/$imgname");
	
	    $query="INSERT INTO `student`(`Fname`, `Lname`, `course`, `DOB`, `Address`, `Email`, `Password`, `Photo`) VALUES ('$fname','$lname','$course','$bdate','$address','$email','$password','$imgname')";
	    $run=mysqli_query($con,$query);
	        if($run==TRUE){
			?>
			    <script>
			        alert('data inserted successfully...');
			    </script>
			<?php

		}			
	header('location:register_Student.php');
?>
    