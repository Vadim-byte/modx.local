

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

/*
$aks3 = mysqli_fetch_assoc($result);
$aks3 = mysqli_fetch_assoc($result);
$aks3 = mysqli_fetch_assoc($result);


/*print_r($product);
echo "<br>";

$product = mysqli_fetch_assoc($result);
print_r($product);
echo "<br>";

echo $product['ProductName'];
*/



 $phpVar = "<script>echo(jsvar);</script>";
   



?>

<!DOCTYPE html>
<!-- <html>

<form action="view_text.php" method="POST">
 <input type="text" name="search" value="">
 <input type="submit" value="OK">
 </form> -->
 
 

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
			        <li class="active"><a href="index1.php">Головна</a></li>
			        <li><a href="tehnika.php">Техніка</a></li>
			        <li><a href="aks.php">Аксесуари</a></li>
			        <li>
			          <a href="blog-listing.php">Новини</a>
			        </li>					
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Інше<b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="content.php">Гарантії</a></li>
						<li><a href="content.php">Правила</a></li>
			            <li><a href="content.php">Доставка</a></li>
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

			<h1 class="catalogue-title">Новинки</h1>

		</div>

	</div>

	<!-- Product Listing -->

	<div class="row">

	 	<div class="col-md-4 col-sm-4 product-listing">
		
		

		
			<p class="title"><a href="product1.php"><?php echo $product['ProductName'];?></a></p>

			<a href="product1.php"><img class="image" src="assets/templates/theme/img/p1.jpg" alt="Ibiza Lips" /></a>

			<p class="price">
				<?php echo $product['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p1"><span  data-id="p1" class="entypo cart"></span></button>
			</p>

		</div>

		<div class="col-md-4 col-sm-4 product-listing">

			<p class="title"><a href="product7.php"><?php echo $aks2['ProductName'];?></a></p>

			<a href="product7.php"><img class="image1" src="assets/templates/theme/img/a2.jpg" alt="Ibiza Banana" /></a>

			<p class="price">
				<?php echo $aks2['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p8"><span  data-id="p8" class="entypo cart"></span></button>
				<!-- <a class="btn btn-addcart btn-primary" href="check1.php"><span class="entypo cart"></span></a> !-->
			</p>

		</div>

		<div class="col-md-4 col-sm-4 product-listing">
            <p class="title"><a href="product2.php"><?php echo $product3['ProductName'];?></a></p>
			<!-- <p class="title"><a href="product2.php"><?php echo $product3['ProductName'];?></a></p> -->

			<a href="product2.php"><img class="image" src="assets/templates/theme/img/p3.jpg" alt="I Was There" /></a>

			<p class="price">
				<?php echo $product3['Price']; echo " грн";?> 
				<button class= "btn btn-addcart btn-primary"  data-id="p3"><span  data-id="p3" class="entypo cart"></span></button>
				<!-- <a class="btn btn-addcart btn-primary" href="check1.php"><span class="entypo cart"></span></a> !-->
			</p>

		</div>

	</div>

	

	<div class="col-md-12">

			<div class="content-box">

				<h1>Про наш магазин</h1>

				<p>Ми VadimIT Store - МАГАЗИН з великої літери. Займаємось новою та б/в технікою, так акссесуарами. Завжди готові допомгти з вибором. Бренд VadimIT розвивається як омніканальній (офлайн і онлайн торгівля) і в 2020 році відзначив 26 років роботи. VadimIT входить в топ-вибір покупців з 1998 року і лідирує в категорії магазинів компютерної техніки за рівнем впізнаваності бренду, відвідування і покупок.

Розвиток мережі почався з відкриття першого магазину в 1994 році в Чернівцях. У 1997 році торгова марка стала офіційним роздрібним торговцем, а у Києві з'явився супермаркет на вул. Дегтярівській, 328. Станом на січень 2021 року мережа налічує 22 магазини загальною торговою площею 15 тис. кв. м. Магазини розташовані в 13 обласних і районних центрах України. У 2012 році VadimIT перейшов на омніканальну платформу управління бізнесом, яка поєднує онлайн і офлайн формати торгівлі.

Торгова мережа VadimIT — учасник Euronics, найбільшої закупівельної групи електроніки та побутової техніки, що працює з 35 країнами Європи.</p>

				<h3>У нас ви зможете знайти:</h3>

				<ul>
					<li>Компютери</li>
					<li>Ноутбуки</li>
					<li>Комплектуючі</li>
					<li>Мишки</li>
					<li>Навушники</li>
					<li>Клавіатури</li>
					<li>Адаптери</li>
					<li>Роутери</li>
					<li>Колонки</li>
					<li>Та багато інших акссесуарів!!!</li>
				</ul>

				<h4>Наше місцезнаходження:</h4>

				<p>Наш основний магазин знаходится по адресі м.Чернівці, вул. Пилипа Орлика 42.</p>

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
	
<p class="mini-basket-summary1">
								<br/>
								<span><a id="tov3">123</span>
							</p>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/templates/theme/js/bootstrap.min.js"></script>
<script src="assets/templates/theme/js/kors.js"></script>
</body>
</html>
?>