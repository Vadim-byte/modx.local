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
			        <li> <a href="tehnika.php">Техніка</a></li>
			        <li class="active"> <a href="aks.php">Аксесуари</a></li>
			        <li>
			          <a href="blog-listing.php">Новини</a>
			        </li>					
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Інше<b class="caret"></b></a>
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

			<h1 class="catalogue-title">Техніка</h1>

		</div>

	</div>

	<!-- Product Listing -->

	<div class="row">

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product6.php"><?php echo $aks1['ProductName'];?></a></p>

			<a href="product6.php"><img class="image1" src="assets/templates/theme/img/a1.jpg" alt="I Was There" /></a>

			<p class="price">
				<?php echo $aks1['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p7"><span  data-id="p7" class="entypo cart"></span></button>
			</p>

		</div>

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product7.php"><?php echo $aks2['ProductName'];?></a></p>

			<a href="product7.php"><img class="image1" src="assets/templates/theme/img/a2.jpg" alt="100%" /></a>

			<p class="price">
				<?php echo $aks2['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p8"><span  data-id="p8" class="entypo cart"></span></button>
			</p>

		</div>

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product8.php"><?php echo $aks3['ProductName'];?></a></p>

			<a href="product8.php"><img class="image1" src="assets/templates/theme/img/a3.jpg" alt="100% (with buttons)" /></a>

			<p class="price">
				<?php echo $aks3['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p9"><span  data-id="p9" class="entypo cart"></span></button>
			</p>

		</div>

	</div>

	<div class="row">

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product9.php"><?php echo $aks4['ProductName'];?></a></p>

			<a href="product9.php"><img class="image1" src="assets/templates/theme/img/a4.jpg" alt="A Life Style" /></a>

			<p class="price">
				<?php echo $aks4['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p10"><span  data-id="p10" class="entypo cart"></span></button>
			</p>

		</div>

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product10.php"><?php echo $aks5['ProductName'];?></a></p>

			<a href="product10.php"><img class="image1" src="assets/templates/theme/img/a5.jpg" alt="All Night Long" /></a>

			<p class="price">
				<?php echo $aks5['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p11"><span  data-id="p11" class="entypo cart"></span></button>
			</p>

		</div>

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product11.php"><?php echo $aks6['ProductName'];?></a></p>

			<a href="product11.php"><img class="image1" src="assets/templates/theme/img/a6.jpg" alt="Amnesia Community" /></a>

			<p class="price">
				<?php echo $aks6['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p12"><span  data-id="p12" class="entypo cart"></span></button>
			</p>

		</div>

	</div>
	
	<div class="row">

		<div class="col-md-12">

			<h1 class="catalogue-title">Дивітся також:</h1>

		</div>

	</div>

	<div class="row">

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product10.php">Для прослуховування музики</a></p>

			<a href="product10.php"><img class="image1" src="assets/templates/theme/img/a5.jpg" alt="Cosmic" /></a>

			<p class="price">
				<?php echo $aks5['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p11"><span  data-id="p11" class="entypo cart"></span></button>
			</p>

		</div>

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product8.php">Для серйозної гри</a></p>

			<a href="product8.php"><img class="image1" src="assets/templates/theme/img/a3.jpg" alt="Dart" /></a>

			<p class="price">
				<?php echo $aks3['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p9"><span  data-id="p9" class="entypo cart"></span></button>
			</p>

		</div>

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product9.php">Для тендітних дівчат</a></p>

			<a href="product9.php"><img class="image1" src="assets/templates/theme/img/a4.jpg" alt="Forever" /></a>

			<p class="price">
			<?php echo $aks4['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p10"><span  data-id="p10" class="entypo cart"></span></button>
			</p>

		</div>

	</div>

	<div class="row">

		<div class="col-md-12">

			<ul class="pagination">
			    <li><a href="#">Prev</a></li>
			    <li><a href="#">1</a></li>
			    <li><a href="#">2</a></li>
			    <li><a href="#">3</a></li>
			    <li><a href="#">4</a></li>
			    <li><a href="#">5</a></li>
			    <li><a href="#">Next</a></li>
			</ul>

		</div>

	</div>

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
