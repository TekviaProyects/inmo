<?php
	error_reporting(0);
?>
<!doctype html>
<html class="no-js" lang="zxx">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Biagsa Inmobiliaria || Home</title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="images/icons/favicon.png">

		<!-- All css files are included here. -->
		<!-- Bootstrap fremwork main css -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- nivo slider CSS -->
		<link rel="stylesheet" href="lib/css/nivo-slider.css"/>
		<!-- This core.css file contents all plugings css file. -->
		<link rel="stylesheet" href="css/core.css">
		<!-- Theme shortcodes/elements style -->
		<link rel="stylesheet" href="css/shortcode/shortcodes.css">
		<!-- Theme main style -->
		<link rel="stylesheet" href="style.css">
		<!-- Responsive css -->
		<link rel="stylesheet" href="css/responsive.css">
		<!-- Template color css -->
		<link href="css/color/color-core.css" data-style="styles" rel="stylesheet">
		<!-- User style -->
		<link rel="stylesheet" href="css/custom.css">
	<!-- sweetalert -->
		<link rel="stylesheet" href="plugins/sweetalert-master/dist/sweetalert.css" />

		<!-- Modernizr JS -->
		<script src="js/vendor/modernizr-2.8.3.min.js"></script>
		
		<style>
			.price_slider_amount > input{
				width: 100%;
			}
		</style>
	</head>

	<body>
		<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
		<![endif]-->

		<!-- Body main wrapper start -->
		<div class="wrapper">

			<!-- HEADER AREA START -->
			<header class="header-area header-wrapper">
				<div class="header-top-bar bg-white">
					<div class="container">
						<div class="row">
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="logo">
									<a href="index.php"> <img src="images/logo/logo.png" alt=""> </a>
								</div>
							</div>
							<div class="col-md-6 hidden-sm hidden-xs">
								<div class="company-info clearfix">
									<div class="company-info-item">
										<div class="header-icon">
											<img src="images/icons/phone.png" alt="">
										</div>
										<div class="header-info">
											<h6></h6>
											<p>
												Atencion Chat 9 am - 6pm
											</p>
										</div>
									</div>
									<div class="company-info-item">
										<div class="header-icon">
											<img src="images/icons/mail-open.png" alt="">
										</div>
										<div class="header-info">
											<h6><a href="mailto:info@biagsa.com">atencion@biagsa.com</a></h6>
											<p>
												Envianos un Correo
											</p>
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-3 col-sm-6 col-xs-12">
								<div class="header-search clearfix">
									<form action="#">
										<button class="search-icon" type="submit">
											<img src="images/icons/search.png" alt="">
										</button>
										<input type="text" placeholder="Buscar...">
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div id="sticky-header" class="header-middle-area  transparent-header hidden-xs">
					<div class="container">
						<div class="full-width-mega-drop-menu">
							<div class="row">
								<div class="col-md-12">
									<div class="sticky-logo">
										<a href="index.php"> <img src="images/logo/logo.png" alt=""> </a>
									</div>
									<nav id="primary-menu">
										<ul class="main-menu text-center">
											<li>
												<a href="index.php">Inicio</a>

											</li><?php
											if($_REQUEST['add'] == 1){ ?>
												<li class="mega-parent">
													<a
														onclick="estates.add({
															div: 'div_estates'
														})"
														href="#div_estates">
														Agregar inmueble
													</a>
												</li><?php
											} ?>
											<li>
												<a href="service.html">Conocenos</a>

											</li>
											<li>
												<a href="properties.html">Busca una Propiedad</a>
												<ul class="drop-menu">
													<li>
														<a href="properties.html">Renta</a>
													</li>
													<li>
														<a href="properties.html">Venta</a>
													</li>

												</ul>
											</li>
											<li>
												<a href="agent.html">Agentes</a>

											</li>
											<li>
												<a href="index.php">Propietarios</a>

											</li>
											<li>
												<a href="blog.html">Blog</a>
										  </li>
											<li>
												<a href="contact.html">Contactanos</a>
											</li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
			<!-- HEADER AREA END -->

			<!-- MOBILE MENU AREA START -->
			<div class="mobile-menu-area hidden-sm hidden-md hidden-lg">
				<div class="container">
					<div class="row">
						<div class="col-xs-12">
							<div class="mobile-menu">
								<nav id="dropdown">
									<ul>
										<li>
											<a href="index.php">Home</a>
											<ul>
												<li>
													<a href="index.php">Home-1</a>
												</li>
												<li>
													<a href="index-2.html">home-2</a>
												</li>
												<li>
													<a href="index-3.html">home-3</a>
												</li>
												<li>
													<a href="index-4.html">Background Video</a>
												</li>
												<li>
													<a href="index-5.html">Background Video overlay</a>
												</li>
												<li>
													<a href="index-6.html">BG Video dot overlay</a>
												</li>
												<li>
													<a href="index-7.html">Animated Text</a>
												</li>
												<li>
													<a href="index-8.html">Animated Text dot overlay</a>
												</li>
												<li>
													<a href="index-9.html">Box layout - 1</a>
												</li>
												<li>
													<a href="index-10.html">Box layout - 2</a>
												</li>
												<li>
													<a href="index-11.html">Box layout - 3</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="service.html">Service</a>
											<ul>
												<li>
													<a href="service.html">Service</a>
												</li>
												<li>
													<a href="service-details.html">Service details</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="properties.html">Properties</a>
											<ul>
												<li>
													<a href="properties.html">Properties</a>
												</li>
												<li>
													<a href="properties.html">Properties left sidebar</a>
												</li>
												<li>
													<a href="properties-right-sidebar.html">Properties right sidebar</a>
												</li>
												<li>
													<a href="properties-details.html">Properties details</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="#">Pages</a>
											<ul>
												<li>
													<a href="about.html">About</a>
												</li>
												<li>
													<a href="agent.html">Agent</a>
												</li>
												<li>
													<a href="agent-details.html">Agent-details</a>
												</li>
												<li>
													<a href="features.html">Features</a>
												</li>
												<li>
													<a href="service.html">Service</a>
												</li>
												<li>
													<a href="service-details.html">Service details</a>
												</li>
												<li>
													<a href="login.html">Login</a>
												</li>
												<li>
													<a href="404.html">404</a>
												</li>
												<li>
													<a href="contact.html">Contact</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="blog.html">Blog</a>
											<ul>
												<li>
													<a href="blog.html">Blog</a>
												</li>
												<li>
													<a href="blog-left-sidebar.html">Blog left sidebar</a>
												</li>
												<li>
													<a href="blog-right-sidebar.html">Blog right sidebar</a>
												</li>
												<li>
													<a href="single-blog.html">Single Bloge</a>
												</li>
											</ul>
										</li>
										<li>
											<a href="contact.html">Contact</a>
										</li>
									</ul>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- MOBILE MENU AREA END -->

			<!-- SLIDER SECTION START -->
			<div class="slider-1 pos-relative slider-overlay">
				<div class="bend niceties preview-1">
					<div id="ensign-nivoslider-3" class="slides">
						<img src="images/portada.png" style="max-height: 880px" alt="" title="#slider-direction-1"  />
						<img src="images/portada.png" alt="" title="#slider-direction-2"  />
						<img src="images/portada.png" alt="" title="#slider-direction-3"  />
					</div>
					<!-- direction 1 -->
					<div id="slider-direction-1" class="slider-direction">
						<div class="slider-content text-center">
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
								<h4 class="slider-1-title-1">Bienvenido a <span>Biagsa</span></h4>
							</div>
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
								<h1 class="slider-1-title-2">Donde encontraras tu hogar ideal</h1>
							</div>
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
								<p class="slider-1-desc">
									Explotamos la tecnología haciendo mas simple el proceso
									<br>
									comprar o rentar inmuebles.
								</p>
							</div>
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
								<a class="slider-button mt-40" href="#">Buscar Ahora</a>
							</div>
						</div>
					</div>
					<!-- direction 2 -->
					<div id="slider-direction-2" class="slider-direction">
						<div class="slider-content text-left">
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
								<h4 class="slider-1-title-1">Bienvenido a <span>Biagsa</span></h4>
							</div>
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
								<h1 class="slider-1-title-2">Casas y Terrenos</h1>
							</div>
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
								<p class="slider-1-desc">
									El sitio donde encontraras la casa de tus sueños.
								</p>
							</div>
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
								<a class="slider-button mt-40" href="properties.html">Buscar </a>
							</div>
						</div>
					</div>
					<!-- direction 2 -->
					<div id="slider-direction-3" class="slider-direction">
						<div class="slider-content text-right">
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
								<h4 class="slider-1-title-1">Bienvenido a <span>Biagsa</span></h4>
							</div>
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
								<h1 class="slider-1-title-2">Casas y Terrenos</h1>
							</div>
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
								<p class="slider-1-desc">
									Biagsa de la mano con propietarios satisfechos.
								</p>
							</div>
							<div class="wow fadeInUp" data-wow-duration="1s" data-wow-delay="2s">
								<a class="slider-button mt-40" href="contact.html">Mas Info</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- SLIDER SECTION END -->

			<!-- Start page content -->
			<section id="page-content" class="page-wrapper">

				<!-- FIND HOME AREA START -->
				<div class="find-home-area bg-blue call-to-bg plr-140 pt-60 pb-20">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3 col-xs-12">
								<div class="section-title text-white">
									<h3>BUSCAR AQUI</h3>
									<h2 class="h1">TU HOGAR</h2>
								</div>
							</div>
							<div class="col-md-9 col-xs-12">
								<div class="find-homes">
									<div class="row">
										<div class="col-sm-3 col-xs-12">
											<div class="find-home-item custom-select">
												<select
													id="state_search"
													class="selectpicker"
													title="Estado"
													data-hide-disabled="true"
													data-live-search="true">
													<option value="">Todos</option>
													<option value="1">Aguascalientes</option>
													<option value="2">Baja California</option>
													<option value="3">Baja California Sur</option>
													<option value="4">Campeche</option>
													<option value="5">Coahuila de Zaragoza</option>
													<option value="6">Colima</option>
													<option value="7">Chiapas</option>
													<option value="8">Chihuahua</option>
													<option value="9">Distrito Federal</option>
													<option value="10">Durango</option>
													<option value="11">Guanajuato</option>
													<option value="12">Guerrero</option>
													<option value="13">Hidalgo</option>
													<option value="14">Jalisco</option>
													<option value="15">México</option>
													<option value="16">Michoacán de Ocampo</option>
													<option value="17">Morelos</option>
													<option value="18">Nayarit</option>
													<option value="19">Nuevo León</option>
													<option value="20">Oaxaca</option>
													<option value="21">Puebla</option>
													<option value="22">Querétaro</option>
													<option value="23">Quintana Roo</option>
													<option value="24">San Luis Potosí</option>
													<option value="25">Sinaloa</option>
													<option value="26">Sonora</option>
													<option value="27">Tabasco</option>
													<option value="28">Tamaulipas</option>
													<option value="29">Tlaxcala</option>
													<option value="30">Veracruz de Ignacio de la Llave</option>
													<option value="31">Yucatán</option>
													<option value="32">Zacatecas</option>
												</select>
											</div>
										</div>
										<div class="col-sm-3 col-xs-12">
											<div class="find-home-item">
												<input 
													id="min_area"
													type="text" 
													name="min_area" 
													placeholder="Area minima (mts)">
											</div>
										</div>
										<div class="col-sm-3 col-xs-12">
											<div class="find-home-item">
												<input 
													id="max_area"
													type="text" 
													name="max_area" 
													placeholder="Area maxima (mts)">
											</div>
										</div>
										<div class="col-sm-3 col-xs-12">
											<div class="find-home-item  custom-select">
												<select 
													id="num_room"
													class="selectpicker" 
													title="No. de cuartos" 
													data-hide-disabled="true">
													<optgroup  label="1">
														<option value="1" label="1">1 Habitación</option>
														<option value="2">2 Habitaciónes</option>
														<option value="3">3 Habitaciónes</option>
														<option value="4">4 Habitaciónes</option>
														<option value="5">5 Habitaciónes</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="col-sm-3 col-xs-12">
											<div class="find-home-item custom-select">
												<select 
													id="num_bathroom"
													class="selectpicker" 
													title="No. de baños" 
													data-hide-disabled="true">
													<optgroup  label="1">
														<option value="1" label="1">1 Baño</option>
														<option value="2">2 Baños</option>
														<option value="3">3 Baños</option>
														<option value="4">4 Baños</option>
														<option value="5">5 Baños</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="col-sm-3 col-xs-12">
											<div class="find-home-item custom-select">
												<select 
													id="type"
													class="selectpicker" 
													title="Tipo" 
													data-hide-disabled="true">
													<optgroup  label="tipo">
														<option value="" label="1">Todos</option>
														<option value="1">Renta</option>
														<option value="2">Venta</option>
														<option value="3">Fideicomiso</option>
													</optgroup>
												</select>
											</div>
										</div>
										<div class="col-sm-6 col-xs-12">
											<div class="find-home-item">
												<!-- shop-filter -->
												<div class="shop-filter">
													<div class="price_filter">
														<div class="price_slider_amount">
															<input type="submit"  value=""/>
															<input 
																type="text" 
																id="amount" 
																name="price"  
																placeholder="Add Your Price" />
														</div>
														<div id="slider-range"></div>
													</div>
												</div>
											</div>
										</div>
										<div class="col-xs-12 col-md-2">
											<div class="find-home-item mb-0-xs">
												<a 
													onclick="estates.list_estates({
														num_bathroom: $('#num_bathroom').val(),
														state: $('#state_search').val(),
														min_area: $('#min_area').val(),
														max_area: $('#max_area').val(),
														num_room: $('#num_room').val(),
														amount: $('#amount').val(),
														type: $('#type').val(),
														div: 'div_estates',
														order: ' id DESC'
													})"
													class="button-1 btn-block btn-hover-1" .
													href="#div_estates">
													BUSCAR
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- FIND HOME AREA END -->
				
<!-- INICIA AREA DE CASAS Y TERRENOS VISTA -->
				<div class="featured-flat-area pt-115 pb-80">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title-2 text-center">
									<h2>Casas y terrenos</h2>
									<p>
										Encuentra las mejores casas y terrenos, no busques mas. Aqui las tenemos
									</p>
								</div>
							</div>
						</div>
						<div class="featured-flat">
							<div class="row" id="div_estates">
								<!-- flat-item -->
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="flat-item">
										<div class="flat-item-image">
											<span class="for-sale">For Sale</span>
											<a href="properties-details.html"><img src="images/flat/1.jpg" alt=""></a>
											<div class="flat-link">
												<a href="properties-details.html">More Details</a>
											</div>
											<ul class="flat-desc">
												<li>
													<img src="images/icons/4.png" alt="">
													<span>450 sqft</span>
												</li>
												<li>
													<img src="images/icons/5.png" alt="">
													<span>5</span>
												</li>
												<li>
													<img src="images/icons/6.png" alt="">
													<span>3</span>
												</li>
											</ul>
										</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="properties-details.html">Masons de Villa </a></h5>
												<span class="price">$52,350</span>
											</div>
											<p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey
											</p>
										</div>
									</div>
								</div>
								<!-- flat-item -->
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="flat-item">
										<div class="flat-item-image">
											<a href="properties-details.html"><img src="images/flat/2.jpg" alt=""></a>
											<div class="flat-link">
												<a href="properties-details.html">More Details</a>
											</div>
											<ul class="flat-desc">
												<li>
													<img src="images/icons/4.png" alt="">
													<span>450 sqft</span>
												</li>
												<li>
													<img src="images/icons/5.png" alt="">
													<span>5</span>
												</li>
												<li>
													<img src="images/icons/6.png" alt="">
													<span>3</span>
												</li>
											</ul>
										</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="properties-details.html">Masons de Villa </a></h5>
												<span class="price">$52,350</span>
											</div>
											<p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey
											</p>
										</div>
									</div>
								</div>
								<!-- flat-item -->
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="flat-item">
										<div class="flat-item-image">
											<span class="for-sale rent">For rent</span>
											<a href="properties-details.html"><img src="images/flat/3.jpg" alt=""></a>
											<div class="flat-link">
												<a href="properties-details.html">More Details</a>
											</div>
											<ul class="flat-desc">
												<li>
													<img src="images/icons/4.png" alt="">
													<span>450 sqft</span>
												</li>
												<li>
													<img src="images/icons/5.png" alt="">
													<span>5</span>
												</li>
												<li>
													<img src="images/icons/6.png" alt="">
													<span>3</span>
												</li>
											</ul>
										</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="properties-details.html">Masons de Villa </a></h5>
												<span class="price">$52,350</span>
											</div>
											<p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey
											</p>
										</div>
									</div>
								</div>
								<!-- flat-item -->
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="flat-item">
										<div class="flat-item-image">
											<a href="properties-details.html"><img src="images/flat/4.jpg" alt=""></a>
											<div class="flat-link">
												<a href="properties-details.html">More Details</a>
											</div>
											<ul class="flat-desc">
												<li>
													<img src="images/icons/4.png" alt="">
													<span>450 sqft</span>
												</li>
												<li>
													<img src="images/icons/5.png" alt="">
													<span>5</span>
												</li>
												<li>
													<img src="images/icons/6.png" alt="">
													<span>3</span>
												</li>
											</ul>
										</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="properties-details.html">Masons de Villa </a></h5>
												<span class="price">$52,350</span>
											</div>
											<p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey
											</p>
										</div>
									</div>
								</div>
								<!-- flat-item -->
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="flat-item">
										<div class="flat-item-image">
											<span class="for-sale">For Sale</span>
											<a href="properties-details.html"><img src="images/flat/5.jpg" alt=""></a>
											<div class="flat-link">
												<a href="properties-details.html">More Details</a>
											</div>
											<ul class="flat-desc">
												<li>
													<img src="images/icons/4.png" alt="">
													<span>450 sqft</span>
												</li>
												<li>
													<img src="images/icons/5.png" alt="">
													<span>5</span>
												</li>
												<li>
													<img src="images/icons/6.png" alt="">
													<span>3</span>
												</li>
											</ul>
										</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="properties-details.html">Masons de Villa </a></h5>
												<span class="price">$52,350</span>
											</div>
											<p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey
											</p>
										</div>
									</div>
								</div>
								<!-- flat-item -->
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="flat-item">
										<div class="flat-item-image">
											<a href="properties-details.html"><img src="images/flat/6.jpg" alt=""></a>
											<div class="flat-link">
												<a href="properties-details.html">More Details</a>
											</div>
											<ul class="flat-desc">
												<li>
													<img src="images/icons/4.png" alt="">
													<span>450 sqft</span>
												</li>
												<li>
													<img src="images/icons/5.png" alt="">
													<span>5</span>
												</li>
												<li>
													<img src="images/icons/6.png" alt="">
													<span>3</span>
												</li>
											</ul>
										</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="properties-details.html">Masons de Villa </a></h5>
												<span class="price">$52,350</span>
											</div>
											<p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey
											</p>
										</div>
									</div>
								</div>
								<!-- flat-item -->
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="flat-item">
										<div class="flat-item-image">
											<span class="for-sale rent">For rent</span>
											<a href="properties-details.html"><img src="images/flat/7.jpg" alt=""></a>
											<div class="flat-link">
												<a href="properties-details.html">More Details</a>
											</div>
											<ul class="flat-desc">
												<li>
													<img src="images/icons/4.png" alt="">
													<span>450 sqft</span>
												</li>
												<li>
													<img src="images/icons/5.png" alt="">
													<span>5</span>
												</li>
												<li>
													<img src="images/icons/6.png" alt="">
													<span>3</span>
												</li>
											</ul>
										</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="properties-details.html">Masons de Villa </a></h5>
												<span class="price">$52,350</span>
											</div>
											<p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey
											</p>
										</div>
									</div>
								</div>
								<!-- flat-item -->
								<div class="col-md-4 col-sm-6 col-xs-12">
									<div class="flat-item">
										<div class="flat-item-image">
											<a href="properties-details.html"><img src="images/flat/8.jpg" alt=""></a>
											<div class="flat-link">
												<a href="properties-details.html">More Details</a>
											</div>
											<ul class="flat-desc">
												<li>
													<img src="images/icons/4.png" alt="">
													<span>450 sqft</span>
												</li>
												<li>
													<img src="images/icons/5.png" alt="">
													<span>5</span>
												</li>
												<li>
													<img src="images/icons/6.png" alt="">
													<span>3</span>
												</li>
											</ul>
										</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="properties-details.html">Masons de Villa </a></h5>
												<span class="price">$52,350</span>
											</div>
											<p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey
											</p>
										</div>
									</div>
								</div>
								<!-- flat-item -->
								<div class="col-md-4 hidden-sm col-xs-12">
									<div class="flat-item">
										<div class="flat-item-image">
											<span class="for-sale">For Sale</span>
											<a href="properties-details.html"><img src="images/flat/9.jpg" alt=""></a>
											<div class="flat-link">
												<a href="properties-details.html">More Details</a>
											</div>
											<ul class="flat-desc">
												<li>
													<img src="images/icons/4.png" alt="">
													<span>450 sqft</span>
												</li>
												<li>
													<img src="images/icons/5.png" alt="">
													<span>5</span>
												</li>
												<li>
													<img src="images/icons/6.png" alt="">
													<span>3</span>
												</li>
											</ul>
										</div>
										<div class="flat-item-info">
											<div class="flat-title-price">
												<h5><a href="properties-details.html">Masons de Villa </a></h5>
												<span class="price">$52,350</span>
											</div>
											<p><img src="images/icons/location.png" alt="">568 E 1st Ave, Ney Jersey
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
       <!-- TERMINA AREA DE CASAS Y TERRENOS VISTA -->

				<!-- ABOUT SHELTEK AREA START -->
				<div class="about-sheltek-area ptb-115">
					<div class="container">
						<div class="row">
							<div class="col-sm-6 col-xs-12">
								<div class="section-title mb-30">
									<h3>SOME WORD </h3>
									<h2>ABOUT SHELTEK</h2>
								</div>
								<div class="about-sheltek-info">
									<p>
										<span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolo.
									</p>
									<p>
										Lorem is a dummy text do eiusmod tempor dolor sit amet, onsectetur adip iscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliqua Ut enim onsectetur
									</p>
									<p>
										Lorem is a dummy text do eiusmod tempor dolor sit amet, onsectetur adip iscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliqua Ut enim onsectetur
									</p>
								</div>
							</div>
							<div class="col-sm-6 col-xs-12">
								<div class="about-image">
									<a href="about.html"><img src="images/about/1.jpg" alt=""></a>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- ABOUT SHELTEK AREA END -->
				<!-- FEATURED FLAT AREA START -->

				<!-- FEATURED FLAT AREA END -->
				<!-- BOOKING AREA START -->
				<div class="booking-area bg-1 call-to-bg plr-140 pt-75">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-12">
								<div class="section-title text-white">
									<h3>CONTACTANOS</h3>
									<h2 class="h1">EMAIL</h2>
								</div>
							</div>
							<div class="col-md-9 col-sm-8 col-xs-12">
								<div class="booking-conternt clearfix">
									<div class="book-house text-white">
										<h2>ESTAMOS PARA AYUDARTE</h2>
										<h2 class="h5">INICIA EL CHAT AHORA</h2>
									</div>
									<div class="booking-imgae">
										<img src="images/others/booking.png" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- BOOKING AREA END -->
				<!-- FEATURES AREA START -->
				<div class="features-area fix">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-7 col-md-offset-5">
								<div class="features-info bg-gray">
									<div class="section-title mb-30">
										<h3>HERE IS</h3>
										<h2 class="h1">AWESOME FEATUES</h2>
									</div>
									<div class="features-desc">
										<p>
											<span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do smod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi
										</p>
									</div>
									<div class="features-include">
										<div class="row">
											<div class="col-lg-4 col-md-6 col-sm-4">
												<div class="features-include-list">
													<h6><img src="images/icons/7.png" alt="">Fully Furnished</h6>
													<p>
														Lorem is a dummy text do eiud tempor dolor sit amet dum
													</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-4">
												<div class="features-include-list">
													<h6><img src="images/icons/7.png" alt="">Royal Touch Paint</h6>
													<p>
														Lorem is a dummy text do eiud tempor dolor sit amet dum
													</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-4">
												<div class="features-include-list">
													<h6><img src="images/icons/7.png" alt="">Latest Interior Design</h6>
													<p>
														Lorem is a dummy text do eiud tempor dolor sit amet dum
													</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-4">
												<div class="features-include-list">
													<h6><img src="images/icons/7.png" alt="">Non Stop Security</h6>
													<p>
														Lorem is a dummy text do eiud tempor dolor sit amet dum
													</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-4">
												<div class="features-include-list">
													<h6><img src="images/icons/7.png" alt="">Living Inside a Nature</h6>
													<p>
														Lorem is a dummy text do eiud tempor dolor sit amet dum
													</p>
												</div>
											</div>
											<div class="col-lg-4 col-md-6 col-sm-4">
												<div class="features-include-list">
													<h6><img src="images/icons/7.png" alt="">Luxurious Fittings</h6>
													<p>
														Lorem is a dummy text do eiud tempor dolor sit amet dum
													</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- FEATURES AREA END -->

				<!-- OUR AGENTS AREA START -->
				<div class="our-agents-area pt-115 pb-55">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title-2 text-center">
									<h2>OUR AGENTS</h2>
									<p>
										Sheltek is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud
									</p>
								</div>
							</div>
						</div>
						<div class="our-agents">
							<div class="row">
								<div class="agents-carousel">
									<!-- single-agent -->
									<div class="col-md-12">
										<div class="single-agent">
											<div class="agent-image">
												<img src="images/agents/1.jpg" alt="">
											</div>
											<div class="agent-info">
												<div class="agent-name">
													<h5><a href="agent-details.html">Shah M Nawaz</a></h5>
													<p>
														Real Estate Agent
													</p>
												</div>
											</div>
											<div class="agent-info-hover">
												<div class="agent-name">
													<h5><a href="agent-details.html">Shah M Nawaz</a></h5>
													<p>
														Real Estate Agent
													</p>
												</div>
												<ul class="agent-address">
													<li><img src="images/icons/phone-2.png" alt="">+1245  785  659
													</li>
													<li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
													</li>
												</ul>
												<ul class="social-media">
													<li>
														<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- single-agent -->
									<div class="col-md-12">
										<div class="single-agent">
											<div class="agent-image">
												<img src="images/agents/2.jpg" alt="">
											</div>
											<div class="agent-info">
												<div class="agent-name">
													<h5><a href="agent-details.html">Eva Sharlin</a></h5>
													<p>
														Real Estate Broker
													</p>
												</div>
											</div>
											<div class="agent-info-hover">
												<div class="agent-name">
													<h5><a href="agent-details.html">Eva Sharlin</a></h5>
													<p>
														Real Estate Broker
													</p>
												</div>
												<ul class="agent-address">
													<li><img src="images/icons/phone-2.png" alt="">+1245  785  659
													</li>
													<li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
													</li>
												</ul>
												<ul class="social-media">
													<li>
														<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- single-agent -->
									<div class="col-md-12">
										<div class="single-agent">
											<div class="agent-image">
												<img src="images/agents/3.jpg" alt="">
											</div>
											<div class="agent-info">
												<div class="agent-name">
													<h5><a href="agent-details.html">Momen Bhuyan</a></h5>
													<p>
														Real Estate Broker
													</p>
												</div>
											</div>
											<div class="agent-info-hover">
												<div class="agent-name">
													<h5><a href="agent-details.html">Momen Bhuyan</a></h5>
													<p>
														Real Estate Broker
													</p>
												</div>
												<ul class="agent-address">
													<li><img src="images/icons/phone-2.png" alt="">+1245  785  659
													</li>
													<li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
													</li>
												</ul>
												<ul class="social-media">
													<li>
														<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- single-agent -->
									<div class="col-md-12">
										<div class="single-agent">
											<div class="agent-image">
												<img src="images/agents/4.jpg" alt="">
											</div>
											<div class="agent-info">
												<div class="agent-name">
													<h5><a href="agent-details.html">Sarmin Tabassum</a></h5>
													<p>
														Real Estate Agent
													</p>
												</div>
											</div>
											<div class="agent-info-hover">
												<div class="agent-name">
													<h5><a href="agent-details.html">Sarmin Tabassum</a></h5>
													<p>
														Real Estate Agent
													</p>
												</div>
												<ul class="agent-address">
													<li><img src="images/icons/phone-2.png" alt="">+1245  785  659
													</li>
													<li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
													</li>
												</ul>
												<ul class="social-media">
													<li>
														<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<!-- single-agent -->
									<div class="col-md-12">
										<div class="single-agent">
											<div class="agent-image">
												<img src="images/agents/3.jpg" alt="">
											</div>
											<div class="agent-info">
												<div class="agent-name">
													<h5><a href="agent-details.html">Momen Bhuyan</a></h5>
													<p>
														Real Estate Broker
													</p>
												</div>
											</div>
											<div class="agent-info-hover">
												<div class="agent-name">
													<h5><a href="agent-details.html">Momen Bhuyan</a></h5>
													<p>
														Real Estate Broker
													</p>
												</div>
												<ul class="agent-address">
													<li><img src="images/icons/phone-2.png" alt="">+1245  785  659
													</li>
													<li><img src="images/icons/mail-close.png" alt="">eva@gmail.com
													</li>
												</ul>
												<ul class="social-media">
													<li>
														<a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
													</li>
													<li>
														<a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- OUR AGENTS AREA END -->

				<!-- TESTIMONIAL AREA START -->
				<div class="testimonial-area pb-115">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="testimonial">
									<div class="row">
										<div class="col-md-8 col-sm-9">
											<div class="section-title mb-30">
												<h3>SOME OF OUR</h3>
												<h2 class="h1">HAPPY CLIENTS</h2>
											</div>
											<div class="testimonial-carousel dots-right-btm">
												<!-- testimonial-item -->
												<div class="testimonial-item">
													<div class="testimonial-brief">
														<p>
															<span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, ed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo uis nostrud exercitation
														</p>
													</div>
													<h6>Zasica Luci, <span>CEO</span></h6>
												</div>
												<!-- testimonial-item -->
												<div class="testimonial-item">
													<div class="testimonial-brief">
														<p>
															<span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, ed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo uis nostrud exercitation
														</p>
													</div>
													<h6>Zasica Luci, <span>CEO</span></h6>
												</div>
												<!-- testimonial-item -->
												<div class="testimonial-item">
													<div class="testimonial-brief">
														<p>
															<span data-placement="top" data-toggle="tooltip" data-original-title="The name you can trust" class="tooltip-content">Sheltek</span> is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, ed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo. liquatd minim veniam, quis nostrud exercitation oris nisi ut aliquip ex ea commodo equat. Duis aute irure dolo uis nostrud exercitation
														</p>
													</div>
													<h6>Zasica Luci, <span>CEO</span></h6>
												</div>
											</div>
										</div>
										<div class="col-md-4 col-sm-3">
											<div class="testimonial-image">
												<img src="images/others/testimonial.jpg" alt="">
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- TESTIMONIAL AREA END -->

				<!-- BLOG AREA START -->
				<div class="blog-area pb-60">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="section-title-2 text-center">
									<h2>FROM BLOG</h2>
									<p>
										Sheltek is the best theme for  elit, sed do eiusmod tempor dolor sit amet, conse ctetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et lorna aliquatd minim veniam, quis nostrud
									</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="blog-carousel">
								<!-- blog-item -->
								<div class="col-md-12">
									<article class="blog-item bg-gray">
										<div class="blog-image">
											<a href="single-blog.html"><img src="images/blog/1.jpg" alt=""></a>
										</div>
										<div class="blog-info">
											<div class="post-title-time">
												<h5><a href="single-blog.html">Maridland de Villa</a></h5>
												<p>
													July 30, 2016 / 10 am
												</p>
											</div>
											<p>
												Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising
											</p>
											<a class="read-more" href="single-blog.html">Read more</a>
										</div>
									</article>
								</div>
								<!-- blog-item -->
								<div class="col-md-12">
									<article class="blog-item bg-gray">
										<div class="blog-image">
											<a href="single-blog.html"><img src="images/blog/2.jpg" alt=""></a>
										</div>
										<div class="blog-info">
											<div class="post-title-time">
												<h5><a href="single-blog.html">Latest Design House</a></h5>
												<p>
													July 30, 2016 / 10 am
												</p>
											</div>
											<p>
												Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising
											</p>
											<a class="read-more" href="single-blog.html">Read more</a>
										</div>
									</article>
								</div>
								<!-- blog-item -->
								<div class="col-md-12">
									<article class="blog-item bg-gray">
										<div class="blog-image">
											<a href="single-blog.html"><img src="images/blog/3.jpg" alt=""></a>
										</div>
										<div class="blog-info">
											<div class="post-title-time">
												<h5><a href="single-blog.html">Duplex Villa House</a></h5>
												<p>
													July 30, 2016 / 10 am
												</p>
											</div>
											<p>
												Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising
											</p>
											<a class="read-more" href="single-blog.html">Read more</a>
										</div>
									</article>
								</div>
								<!-- blog-item -->
								<div class="col-md-12">
									<article class="blog-item bg-gray">
										<div class="blog-image">
											<a href="single-blog.html"><img src="images/blog/2.jpg" alt=""></a>
										</div>
										<div class="blog-info">
											<div class="post-title-time">
												<h5><a href="single-blog.html">Latest Design House</a></h5>
												<p>
													July 30, 2016 / 10 am
												</p>
											</div>
											<p>
												Lorem must explain to you how all this mistaolt denouncing pleasure and praising pain wasnad I will give you a complete pain was praising
											</p>
											<a class="read-more" href="single-blog.html">Read more</a>
										</div>
									</article>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- BLOG AREA END -->

				<!-- SUBSCRIBE AREA START -->
				<div class="subscribe-area bg-blue call-to-bg plr-140 ptb-50">
					<div class="container-fluid">
						<div class="row">
							<div class="col-md-3 col-sm-4 col-xs-12">
								<div class="section-title text-white">
									<h3>SUBSCRIBE</h3>
									<h2 class="h1">NEWSLETTER</h2>
								</div>
							</div>
							<div class="col-md-9 col-sm-8 col-xs-12">
								<div class="subscribe">
									<form action="#">
										<input type="text" name="subscribe" placeholder="Enter yur email here...">
										<button type="submit" value="send">
											Send
										</button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- SUBSCRIBE AREA END -->
			</section>
			<!-- End page content -->

			<!-- Start footer area -->
			<footer id="footer" class="footer-area bg-2 bg-opacity-black-90">
				<div class="footer-top pt-110 pb-80">
					<div class="container">
						<div class="row">
							<!-- footer-address -->
							<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
								<div class="footer-widget">
									<h6 class="footer-titel">GET IN TOUCH</h6>
									<ul class="footer-address">
										<li>
											<div class="address-icon">
												<img src="images/icons/location-2.png" alt="">
											</div>
											<div class="address-info">
												<span>8901 Marmora Raod,</span>
												<span>Glasgow, D04  89GR</span>
											</div>
										</li>
										<li>
											<div class="address-icon">
												<img src="images/icons/phone-3.png" alt="">
											</div>
											<div class="address-info">
												<span>Telephone : (801) 4256  9856</span>
												<span>Telephone : (801) 4256  9658</span>
											</div>
										</li>
										<li>
											<div class="address-icon">
												<img src="images/icons/world.png" alt="">
											</div>
											<div class="address-info">
												<span>Email : info@sheltek.com</span>
												<span>Web :<a href="#" target="_blank">biagsa.com</a></span>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- footer-latest-news -->
							<div class="col-lg-6 col-md-5 hidden-sm col-xs-12">
								<div class="footer-widget middle">
									<h6 class="footer-titel">LATEST NEWS</h6>
									<ul class="footer-latest-news">
										<li>
											<div class="latest-news-image">
												<a href="single-blog.html"><img src="images/blog/1.jpg" alt=""></a>
											</div>
											<div class="latest-news-info">
												<h6><a href="single-blog.html">Beautiful Home</a></h6>
												<p>
													Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor inciidunt ut labore
												</p>
											</div>
										</li>
										<li>
											<div class="latest-news-image">
												<a href="single-blog.html"><img src="images/blog/2.jpg" alt=""></a>
											</div>
											<div class="latest-news-info">
												<h6><a href="single-blog.html">Beautiful Home</a></h6>
												<p>
													Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor inciidunt ut labore
												</p>
											</div>
										</li>
										<li>
											<div class="latest-news-image">
												<a href="single-blog.html"><img src="images/blog/3.jpg" alt=""></a>
											</div>
											<div class="latest-news-info">
												<h6><a href="single-blog.html">Beautiful Home</a></h6>
												<p>
													Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor inciidunt ut labore
												</p>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!-- footer-contact -->
							<div class="col-lg-3 col-md-4 col-sm-6 col-xs-12">
								<div class="footer-widget">
									<h6 class="footer-titel">QUICK CONTACT</h6>
									<div class="footer-contact">
										<p>
											Lorem ipsum dolor sit amet, consectetur acinglit sed do eiusmod tempor
										</p>
										<form  id="contact-form-2" action="mail_footer.php" method="post">
											<input type="email" name="email2" placeholder="Type your E-mail address...">
											<textarea name="message2" placeholder="Write here..."></textarea>
											<button type="submit" value="send">
												Send
											</button>
										</form>
										<p class="form-messege"></p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="footer-bottom">
					<div class="container">
						<div class="row">
							<div class="col-xs-12">
								<div class="copyright text-center">
									<p>
										Copyright &copy; 2018
										<a href="biagsa.com"><b>Biagsa</b></a>.
										Todos los derechos reservados.
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>
			</footer>
			<!-- End footer area -->
		</div>
		<!-- Body main wrapper end -->

		<!-- Placed js at the end of the document so the pages load faster -->

		<!-- jquery latest version -->
		<script src="js/vendor/jquery-3.1.1.min.js"></script>
		<!-- Bootstrap framework js -->
		<script src="js/bootstrap.min.js"></script>
		<!-- Nivo slider js -->
		<script src="lib/js/jquery.nivo.slider.js"></script>
		<!-- ajax-mail js -->
		<script src="js/ajax-mail.js"></script>
		<!-- All js plugins included in this file. -->
		<script src="js/plugins.js"></script>
		<!-- Main js file that contents all jQuery plugins activation. -->
		<script src="js/main.js"></script>
	<!-- sweetalert -->
		<script type="text/javascript" src="https://unpkg.com/sweetalert2@7.11.0/dist/sweetalert2.all.js"></script>

	<!-- System -->
		<script src="js_system/estates.js"></script>

		<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCsZOvqzL9c7_O7Fj7t3FDt77nejjwbZXw&libraries=places,geometry" async defer></script>
		<script>
			estates.list_estates({
				div: 'div_estates',
				limit: 9,
				order: ' id DESC'
			})
		</script>
	</body>
</html>
