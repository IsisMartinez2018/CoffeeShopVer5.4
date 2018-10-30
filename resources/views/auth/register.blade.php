<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Designer Login Form A Responsive Widget Template  :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Designer Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" /> <!-- Flexslider-CSS -->
<link href="css/font-awesome.css" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="css/style.css" rel='stylesheet' type='text/css'/><!-- Stylesheet-CSS -->
<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>	
</head>
<body style="background-image: url({{url('/images/coffee.jpg')}})">
	<h1>Registro de Usuarios</h1>
	<div class="main-agile">
		
		<div class="content-wthree">
			<div class="about-middle">
			<section class="slider">
			<div class="flexslider">
				<ul class="slides">
				  <li>
					<div class="banner-bottom-2">			  		
						<div class="about-midd-main">
							<img class="agile-img" src="images/girl.png" alt=" " class="img-responsive">
							<h4>Coffee Shop</h4>
							<p>Online Orders</p>
						</div>
						<div class="new-account-form">
							<h2 class="heading-w3-agile">¿Nuevo? Registrate</h2>
								


								<form method="POST" action="{{ route('register') }}">
                

										<div class="inputs-w3ls">
										<p>Nombre</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>

                   <input class="name" type="text" name="name" placeholder="">    
                    </div>

                    <div class="inputs-w3ls">
					<p>Apellido</p>
						<i class="fa fa-envelope" aria-hidden="true"></i>
                        <input class="last_name" type="text" name="last_name" placeholder="">
                    </div>

                    <div class="inputs-w3ls">
										<p>Email</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input type="email" class="email" name="email" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Contraseña</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" class="password" name="password" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Confirmar Contraseña</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" class="password_confirmation" name="password_confirmation" placeholder="" required="">
									</div>

									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span>Recuérdame</span> 
										<a href="#">Olvidé la contraseña</a>
									</label> 
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="submit" name="submit" value="enviar">
								</form> 
						</div>
					</div>
					
				  </li>
				 <li>
					<div class="banner-bottom-2">			  		
						<div class="about-midd-main">
							<img class="agile-img" src="images/girl2.jpg" alt=" " class="img-responsive">
							<h4>Coffee Shop</h4>
							<p>Online Orders</p>
						</div>
						<div class="new-account-form">
							<h2 class="heading-w3-agile">Registrate</h2>
								<form action="{{ route('register') }}" method="POST">
									
									<div class="inputs-w3ls">
										<p>Nombre</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input type="text" class="name" name="name" placeholder="" required="">
									</div>

				<div class="inputs-w3ls">
					<p>Apellido</p>
						<i class="fa fa-envelope" aria-hidden="true"></i>
                        <input class="last_name" type="text" name="last_name" placeholder="">
                    </div>

									<div class="inputs-w3ls">
										<p>Email</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input type="email" class="email" name="email" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Contraseña</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" class="password" name="password" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Confirmar Contraseña</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" class="password_confirmation" name="password_confirmation" placeholder="" required="">
									</div>
									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span>Recuérdame</span> 
										<a href="#">Olvidé la contraseña</a>
									</label> 
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="submit" name="submit" value="enviar">
								</form> 
						</div>
					</div>
					
				  </li>
				  <li>
					<div class="banner-bottom-2">			  		
						<div class="about-midd-main">
							<img class="agile-img" src="images/girl3.jpg" alt=" " class="img-responsive">
							<h4>Coffee Shop</h4>
							<p>Online Orders</p>
						</div>
						<div class="new-account-form">
							<h2 class="heading-w3-agile">Registrate</h2>
								<form action="{{ route('register') }}" method="POST">
									
									<div class="inputs-w3ls">
										<p>Nombre</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input type="text" class="name" name="name" placeholder="" required="">
									</div>

					<div class="inputs-w3ls">
					<p>Apellido</p>
						<i class="fa fa-envelope" aria-hidden="true"></i>
                        <input class="last_name" type="text" name="last_name" placeholder="">
                    </div>

									<div class="inputs-w3ls">
										<p>Email</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input type="email" class="email" name="email" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Contraseña</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" class="password" name="password" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Confirmar Contraseña</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" class="password_confirmation" name="password_confirmation" placeholder="" required="">
									</div>


									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span>Recuérdame</span> 
										<a href="#">Olvidé la contraseña</a>
									</label> 
										<input type="hidden" name="_token" value="{{ csrf_token() }}">
										<input type="submit" name="submit" value="enviar">
								</form> 
						</div>
					</div>
				  </li>
				</ul>
			</div>
			<div class="clear"> </div>
		  </section>
		</div>
		
		

		</div>
	</div>
	<div class="footer-w3l">
		<p class="agileinfo"> &copy; 2018 Fashion Designer Login Form. All Rights Reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
	</div>
<script src="js/jquery.min.js"></script>

	<!-- FlexSlider -->
				  <script defer src="js/jquery.flexslider.js"></script>
				  <script type="text/javascript">
					$(function(){
					 
					});
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
		<!-- FlexSlider -->

</body>
</html>