<?php
    session_start();
    if(isset($_SESSION['tid'])){
		header('location:profile_Teacher.php');
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
			.button_style{
				width:100px;
				font-style:none;
				padding-top:3px;
				padding-left:3px;
			}
			a{
				text-decoration:none;
			}
			
		</style>
	</head>
	<body>
        <div class="header">
            <h1>Welcome To Teacher Section</h1>
        </div>
		<div class="main_div">
		    <div class="logo_div">
			    <img src="../assets/logo.png">
			</div>
			<div class="login_div">
                <form method="post" action="profile_Teacher.php">
				    <h2>Sign In To Your Account</h2>
				    <p>Email:</p>
				    <input type="email" name="mail" required="required" placeholder="@example.com" size="30">
					<p>Password:</p>
					<input type="password" name="pass" required="required" placeholder="password" size="30"><br><br>
					<input type="submit" name="login" value="Login" size="20">
				</form>
				<a href="signupform_Teacher.php">Sign Up</button>
				<a href="../index.php"><div class="button_style">Cancel</div></a>
			</div>
		</div>
	</body>
</html>
<?php
    if(isset($_POST['login'])){
        include('../dbconnect.php');
	    $email=$_POST['mail'];
	    $password=$_POST['pass'];
	    $query="SELECT * FROM `teacher` WHERE `Email`='$email' AND `Password`='$password'";
	    $run=mysqli_query($con,$query);
		
	    $row=mysqli_num_rows($run);
		if($row<1){
		?>
		    <script>
		        alert('username or password do not match!!');
				window.open('home_Teacher.php','self');
		    </script>
		<?php
	    }else{
	        $info=mysqli_fetch_assoc($run);
		    $id=$info['SN.'];				
		    $_SESSION['tid']=$id;
		    header('location:profile_Teacher.php');
		}
	}
?>