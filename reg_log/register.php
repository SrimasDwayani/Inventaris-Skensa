<!DOCTYPE html>
<html>
<head>
	<title>register</title>
	<style>
		body {
		  font-family: Arial, Helvetica, -serif;
		  background-image: url(../img/gam.jpg);
		  height: 400px;
		  width: 320px;
		  margin-left: 530px;
		  margin-top: 100px;
		}

		* {
		  box-sizing: border-box;
		}

		/* Add padding to containers */
		.container{
		  padding: 16px;
		  background-color:white;
		  border:0px solid black;
		  box-shadow: 0 0 10px 5px black;
		  opacity: 0.9;
    	  filter: alpha(opacity=40);
		}

		.box-login {
			display: flex;
			justify-content: space-between;
			margin-bottom: 15px;
			border-bottom: 2px solid black;
			padding: 8px 0;
		}

		.box-login i {
			font-size: 20px;
			color: black;
		}

		.box-login input {
			width: 100%;
			padding: 0 10px;
			background: none;
			border: none;
			outline: none;
			color: black;
			font-size: 18px;
		}

		.box-login input:placeholder {
			color: black;
		}

		/* Overwrite default styles of hr */
		hr {
		  border: 1px solid #f1f1f1;
		  margin-bottom: 25px;
		}

		/* Set a style for the submit button */
		.registerbtn {
		  background-color: #4CAF50;
		  color: black;
		  padding: 16px 20px;
		  margin: 8px 0;
		  border: none;
		  cursor: pointer;
		  width: 100%;
		  opacity: 0.9;
		}

		.registerbtn:hover {
		  opacity: 1;
		}
		
		/* Add a blue text color to links */
		h1, a {
		  color: dodgerblue;
		}

		/* Set a grey background color and center the text of the "sign in" section */
		.signin {
		  background-color: #f1f1f1;
		  text-align: center;
		}

		.daftar{
			border:none;
			background-color:dodgerblue;
			color: white;
			font-weight: bold;
			text-decoration: none;
			padding:10px;
		}
	</style>
	<!-- font awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<!-- end font awesome -->
</head>
<body>
<center>
	<form action="proses.php" method="post">
	  <div class="container">
	    <h1>Register</h1>
	    <p>Please fill in this form to create an account.</p>
	    <hr>

	    <div class="box-login">
			<i class="fas fa-user"></i>
			<input type="text" name="nama" placeholder="Name" required="">
		</div>


		<div class="box-login">
			<i class="fas fa-envelope"></i>
			<input type="number" name="nis" placeholder="NIS" required="">
		</div>


		<div class="box-login">
			<i class="fas fa-lock"></i>
			<input type="text" name="password" placeholder="Password" required="">
		</div>
		<hr>

	    <button class="daftar" type="submit" name="register">DAFTAR</button>

	    <p>Already have an account? <a href="../index.php">Sign in</a>.</p>
	  </div>
	</form>
</center>
</body>
</html>