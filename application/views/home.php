<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Вход</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

	<style type="text/css">
		/* stylelint-disable selector-no-qualifying-type, property-no-vendor-prefix */

		body {
			padding-top: 40px;
			padding-bottom: 40px;
			background-color: #eee;
		}

		.form-signin {
			max-width: 330px;
			padding: 15px;
			margin: 0 auto;
		}
		.form-signin .form-signin-heading,
		.form-signin .checkbox {
			margin-bottom: 10px;
		}
		.form-signin .checkbox {
			font-weight: 400;
		}
		.form-signin .form-control {
			position: relative;
			-webkit-box-sizing: border-box;
			-moz-box-sizing: border-box;
			box-sizing: border-box;
			height: auto;
			padding: 10px;
			font-size: 16px;
		}
		.form-signin .form-control:focus {
			z-index: 2;
		}
		.form-signin input[type="email"] {
			margin-bottom: -1px;
			border-bottom-right-radius: 0;
			border-bottom-left-radius: 0;
		}
		.form-signin input[type="password"] {
			margin-bottom: 10px;
			border-top-left-radius: 0;
			border-top-right-radius: 0;
		}

	</style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<div class="container">

	<form class="form-signin" action="/shopping/list" method="get">
		<h2 class="form-signin-heading" style="text-align: center;">Вход в системата</h2>
		<br />
		<label for="inputEmail" class="sr-only">Потребител</label>
		<input type="email" id="inputEmail" class="form-control" placeholder="Потребител" autofocus>
		<label for="inputPassword" class="sr-only">Парола</label>
		<input type="password" id="inputPassword" class="form-control" placeholder="Парола">
		<div class="checkbox">
			<label>
				<input type="checkbox" value="remember-me"> Запомни ме
			</label>
		</div>
		<button class="btn btn-lg btn-primary btn-block" type="submit">Вход</button>
	</form>

</div> <!-- /container -->


</body>
</html>
