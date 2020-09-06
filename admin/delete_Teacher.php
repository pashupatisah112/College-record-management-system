<?php
    include('admin_session.php');
    include('../dbconnect.php');
	$sid=$_GET['id'];
	$query="DELETE FROM `teacher` WHERE `SN.`='$sid'";
	$run=mysqli_query($con,$query);
	if($run==true){
		?>
		<script>alert('Data deleted successfully')</script>
		<?php
		header('location:teacher_List.php');
	}else{
		echo"error!!";
	}
	
?>