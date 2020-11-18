<html>
	<head>
		<title>Main Page</title>
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
	</style>
	</head>
	<body class="login-body">
	<div class="container login-cont">
	<div class="jumbotron jumbotron-fluid login-jumb">
		<h1>Logout</h1>
		<a class="btn btn-primary btn-lg" href="<?php echo base_url('Login/logout'); ?>" role="button">Logout</a>
</form>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	</body>
</html>

