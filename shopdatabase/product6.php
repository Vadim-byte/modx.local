<!DOCTYPE html>

<?php


$db_host='127.0.0.1';
$db_name='ITdata';
$db_user='root';
$db_pass='';
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);

$result = $mysqli->query('SELECT * FROM `Product`');

$product = mysqli_fetch_assoc($result);
$product2 = mysqli_fetch_assoc($result);
$aks1 = mysqli_fetch_assoc($result);
$aks2 = mysqli_fetch_assoc($result);
$product3 = mysqli_fetch_assoc($result);
$aks3 = mysqli_fetch_assoc($result);
$product4 = mysqli_fetch_assoc($result);
$product5 = mysqli_fetch_assoc($result);
$product6 = mysqli_fetch_assoc($result);
$aks4 = mysqli_fetch_assoc($result);
$aks5 = mysqli_fetch_assoc($result);
$aks6 = mysqli_fetch_assoc($result);


/*print_r($product);
echo "<br>";

$product = mysqli_fetch_assoc($result);
print_r($product);
echo "<br>";

echo $product['ProductName'];
*/


?>
<html>
	<head>
		<title>VadimIT Store</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link href="assets/templates/theme/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="https://fonts.googleapis.com/css?family=Merriweather&amp;subset=cyrillic" rel="stylesheet">
		<link href="assets/templates/theme/css/entypo.css" rel="stylesheet" type="text/css">
		<link href="assets/templates/theme/css/686tees.css" rel="stylesheet" type="text/css">
	</head>
<body>

<div class="container">
	<div class="row header_row">
		<div class="col-md-4 col-sm-4">
			<a class="logo" href="index1.php">
				<span class="entypo heart"></span> VadimIT Store
			</a>
		</div>
		<div class="col-md-4 col-sm-5">
		</div>
		<div class="col-md-4 col-sm-3">
			<div class="row">
				<div class="col-md-6 col-md-offset-6 mini-basket">
					<p class="mini-basket-title">
					<a href="basket.php"><span class="entypo cart"></span> Кошик</a></p>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<p class="mini-basket-summary">
								Ціна<br />
								<span><a id="tov2"></span>
							</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<p class="mini-basket-summary">
								Товари<br />
								<span><a id="tov1"></span>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="row">

		<div class="col-md-12">

			<nav class="navbar navbar-default" role="navigation">
			  <div class="container-fluid">

			    <div class="navbar-header">
			      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-1">
			        <span class="sr-only">Меню</span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			        <span class="icon-bar"></span>
			      </button>
			    </div>

			    <div class="collapse navbar-collapse" id="navbar-collapse-1">
			      <ul class="nav navbar-nav">
			        <li><a href="index1.php">Головна</a></li>
			        <li class="active"><a href="tehnika.php">Техніка</a></li>
			        <li><a href="aks.php">Аксесуари</a></li>
			        <li>
			          <a href="blog-listing.php">Новини</a>
			        </li>					
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Інше <b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="content.php">Гарантії</a></li>
						<li><a href="pravula.php">Правила</a></li>
			            <li><a href="dostavka.php">Доставка</a></li>
			            <li><a href="faq.php">Оплата</a></li>
						<li><a href="contact.php">Контакти</a></li>
			          </ul>
			        </li>

			      </ul>
			      <form class="navbar-form navbar-right clearfix" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Знайти">
			        </div>
			        <button type="submit" class="btn btn-default"><span class="entypo search"></span></button>
			      </form>
			    </div>
			  </div>
			</nav>

		</div>

	</div>

	<!-- Body -->

	<div class="row">

		<div class="col-md-12">

			<h1><a href="product.php"><?php echo $aks1['ProductName'];?></h1>

		</div>

	</div>

	<!-- Product Detail -->

	<div class="row">

		<div class="col-md-8">

			<img class="product-image" src="assets/templates/theme/img/a1.jpg" alt="Ibiza Lips" />

			<div class="row">

				<div class="col-md-3">
					<a href=""><img class="product-thumb" src="assets/templates/theme/img/a11.jpg" alt="Ibiza Lips" /></a>
				</div>

				<div class="col-md-3">
					<a href=""><img class="product-thumb" src="assets/templates/theme/img/a111.jpg" alt="Ibiza Lips" /></a>
				</div>

			</div>

		</div>

		<div class="col-md-4">
		    

			<h1 class="catalogue-title">Опис:</h1>
			
			<h3 class="catalogue-title">Вартість: <?php echo $aks1['Price']; echo " грн";?></h3>

			<h3>Гарантія: <?php echo $aks1['Warranty']; echo " місяців";;?></h3>

			<h3>ID товару: <?php echo $aks1['id'];?></h3>
			
			<h3>Про товар: <br><?php echo $aks1['About'];?></h3>
			
			<a class="btn btn-addcart btn-primary" href="check1.php"><span class="entypo cart"></span> Придбати!</a> 
			<br></br>
			<p>
				<a class="social-icon" href="https://www.instagram.com/ivadinov/"><span class="entypo-social c-facebook"></span></a>
				<a class="social-icon" href="https://www.instagram.com/ivadinov/"><span class="entypo-social c-twitter"></span></a>
				<a class="social-icon" href="https://www.instagram.com/ivadinov/"><span class="entypo-social c-pinterest"></span></a>
				<a class="social-icon" href="https://www.instagram.com/ivadinov/"><span class="entypo-social c-googleplus"></span></a>
			</p>

		</div>

	</div>

	<!-- Related Products -->

	
	<div class="row footer">

		<div class="col-md-6">
	
			<ul class="footer-nav">
			
				<li><a href="content.php">Гарантії</a></li>
				<li><a href="content.php">Правила</a></li>
				<li><a href="content.php">Доставка</a></li>
				<li><a href="contact.php">Контакти</a></li>
			</ul>
		</div>
		<div class="col-md-6 footer-right"><p>&copy; VadimIT Store</p></div>
	</div>

</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/templates/theme/js/bootstrap.min.js"></script>
<script src="assets/templates/theme/js/kors.js"></script>
</body>
</html>
