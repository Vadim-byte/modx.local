<!DOCTYPE html>

	<?php 


$ClientName  = $_POST['ClientName'];
$Product = $_POST['Product'];
$Data = $_POST['Data'];
$Price = $_POST['Price'];
$RTP = $_POST['RTP'];
$Comment = $_POST['Comment'];

$db_host = "127.0.0.1"; 
$db_user = "root";
$db_password = ""; 
$db_base = 'ITdata'; 
$db_table = "Order"; 

$mysqli = new mysqli($db_host, $db_user, $db_password, $db_base);

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

/*try {
   
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
   
    $db->exec("set names utf8");
} catch (PDOException $e) {
    
    print "Помилка!: " . $e->getMessage() . "<br/>";
}

$dat = array( 'ClientName ' => "Марина", 'Product' => "Навушники Sven 312b", 'Data' => "20200606", 'Price' => "2300",'Comment' => "nice" ); 


//$dat = array('Data' => $Data, 'Price' => $Price,'Comment' => $Comment ); 
$query = $db->prepare("INSERT INTO $db_table (ClientName, Product, Data, Price, RTP, Comment ) values (:ClientName, :Product, :Data, :Price, :Comment)");

$query->execute($dat);
 */
?>

</html>
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
					
				</div>
			</div>
		</div>
	</div>

	<!-- Menu -->

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
			        <li><a href="tehnika.php">Техніка</a></li>
			        <li><a href="aks.php">Аксесуари</a></li>
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

			<table class="basket-table">
				<thead>
					<tr>
						<th colspan="2"></th>
					    
						<th>Загальна кількість позицій</th>
						
						<th colspan="2">Загальна ціна                 </th>
						<th colspan="3"></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="image"><a ><img src="assets/templates/theme/img/all1.jpg" alt="Ibiza Lips" /></a></td>
						<td class="title"><a  </a></td>
						<td class="title"id="tov1" ></td>
					    
						
						<td class="title" id="tov2"></td>
						
					</tr>
					
				</tbody>
			</table>

		

			<p class="actions">
				<a class="btn btn-blank" href="index1.php">Продовжити покупки</a>
				<a class="btn btn-blank delete">Очистити кошик</a>
				<a class="btn btn-primary" href="check1.php" >Оформити замовлення</a>
				
			</p>

		</div>

	</div>


	

	<!-- Basket -->
	  


	<!-- Related Products -->

	<div class="row">

		<div class="col-md-12">

			<h2>Новинки:</h2>

		</div>

	</div>

	<!-- Product Listing -->

	<div class="row">

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product1.php"><?php echo $product['ProductName'];?></a></p>
			<a href="product1.php"><img class="image" src="assets/templates/theme/img/p1.jpg" alt="A Life Style" /></a>

			<p class="price">
				<?php echo $product['Price']; echo " грн";?>
				<button class= "btn btn-addcart btn-primary"  data-id="p1"><span  data-id="p1" class="entypo cart"></span></button>
			</p>

		</div>

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product7.php"><?php echo $aks2['ProductName'];?></a></p>

			<a href="product7.php"><img class="image1" src="assets/templates/theme/img/a2.jpg" alt="Amnesia Community" /></a>

			<p class="price">
				<?php echo $aks2['Price']; echo " грн";?>
				<button class= "btn btn-addcart btn-primary"  data-id="p8"><span  data-id="p8" class="entypo cart"></span></button>
			</p>

		</div>

		<div class="col-md-4 product-listing">

			<p class="title"><a href="product2.php"><?php echo $product3['ProductName'];?></a></p>

			<a href="product2.php"><img class="image" src="assets/templates/theme/img/p3.jpg" alt="Carnal" /></a>

			<p class="price">
				<?php echo $product3['Price']; echo " грн";?>
				<button class= "btn btn-addcart btn-primary"  data-id="p3"><span  data-id="p3" class="entypo cart"></span></button>
			</p>

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
