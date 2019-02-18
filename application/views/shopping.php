<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Списък за Пазаруване</title>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
	<!-- Optional theme -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>

	<style type="text/css">
		body {
			padding-top: 50px;
		}
		.main-page {
			padding: 40px 15px;
			text-align: center;
		}

	</style>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/shopping/list">Shopping List</a>
		</div>

		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav pull-right">
				<li><a href="/logout">Изход</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>

<div class="container">

	<div class="main-page">

		<h1>Списък за пазаруване</h1>
		<br /><br /><br />
		<p style="font-size: 15px;">Добавяне на продукти в списъка за пазаруване</p>
		<form class="form-inline" action="/shopping/add" method="post">
			<div class="form-group">
				<input type="text" class="form-control" id="product" name="product" placeholder="Име на продукт" style="width: 400px;" required>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="quantity" name="quantity" placeholder="Количество" style="width: 120px;" required>
			</div>
			<div class="form-group">
				<select class="form-control" id="measure" name="measure" required>
					<option value="">Единица</option>
					<option value="br">бр (брой)</option>
					<option value="kg">кг (килограм)</option>
				</select>
			</div>
			<button type="submit" class="btn btn-primary">Добави</button>
		</form>
	</div>
	<br /><br /><br />
		<div class="row">

			<?php if(empty($products)): ?>

				<p style="font-size: 17px; text-align: center;">В момента няма продукти за пазаруване, моля добавете от формата по горе.</p>

			<?php else: ?>

			<table class="table table-striped">
				<thead>
					<tr>
						<th class="col-md-1">#</th>
						<th class="col-md-7">Продукт</th>
						<th class="col-md-3">Количество</th>
						<th class="col-md-1">Действие</th>
					</tr>
				</thead>

				<tbody>
					<?php $br = 0; $kg = 0; foreach($products as $key => $product): ?>
					<tr>
						<td><?php echo ($key + 1); ?></td>
						<td><?php echo $product['product']; ?></td>
						<td><?php echo $product['quantity']; ?>  <?php

							if($product['measure'] == 'kg') {

								$kg += $product['quantity'];

								echo ($product['quantity'] == '1') ? "килограм" : "килограма";
							}

							if($product['measure'] == 'br') {

								$br += $product['quantity'];

								echo ($product['quantity'] == '1') ? "брой" : "броя";
							}

							?>
						</td>
						<td><a href="/shopping/delete/<?php echo $key; ?>">Изтрий</a></td>
					</tr>

					<?php endforeach; ?>
				</tbody>
				<tfoot>
					<tr>
						<th>Общо</th>
						<th><?php echo count($products); echo (count($products) == 1) ? ' продукт' : ' продукта' ;?></th>
						<th>
							<?php

							if($kg != 0 ){
								echo $kg;

								echo ($kg == 1) ? ' килограм' : ' килограма';
							}

							if($kg != 0 AND $br != 0){
								echo " и ";
							}

							if($br != 0 ){
								echo $br;

								echo ($br == 1) ? ' брой' : ' броя';
							}

							?>
						</th>
					</tr>
				</tfoot>
			</table>
			<?php endif; ?>
		</div>



</div><!-- /.container -->

</body>
</html>
