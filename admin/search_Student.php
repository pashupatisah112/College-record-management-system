<?php
    include('admin_session.php');
    include('../dbconnect.php');
	$name=$_POST['stud_search'];
	$query="SELECT * FROM `student` WHERE `Fname` like '%$name%'";
	$run=mysqli_query($con,$query);
?>
<html>
    <head>
	    <title>Student Search Results</title>
		<link rel="stylesheet" href="../css/style_index.css">
		<style>
		    td
			{
				padding:3px;
			}
			button_cancel{
				position:absolute;
				left:400px;
				top:350px;
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
		<div class="main_div" style="color:maroon;">
		    <div class="logo_div">
			    <img src="../assets/logo.png">
			</div>
			<div class="login_div">
			    <h2>Student Search Results:</h2>
			    <table border="2px solid red" width="100%">
                    <tr>
				        <th>SN.</th>
					    <th>First Name</th>
					    <th>Last Name</th>
				        <th></th>
			        </tr>
			    <?php
			        $n=1;
			        while($data=mysqli_fetch_assoc($run)){ 
			    ?>
				    <tr>
				        <td><?php echo $n;?></td>
				        <td><?php echo $data['Fname']?></td>
					    <td><?php echo $data['Lname']?></td>
					    <td><a href="student_Details.php?sid=<?php echo $data['SN.'];?>">See Details</a></td>
				    <tr>
			    <?php
				    $n++;
			        }
			    ?>
			    </table>
				<a href="home_admin.php"><div class="button_cancel">Go Back</div></a>
			</div>
		</div>
	</body>
</html>