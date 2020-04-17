<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login page</title>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<style type="text/css">
		body {
			margin: 0;
			padding: 0;
			background-image: url(../img/gam2.jpg);
			background-position: center;
			background-repeat: no-repeat;
			background-attachment: fixed; 
			font-family: sans-serif;
		}

		.login {
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
			background-color: white;
			color: black;
			padding: 20px;
			width: 270px;
			box-shadow: 0 0 10px 5px black;
			opacity: 0.8;
		}

		.avatar {
			font-size: 50px;
			background: url(../img/logo1.jpg);
			width: 80px;
			height: 80px;
			line-height:80px ;
			text-align: center;
			position: fixed;
			left: 50%;
			top: 0;
			transform: translate(-50%, -50%);
			border-radius: 50%;
			color: #2c3e50;
		}

		.login h2 {
			text-align: center;
			color: black;
			padding-top: 10px;
			letter-spacing: 5px;
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

		.box-login input::placeholder {
			color: black;
		}

		.btn-login {
			width: 100%;
			background-color: black;
			color:white;
			padding: 10px;
			border: 1px solid white;
			font-weight: bold;
			font-size: 18px;
			letter-spacing: 5px;
			cursor: pointer;
			transition: 0.6s;
		}

		.btn-login:hover {
			background: gray;
			color: black;

		}

		.bottom {
			display: flex;
			justify-content: space-between;
			margin-top: 10px;
		}

		.bottom a {
			color: black;
			font-size: 14px;
			text-decoration: none;
		}

		.bottom a:hover {
			text-decoration: underline;
		}
	</style>
</head>
<body>
	<form action="login.php" method="post">
	<div class="login">
		<div class="avatar">
			<i></i>
		</div>

		<h2>Login Form</h2>

		<div class="box-login">
			<i class="fas fa-envelope"></i>
			<input type="number" name="nis" placeholder="NIS" required="">
		</div>


		<div class="box-login">
			<i class="fas fa-lock"></i>
			<input type="password" name="password" placeholder="Password" required="">
		</div>
		<br>

		<button type="sumbit" class="btn-login">
			login
		</button>

		<div class="bottom">
			<a href="register.php">Register</a>
			<a href="">Forgot Password</a>
		</div>
	</div>
	</form>
		<script type="text/javascript">
		  function validasi() {
		    var nis = document.getElementById("nis").value;
		    var password = document.getElementById("password").value;   
		    if (nis != "" && password!="") {
		      return true .
		      setTimeout(Swal.fire({
		        position: 'top-end',
		        icon: 'success',
		        title: 'LOGIN BERHASIL',
		        showConfirmButton: false}),10000
		      )
		    }
		  }
		</script>
</body>
