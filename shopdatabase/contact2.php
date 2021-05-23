<!DOCTYPE html>

	<?php 



$PIB  = $_POST['PIB'];
$Mail = $_POST['Mail'];
$Mes = $_POST['Mes'];


$db_host = "127.0.0.1"; 
$db_user = "root";
$db_password = ""; 
$db_base = 'ITdata'; 
$db_table = "Contact"; 

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

try {
   
    $db = new PDO("mysql:host=$db_host;dbname=$db_base", $db_user, $db_password);
   
    $db->exec("set names utf8");
} catch (PDOException $e) {
    
    print "Помилка!: " . $e->getMessage() . "<br/>";
}

//$dat = array( 'ClientName ' => "Марина", 'Product' => "Навушники Sven 312b", 'Data' => "20200606", 'Price' => "2300",'Comment' => "nice" ); 


$dat = array('PIB' => $PIB, 'Mail' => $Mail,'Mes' => $Mes ); 
$query = $db->prepare("INSERT INTO $db_table (PIB, Mail, Mes) values (:PIB, :Mail, :Mes)");

$query->execute($dat);

?>
<div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
  This is an alert box.
</div>
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

			<div id="map_canvas"></div>

		</div>

	</div>

	<div class="row">

		<div class="col-md-6">

			<div class="checkout-box">

				<h2>Контакти</h2>

				<p>Якщо ви хочете з нами звязатись, заповніть цю форму, або дзвоніть по номеру якій вказаний на сторінці. </p>

				<form action="" method="post">
					<div class="form-group has-error">
						<label class="control-label">Ім'я <span class="mand">*</span></label>
						<input class="form-control" type="text" name="PIB">
						<span class="help-inline">Something may have gone wrong</span>
					</div>


					<div class="form-group">
						<label class="control-label">Пошта <span class="mand">*</span></label>
						<input class="form-control" type="text" name="Mail">
						<span class="help-inline">Something may have gone wrong</span>
					</div>

					<div class="form-group">
						<label class="control-label">Повідомлення <span class="mand">*</span></label>
						<textarea class="form-control" name="Mes"></textarea>
					</div>
					<div class="form-group">
						<div class="alert alert-danger" role="alert">
							Заповніть поля: Ім'я
						</div>
					</div>
					<div class="form-group">
					  <input type="submit" value="Відправити"/>
					</div>

				</form>

			</div>

		</div>
		

		

		<div class="col-md-6">

			<div class="checkout-box">

				<h2>Де ми знаходимося?</h2>

				<p class="address">
					Україна,<br />
					Чернівці,<br />
					вулиця Пилипа Орлика,<br />
					дім 42,<br>
					офіс №501 <br>
					індекс: 52000<br />
					
				</p>

				<h2>Дзвоніть</h2>

				<p class="tel"><a href="tel:01010 101 0100">+38-095-001-23-41</a></p>

			</div>

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

<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="assets/templates/theme/js/bootstrap.min.js"></script>
<script src="assets/templates/theme/js/jquery.ui.map.js"></script>
<script src="assets/templates/theme/js/contact.js"></script>
<script src="assets/templates/theme/js/kors.js"></script> 
</body>
</html>
