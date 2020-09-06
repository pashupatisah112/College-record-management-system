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
	
	    $query="INSERT INTO `teacher`(`Fname`, `Lname`, `Department`, `Salary`, `DOB`, `Address`, `Email`, `Password`, `Photo`) VALUES ('$fname','$lname','$department','$salary','$bdate','$address','$email','$password','$imgname')";
	    $run=mysqli_query($con,$query);
	
	    if($run==TRUE){
		    ?>
			<script>
			    alert('data inserted successfully...');
			</script>
	        <?php
			
	    }else{
			?>
			<script>
			    alert('unexpected error');
			</script>    
			<?php
		}
	header('location:register_Teacher.php');		
?>
    