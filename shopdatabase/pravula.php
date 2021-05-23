<!DOCTYPE html>
<html>
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

			<div class="content-box">

				

				

				<h4>Правила</h4>

				<p>Користуючись нашими сервісами, ви довіряєте нам свою інформацію. Ми розуміємо, що це велика відповідальність, і докладаємо всіх зусиль, щоб захистити ваші дані й дати вам змогу керувати ними.</p>

				<ol>
					<li>Обробка персональних данних</li>
					<li>Обробка місцезнаходження</li>
					<li>Обробка IP адресу та інше</li>
			
					
				</ol>

				

			</div>

		</div>

	</div>

	<div class="row footer">
		<div class="col-md-6">
			<ul class="footer-nav">
				<li><a href="content.php">Гарантії</a></li>
				<li><a href="pravula.php">Правила</a></li>
				<li><a href="dostavka.php">Доставка</a></li>
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
