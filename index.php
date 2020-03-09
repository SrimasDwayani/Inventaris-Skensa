<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login page</title>
	<link rel="stylesheet" href="css/cssnya.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">

</head>
<body>
	<form action="reg-log/login.php" method="post">
	<div class="login">
		<div class="avatar">
			<i></i>
		</div>

		<h2>Login Form</h2>

		<div class="box-login">
			<i class="fas fa-envelope"></i>
			<input type="number" name="nis" placeholder="NIS">
		</div>


		<div class="box-login">
			<i class="fas fa-lock"></i>
			<input type="password" name="password" placeholder="Password">
		</div>
		<br>

		<button type="sumbit" class="btn-login">
			login
		</button>

		<div class="bottom">
			<a href="reg-log/register.php">Register</a>
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
		    }else{
		      alert('Email dan Password harus di isi !');
		      return false;
		    }
		  }
		</script>
</body>
</html>