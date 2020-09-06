<?php
    include('admin_session.php');
?>
<html>
    <head>
	    <title>admin</title>
		<link rel="stylesheet" href="../css/style_index.css">
		<style>
		    p
			{
				font-size:20px;
				color:maroon;
			}
            a
			{
				text-decoration:none;
				color:maroon;
			}
			.logout_button
			{
				margin-left:300px;
				margin-top:20px;
				width:100px;
				height:30px;
				background-color:rgba(153,0,0,0.3);
				border-radius:10px 10px 10px 10px;
				padding-left:40px;
				padding-top:10px;
				
			}
			li:hover{
				font-size:20px;
			}
			.logout_button:hover
			{
				border:2px solid black;
			}
		</style>
	</head>
	<body>
        <div class="header">
            <h1>Welcome To Admin Dashboard</h1>
        </div>
		<div class="main_div">
		    <div class="logo_div">
			    <img src="../assets/logo.png">
			</div>
			<div class="login_div">
				  
					<h2>Teacher Section:</h2>
					<ul>
					    <li><a href="register_Teacher.php">Add New Teacher</a></li>
						<li><a href="teacher_List.php">See Full List</a></li>
					</ul>
				    <b>Quick Search:</b>
					<form action="search_Teacher.php" method="post">
			     	    <input type="text" name="teach_search" placeholder="Enter teacher's name" required="required">
		     		    <input type="submit" name="t_search" value="Search">
					</form>
					<h2>Student Section:</h2>
					<ul>
					    <li><a href="register_Student.php">Add New Student</a></li>
						<li><a href="student_List.php">See Full List</a></li>	
					</ul>
					<b>Quick Search:</b>
					<form action="search_Student.php" method="post">
					<input type="text" name="stud_search" placeholder="Enter student's name" required="required">
				    <input type="submit" name="s_search" value="Search">
			    <a href="admin_Logout.php"><div class="logout_button">Logout</div></a>
		    </div>
		</div>
	</body>
</html>