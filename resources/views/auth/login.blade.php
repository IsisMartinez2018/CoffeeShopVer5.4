<!DOCTYPE html>
<html lang="en">
<head>
<title>Fashion Designer Login Form A Responsive Widget Template  :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Fashion Designer Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<link rel="stylesheet" href="{{ url('css/flexslider.css') }}" type="text/css" media="screen" /> <!-- Flexslider-CSS -->
<link href="{{ url('css/font-awesome.css') }}" rel="stylesheet"><!-- Font-awesome-CSS --> 
<link href="{{ url('css/style.css') }}" rel='stylesheet' type='text/css'/><!-- Stylesheet-CSS -->
<link href="//fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,700" rel="stylesheet">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>	
</head>
<body style="background-image: url({{url('/images/coffee.jpg')}})">
	<h1 style="color: black; text-shadow: lightgrey 3px 2px;">Login de Usuarios</h1>
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
							<h4><img src="images/eat.png" style="height: 30px; width: 30px; border:none;">Coffee Shop<img src="images/cup.png" style="height: 30px; width: 30px; border:none;"></h4>

							<p>Online Orders</p>
						</div>
						<div class="new-account-form">
							<h2 class="heading-w3-agile">Login</h2>
								



								<form method="POST" action="{{ route('login') }}">
                
                    <div class="inputs-w3ls">
										<p>Email</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input type="email" class="email" name="email" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Password</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" class="password" name="password" placeholder="" required="">
									</div>



<label class="anim">
                    <input class="checkbox" type="checkbox" name="remember-me" {{ old('remember') ? 'checked' : '' }}>
                        <span>Remember Me</span> 
                        <a href="{{ route('password.request') }}">Forgot Password</a>
									</label> 
									<input type="hidden" name="_token" value="{{ csrf_token() }}">
									<input type="submit" name="enviar" value="enviar">
								</form> 
                    </div>

                    </div>
                </li>


                    <li>
					<div class="banner-bottom-2">			  		
						<div class="about-midd-main">
							<img class="agile-img" src="images/girl2.jpg" alt=" " class="img-responsive">
							<h4>Coffee <img src="images/coffeecup2.png" style="height: 40px; width: 40px; border:none; border-radius: none"> Shop</h4>
							<p>Online Orders</p>
						</div>
						<div class="new-account-form">
							<h2 class="heading-w3-agile">Login</h2>
								<form action="{{ route('login') }}" method="POST">
									
									<div class="inputs-w3ls">
										<p>Email</p>
										 <i class="fa fa-envelope" aria-hidden="true"></i> 

										<input type="email" class="email" name="email" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Password</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" class="password" name="password" placeholder="" required="">
									</div>
									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span>Remember Me</span> 
										<a href="{{ route('password.request') }}">Forgot Password</a>
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
							<h4><img src="images/milk.png" style="height: 30px; width: 30px; border:none; border-radius: none">Coffee Shop<img src="images/coffees.png" style="height: 30px; width: 30px; border:none; border-radius: none"></h4>
							<p>Online Orders</p>
						</div>
						<div class="new-account-form">
							<h2 class="heading-w3-agile">Login</h2>
								<form action="{{ route('login') }}" method="POST">
									
									<div class="inputs-w3ls">
										<p>Email</p>
										<i class="fa fa-envelope" aria-hidden="true"></i>
										<input type="email" class="email" name="email" placeholder="" required="">
									</div>
									<div class="inputs-w3ls">
										<p>Password</p>
										<i class="fa fa-unlock-alt" aria-hidden="true"></i>
											<input type="password" class="password" name="password" placeholder="" required="">
									</div>
									<label class="anim">
										<input type="checkbox" class="checkbox">
										<span>Remember Me</span> 
										<a href="{{ route('password.request') }}">Forgot Password</a>
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
<script src="{{ url('js/jquery.min.js') }}"></script>

	<!-- FlexSlider -->
				  <script defer src="{{ url('js/jquery.flexslider.js') }}"></script>
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