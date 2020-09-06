<?php
    include('admin_session.php');
    include('../dbconnect.php');
	$sid=$_GET['id'];
	$query="DELETE FROM `student` WHERE `SN.`='$sid'";
	$run=mysqli_query($con,$query);
	if($run==true){
		?>
		<script>alert('Data deleted successfully')</script>
		<?php
		header('location:student_List.php');
	}else{
		echo"error!!";
	}
	
?>