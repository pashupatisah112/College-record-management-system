<?php
    session_start();
	if(isset($_SESSION['uid'])){
		header('location:home_admin.php');
	}
?>
<html>
    <head>
	    <title>Home</title>
		<link rel="stylesheet" href="../css/style_index.css">
		<style>
		    p
			{
				font-size:20px;
				color:maroon;
			}
			a{
				text-decoration:none;
			}
		</style>
	</head>
	<body>
        <div class="header">
            <h1>Welcome To Student Management Portal</h1>
        </div>
		<div class="main_div">
		    <div class="logo_div">
			    <img src="../assets/logo.png">
			</div>
			<div class="login_div">
                <form method="post">
				    <h2>Welcome Admin</h2>
				    <p>Email:</p>
				    <input type="email" name="mail" required="required" placeholder="@example.com" size="30">
					<p>Password:</p>
					<input type="password" name="pass" required="required" placeholder="password" size="30"><br><br>
					<input type="submit" name="submit" value="Login" size="20">
				</form>
				<a href="../index.php"><div class="button_style">Go Back</div></a>
			</div>
		</div>
	</body>
<html>
<?php
    include('../dbconnect.php');
    if(isset($_POST['submit'])){
        session_start();
	    $email=$_POST['mail'];
	    $password=$_POST['pass'];
				
	    $query="SELECT * FROM `admin` WHERE `Email`='$email' AND `Password`='$password'";
		$run=mysqli_query($con,$query);
				
		    $row=mysqli_num_rows($run);
			if($row<1){
		?>
			<script>alert('username or password do not match!!');
			window.open('admin_login.php','_self');
			</script>
		<?php
			}else{
	     		$data=mysqli_fetch_assoc($run);
				$id=$data['SN.'];				
			    $_SESSION["uid"]=$id;
                header('location:home_admin.php');				
			}
	}
?>	