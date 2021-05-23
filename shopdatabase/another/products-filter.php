<!DOCTYPE html>
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
					<a href="basket.php"><span class="entypo cart"></span> Корзина</a></p>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6">
							<p class="mini-basket-summary">
								Цена<br />
								<span>0.00 р.</span>
							</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6">
							<p class="mini-basket-summary">
								Товары<br />
								<span>0</span>
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
			        <li  class="active"><a href="products-men.php">Техника</a></li>
			        <li><a href="products-men.php">Женская одежда</a></li>
			        <li>
			          <a href="blog-listing.php">Новини</a>
			        </li>					
			        <li class="dropdown">
			          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Інше<b class="caret"></b></a>
			          <ul class="dropdown-menu">
			            <li><a href="index-alt.php">Гарантии</a></li>
						<li><a href="index-alt.php">Правила</a></li>
			            <li><a href="pricing.php">Доставка</a></li>
			            <li><a href="faq.php">Оплата</a></li>
						<li><a href="faq.php">Контакты</a></li>
			          </ul>
			        </li>

			      </ul>
			      <form class="navbar-form navbar-right clearfix" role="search">
			        <div class="form-group">
			          <input type="text" class="form-control" placeholder="Найти">
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

			<h1 class="catalogue-title">Мужская одежда</h1>

		</div>

	</div>

	<!-- Product Listing -->

	<div class="row">
		<div class="col-md-3">
			
			<form id="eFiltr" class="eFiltr eFiltr_form form-horizontal">
				
				<div class="eFiltr_cat">
					<div class="panel panel-default">
						<div class="panel-heading">Основной цвет</div>
						<div class="panel-body">
							<div class="radio">
								<label>
									<input type="radio" name="survey" id="Radios1" value="Yes">Белый<span class="badge">2</span>
							  </label> 
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="survey" id="Radios2" value="Yes">Черный<span class="badge">2</span>
							  </label> 
							</div>
							<div class="radio">
								<label>
									<input type="radio" name="survey" id="Radios3" value="Yes">Серый<span class="badge">2</span>
							  </label>
							</div>
						</div>
					</div>

					<div class="panel panel-default">
						<div class="panel-heading">Размеры</div>
						
						<div class="panel-body">
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">XS<span class="badge">2</span>
								</label>
							</div>
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">S<span class="badge">1</span>
								</label>
							</div>
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">M<span class="badge">1</span>
								</label>
							</div>
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">L<span class="badge">1</span>
								</label>
							</div>
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">XL<span class="badge">1</span>
								</label>
							</div>							
						</div>
					</div>
					
					<div class="panel panel-default">
						<div class="panel-heading">Тип ткани</div>
						<div class="panel-body">
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">Батик<span class="badge">12</span>
								</label>
							</div>
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">Холст<span class="badge">15</span>
								</label>
							</div>
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">Фланель<span class="badge">35</span>
								</label>
							</div>							
							
						</div>
					</div>	


					<div class="panel panel-default">
						<div class="panel-heading">Стиль</div>
						
						<div class="panel-body">
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">Модный<span class="badge">12</span>
								</label>
							</div>
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">Кэжуал<span class="badge">15</span>
								</label>
							</div>
							<div class="checkbox-input">
								<label class="checkbox">
									<input type="checkbox" value="1">Активный<span class="badge">35</span>
								</label>
							</div>							
							
						</div>
					</div>
				</div>
			</form>
			
		</div>
		<div class="col-md-9">

			<div class="col-md-4 product-listing">

				<p class="title"><a href="product.php">I Was There</a></p>

				<a href="product.php"><img class="image" src="assets/templates/theme/img/product-10.jpg" alt="I Was There" /></a>

				<p class="price">
					9.99 руб.
					<a class="btn btn-addcart btn-primary" href="basket.php"><span class="entypo cart"></span></a>
				</p>

			</div>

			<div class="col-md-4 product-listing">

				<p class="title"><a href="product.php">100%</a></p>

				<a href="product.php"><img class="image" src="assets/templates/theme/img/product-11.jpg" alt="100%" /></a>

				<p class="price">
					9.99 руб.
					<a class="btn btn-addcart btn-primary" href="basket.php"><span class="entypo cart"></span></a>
				</p>

			</div>

			<div class="col-md-4 product-listing">

				<p class="title"><a href="product.php">100% (with buttons)</a></p>

				<a href="product.php"><img class="image" src="assets/templates/theme/img/product-12.jpg" alt="100% (with buttons)" /></a>

				<p class="price">
					9.99 руб.
					<a class="btn btn-addcart btn-primary" href="basket.php"><span class="entypo cart"></span></a>
				</p>

			</div>

			<div class="col-md-4 product-listing">

				<p class="title"><a href="product.php">A Life Style</a></p>

				<a href="product.php"><img class="image" src="assets/templates/theme/img/product-13.jpg" alt="A Life Style" /></a>

				<p class="price">
					9.99 руб.
					<a class="btn btn-addcart btn-primary" href="basket.php"><span class="entypo cart"></span></a>
				</p>

			</div>

			<div class="col-md-4 product-listing">

				<p class="title"><a href="product.php">All Night Long</a></p>

				<a href="product.php"><img class="image" src="assets/templates/theme/img/product-14.jpg" alt="All Night Long" /></a>

				<p class="price">
					9.99 руб.
					<a class="btn btn-addcart btn-primary" href="basket.php"><span class="entypo cart"></span></a>
				</p>

			</div>

			<div class="col-md-4 product-listing">

				<p class="title"><a href="product.php">Amnesia Community</a></p>

				<a href="product.php"><img class="image" src="assets/templates/theme/img/product-15.jpg" alt="Amnesia Community" /></a>

				<p class="price">
					9.99 руб.
					<a class="btn btn-addcart btn-primary" href="basket.php"><span class="entypo cart"></span></a>
				</p>

			</div>

			<div class="col-md-4 product-listing">

				<p class="title"><a href="product.php">Cosmic</a></p>

				<a href="product.php"><img class="image" src="assets/templates/theme/img/product-16.jpg" alt="Cosmic" /></a>

				<p class="price">
					9.99 руб.
					<a class="btn btn-addcart btn-primary" href="basket.php"><span class="entypo cart"></span></a>
				</p>

			</div>

			<div class="col-md-4 product-listing">

				<p class="title"><a href="product.php">Dart</a></p>

				<a href="product.php"><img class="image" src="assets/templates/theme/img/product-17.jpg" alt="Dart" /></a>

				<p class="price">
					9.99 руб.
					<a class="btn btn-addcart btn-primary" href="basket.php"><span class="entypo cart"></span></a>
				</p>

			</div>

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

</body>
</html>
