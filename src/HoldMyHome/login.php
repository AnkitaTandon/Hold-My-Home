<?php
    include 'dbconnect.php';
	if(isset($_POST['signUp'])){
        $name=$_POST['name'];
        $numfield=$_POST['password'];
        $mailfield=$_POST['email'];
		
		$sql = "Select * from login where email = '$mailfield'";
        $result = mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result); 

        if($num == 0){
			$sql= "INSERT into login(name,pwd,email) values('$name','$numfield','$mailfield');"; 
                mysqli_query($conn, $sql);
                header("Location:home.html");
                exit();
        }
        else{
            echo '<div class="alert alert-danger" role="alert">You already have an account with us. Please login!<div>';
        }
    }

	if(isset($_POST['signIn'])){
		$numfield=$_POST['password'];
        $mailfield=$_POST['email'];

		$sql= "SELECT pwd from login where email='$mailfield';";
		$result=mysqli_query($conn, $sql);
        $num = mysqli_num_rows($result); 
        $row = $result->fetch_assoc();
	
        if($num != 0){
            if($numfield != $row['pwd']){
                // echo '<div class="alert alert-danger" role="alert">Password is incorrect!';
                echo '<script>alert("Password is incorrect!")</script>';
            }
            else{
                header("Location:home.html");
                exit();
            }
        }
    else{
            // echo '<div class="alert alert-danger" role="alert">You don\'t have an account with us. Please signup!<div>';
            echo '<script>alert("You don\'t have an account with us. Please signup!")</script>';
        }
	}
?>

<html>
    <head>
	    <title>Login</title>
	    <link rel="stylesheet" type="text/css" href="Login.css">
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>

    <body scrolling= "no">
        <h1 style="text-align: center;font-family: cursive, sans-serif; color:whitesmoke">Hold My Home</h1>
        <div class="container" id="container">
            <div class="form-container sign-up-container">

                <form action="login.php" method="post">
	                <h1>Create Account</h1>
	                <div class="social-container">
		                <a id="anc" href="https://www.facebook.com/" class="social"><i class="fa fa-facebook"></i></a>
		                <a id="anc" href="https://accounts.google.com/servicelogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social"><i class="fa fa-google"></i></a>
		                <a id="anc" href="https://www.linkedin.com/login?fromSignIn=true&trk=guest_homepage-basic_nav-header-signin" class="social"><i class="fa fa-linkedin"></i></a>
	                </div>
	                <span>or use your email for registration</span>
	                <input type="text" name="name" placeholder="Name" style="font-family: cursive;" required>
	                <input type="email" name="email" placeholder="Email" style="font-family: cursive;" required>
	                <input type="password" name="password" placeholder="Password" style="font-family: cursive;" id="pwd" required>
					<label style="font-size: 13px; display: inline;">
						<input type="checkbox" onclick="myFunction()" name="showPwd"> Show Password
					</label>
	                <a href="home.html"><button type="submit" name="signUp">Sign Up</button></a>
                </form>
            </div>

            <div class="form-container sign-in-container" style="font-family: cursive;">
	            <form action="login.php" method="post">
		            <h1>Sign In</h1>
		            <div class="social-container">
		                <a id="anc" href="https://www.facebook.com/" class="social"><i class="fa fa-facebook"></i></a>
		                <a id="anc" href="https://accounts.google.com/servicelogin/signinchooser?flowName=GlifWebSignIn&flowEntry=ServiceLogin" class="social"><i class="fa fa-google"></i></a>
		                <a id="anc" href="https://www.linkedin.com/login?fromSignIn=true&trk=guest_homepage-basic_nav-header-signin" class="social"><i class="fa fa-linkedin"></i></a>
	                </div>
	                <span>or use your account</span>
	                <input type="email" name="email" placeholder="Email" required>
	                <input type="password" name="password" placeholder="Password" required>
	                <a id="anc" href="#">Forgot Your Password ?</a>

					<a href="home.html"><button type="submit" name="signIn">Sign In</button></a>
	                
	            </form>
            </div>
            <div class="overlay-container">
	            <div class="overlay">
		            <div class="overlay-panel overlay-left">
			            <h1>Welcome Home!</h1>
			            <p>To keep connected with us, please login with your personal info</p>
			            <button class="ghost" id="signIn">Sign In</button>
		            </div>
		            <div class="overlay-panel overlay-right">
			            <h1>Hey There!</h1>
			            <p>Enter your details and start journey with us</p>
			            <button class="ghost" id="signUp">Sign Up</button>
		            </div>
	            </div>
            </div>
        </div>

		<script>
			function myFunction() {
  				var x = document.getElementById("pwd");
  				if (x.type === "password") {
   					 x.type = "text";
  				} else {
    			x.type = "password";
  			}
		} 
		</script>

        <script type="text/javascript">
	        const signUpButton = document.getElementById('signUp');
	        const signInButton = document.getElementById('signIn');
	        const container = document.getElementById('container');

	        signUpButton.addEventListener('click', () => { container.classList.add("right-panel-active"); });
	        signInButton.addEventListener('click', () => { container.classList.remove("right-panel-active"); });
        </script>
	<section class="footer" style="color:white">
    <p>Home is where the happiness begins </p>
        
    </section>

    </body>
</html>