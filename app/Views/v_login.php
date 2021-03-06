<html>
	<head>
		<title>Login - Kema Memilih</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
		<!-- Google fonts NUNITO -->
		<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

	<style>
		.login-body{
			height: 100%;
			background: rgb(157,65,65);
		}
		.login-cont{
			height: 100%;
			display: flex;
			justify-content: center;
			align-items: center;
		}
		.login-jumb{
			background: rgb(229,206,206);
			width: 612px;
			height: 395px;
		}
		.jumbotron h1{
			font-family: 'Nunito', sans-serif;
			font-weight: 900;
			font-size: 36px;
			color: #452E2E;
		}
		.login-text{
			font-family: 'Nunito', sans-serif;
			font-style: normal;
			font-weight: 900;
			font-size: 18px;
			line-height: 25px;
			display: flex;
			align-items: center;
			color: #452E2E;
		}
		.masuk-btn{
			width: 150px;
			height: 50px;
			margin: 0 auto;
			padding: 0;
			display: inline-block;
			line-height: 50px;
			text-align: center;
			background: #452E2E;
			border-radius: 20px;
			font-family: Nunito;
			font-style: normal;
			font-weight: bold;
			font-size: 18px;
			line-height: 25px;
			color: #E5CECE;
		}

		.btn-work {
			width: 150px;
			height: 50px;
			margin: 0 auto;
			padding: 0;
			display: inline-block;
			line-height: 50px;
			text-align: center;
		}
		.form-input{
			height: 47px;
			background: #FFFFFF;
			border-radius: 15px;
		}
		.alert{
			margin-top: 30px;
		}
	</style>
	</head>
	<form method="POST" action="<?php echo base_url('Login/login_action');?>">
	<body class="login-body">
	<div class="container login-cont">
	<div class="jumbotron jumbotron-fluid login-jumb">
		<h1>Login</h1>
			<div class="form-group">
				<label for="npm" class="login-text">NPM:</label>
				<input type="text" class="form-control form-input" id="npm" placeholder="Masukkan NPM Anda" name="npm" required>
			</div>
			<div class="form-group">
				<label for="password" class="login-text">Password:</label>
				<input type="password" class="form-control form-input" id="password" placeholder="Masukkan password Anda" name="password" required>
			</div>
			<button type="submit" class="btn masuk-btn float-right">Masuk</button>
	</form>
	<?php if(!empty(session()->getFlashdata('gagal'))) { ?>
	<div class="alert alert-warning">
		<?php echo session()->getFlashdata('gagal'); ?>
	</div>
	<?php } ?>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>

