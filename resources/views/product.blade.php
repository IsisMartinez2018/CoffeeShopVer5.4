<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Cappuccino Coffee Restaurants Category Bootstrap Responsive Template | Home :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords" content="Cappuccino Coffee Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>

	<!--// Meta tag Keywords -->
	<link rel="stylesheet" href="{{ asset('css/algolia.css') }}">
	<!-- Custom-Files -->
	<link rel="stylesheet" href="{{ asset('css/bootstrap(2).css')}}">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="{{ asset('css/ken-burns.css')}}" type="text/css" media="all" />
	<!-- Banner CSS -->
	<link rel="stylesheet" href="{{ asset('css/style(2).css')}}" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="{{ asset('css/fontawesome-all.css') }}">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Arizonia&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Timmana&amp;subset=telugu" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->
<style>

.might-like-section {
  padding: 40px 0 70px;
  background: #F5F5F5;
}

.might-like-section h2 {
  padding-bottom: 30px;
}

.might-like-section .might-like-grid {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-gap: 30px;
}

.might-like-section .might-like-product {
  border: 1px solid #979797;
  background: white;
  padding: 30px 0 20px;
  text-align: center;
}

.might-like-section .might-like-product img {
  width: 70%;
}

.might-like-section .might-like-product-price {
  color: #919191;
}


.products {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr 1fr;
  grid-gap: 60px 30px;
}

.featured-section .products .product-price {
  color: #919191 !important;
}

.products-section {
  display: grid;
  grid-template-columns: 1fr 3fr;
  margin: 80px auto 80px;
}

.products-section .sidebar li.active {
  font-weight: 500;
}

.products-section {
  display: grid;
  grid-template-columns: 1fr 1fr 1fr;
  grid-gap: 60px 30px;
}

.products-section .products .product-price {
  color: #919191;
}

.products-header {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.product-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 120px;
  padding: 100px 0 120px;
}

.product-section .selected {
  border: 1px solid #979797;
}

.product-section-images {
  display: grid;
  grid-template-columns: repeat(6, 1fr);
  grid-gap: 20px;
  margin-top: 20px;
}

.product-section-thumbnail {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border: 1px solid lightgray;
  min-height: 66px;
  cursor: pointer;
}

.product-section-thumbnail:hover {
  border: 1px solid #979797;
}

.product-section-image {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
      -ms-flex-pack: center;
          justify-content: center;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border: 1px solid #979797;
  padding: 30px;
  text-align: center;
  height: 400px;
}

.product-section-image img {
  opacity: 0.9;
  -webkit-transition: opacity .10s ease-in-out;
  transition: opacity .10s ease-in-out;
  max-height: 100%;
}

.product-section-image img.active {
  opacity: 1;
}

.product-section-information p {
  margin-bottom: 16px;
}

.product-section-title {
  margin-bottom: 0;
}

.product-section-subtitle {
  font-size: 20px;
  font-weight: bold;
  color: #919191;
}

.product-section-price {
  font-size: 38px;
  color: #212121;
  margin-bottom: 16px;}

.container {
  margin: auto;
  max-width: 1200px;
}

img {
  max-width: 100%;
}

ol,
ul {
  list-style: none;
}

section {
  display: block;
}

.button {
  border: 1px solid #212121;
  padding: 12px 40px;
}

.button:hover {
  color: #e9e9e9;
  background: #212121;
}

.button-white {
  border: 1px solid #e9e9e9;
  color: #e9e9e9 !important;
}

.button-white:hover {
  color: #212121 !important;
  background: #e9e9e9;
}

.button-primary {
  background: #3EBFA4;
  color: white !important;
  padding: 12px 40px;
}

.button-primary:hover {
  background: #35a48d;
}

.button-primary:disabled {
  background: #63cdb7;
  cursor: not-allowed;
}

.button-plain {
  border: 1px solid #212121 !important;
  background: transparent;
}

.button-container {
  margin: 80px 0;
}
.cart-count {
  display: inline-block;
  background: #FFD94D;
  color: #212121;
  line-height: 0;
  border-radius: 50%;
  font-size: 14px;
}

.cart-count span {
  display: inline-block;
  padding-top: 50%;
  padding-bottom: 50%;
  margin-left: 6px;
  margin-right: 6px;
}
</style>











</head>

<body>
	<!-- header -->
	<div class="header">
		<!-- navigation -->
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<!-- logo -->
			<h1>
				<a class="navbar-brand" href="index.html">Cappuccino
					<span>Coffee</span>
				</a>
			</h1>
			<!-- //logo -->
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
			    aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('/homevista')}}">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mx-lg-4">
						<a class="nav-link" href="{{ url('/aboutus')}}">About Us</a>
					</li>
					<li class="nav-item dropdown mr-lg-4">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false">
							Pages
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="{{url('/menu')}}">Menu</a>
							<a class="dropdown-item scroll" href="{{url('#services')}}">Services</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="{{url('/aboutus')}}">Team</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/gallery')}}">Gallery</a>
					</li>
					<li class="nav-item mx-lg-4">
						<a class="nav-link" href="{{url('/menu')}}">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{url('/contactus')}}">Contact Us</a>
					</li>
					<br>
					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="{{ route('orders.create') }}">Pedidos</a>
					</li>
					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="{{ route('shop.index') }}">Shop&nbsp;</a>
					</li>
					

					@if (Auth::guard('web')->check())
<li class="nav-item dropdown mr-lg-4">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                             Bienvenido, usuario &nbsp;{{ Auth::user()->name }}

                        <img src="{{ URL::asset("/images/cup.png") }}" style="top: 130px; left: 650px;height: 30px; width: 30px; border:none;"></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{url('/profile')}}">Perfil</a>
                            <a class="dropdown-item" href="{{ route('cart.index') }}">Cart<span class="cart-count">
                              @if (Cart::instance('default')->count() > 0)

                              <span>{{ Cart::instance('default')->count()}}</span></span></a>
                            @endif
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesion</a><form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    </form>
                        </div>
                </li>

@else

					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="{{ route('login')}}">Login</a>
					</li>
					<br>
					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="{{ route('register')}}">Registrate</a>
					</li>

					@endif

				</ul>
			</div>
		</nav>
		<!-- //navigation -->
	</div>
<div class="banner-2">

	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="{{ url('homevista')}}">Home</a>
			</li>
			<li class="breadcrumb-item">
				<a href="{{ route('shop.index')}}">Shop</a></li>
			<li class="breadcrumb-item active" aria-current="page">
				{{ $product->name}}</li>
		</ol>
	</nav>

	<!-- //EMPIEZA ACA LA SHOP -->
<div class="product-section container">
        <div class="product-section-image">
            <img src="{{ asset('images/products/'.$product->slug.'.jpg') }}" alt="product">
        </div>
        <div class="product-section-information">
            <h1 class="product-section-title">{{ $product->name}}</h1>
            <div class="product-section-subtitle">{{$product->details}}</div>
             <div class="product-section-price">{{$product->presentPrice() }}</div>
              <p>
                {{$product->description}}
            </p>


        </div>
         <p>&nbsp;</p>
             <form action="{{route('cart.store')}}" method="POST">
             	{{ csrf_field() }}
             	<input type="hidden" name="id" value="{{$product->id}}">
             	<input type="hidden" name="name" value="{{$product->name}}">
             	<input type="hidden" name="price" value="{{$product->price}}">
             	<button type="submit" class="button button-plain">Add to cart</button>
              </form>
    </div> 
    <br><br>
    <!-- end product-section -->
     <div class="might-like-section">
        <div class="container">
            <h2>You might also like...</h2>
            <div class="might-like-grid">



            	@foreach ($mightAlsoLike as $product)
                <div class="might-like-product"><a href="{{ route('shop.show', $product->slug)}}">
                    <img src="{{ asset('images/products/'.$product->slug.'.jpg') }}" alt="product">
                    <div class="might-like-product-name">{{ $product->name}}</div>
                    <div class="might-like-product-price">{{ $product->presentPrice() }}</div>
                </a>
                </div>

                @endforeach

                
            </div>
        </div>
    </div>

 <!-- //TERMINA LA SHOP -->

		<footer>
		<div class="w3ls-footer-grids py-5">
			<div class="container py-lg-2">
				<div class="row">
					<div class="col-lg-3 col-sm-6 w3l-footer one">
						<h2 class="index.html mb-3">Cappuccino Coffee</h2>
						<p>Totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
						<div class="clearfix"></div>
					</div>
					<div class="col-lg-2 col-sm-6 w3l-footer agileinfo_footer_grid my-sm-0 my-4">
						<h3 class="mb-3">Navigation</h3>
						<div class="nav-w3-l">
							<ul class="list-unstyled">
								<li class="mb-2">
									<a href="index.html">Home</a>
								</li>
								<li class="mb-2">
									<a href="about.html" class="">About Us</a>
								</li>
								<li class="mb-2">
									<a href="menu.html" class="">Menu</a>
								</li>
								<li class="mb-2">
									<a href="gallery.html" class="">Gallery</a>
								</li>
								<li>
									<a href="contact.html" class="">Contact Us</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-lg-3 col-sm-6 w3l-footer two mt-lg-0 mt-sm-5">
						<h3 class="mb-3">Connect With</h3>
						<ul class="list-unstyled">
							<li class="mb-3">
								<a class="fb" href="#">
									<i class="fab fa-facebook-f"></i>Like us on Facebook</a>
							</li>
							<li class="mb-3">
								<a class="fb1" href="#">
									<i class="fab fa-twitter"></i>Follow us on Twitter</a>
							</li>
							<li class="mb-3">
								<a class="fb2" href="#">
									<i class="fab fa-google-plus-g"></i>Add us on Google Plus</a>
							</li>
							<li>
								<a class="fb3" href="#">
									<i class="fab fa-dribbble"></i>Follow us on Dribbble</a>
							</li>
						</ul>
					</div>
					<div class="col-lg-4 col-sm-6 w3l-footer three mt-lg-0 mt-4">
						<h3 class="mb-3">Address</h3>
						<ul class="list-unstyled">
							<li>
								<i class="fas fa-map-marker"></i>
								<p>The company name
									<span>Lorem ipsum dolor,</span>New York,Morris Park. </p>
								<div class="clearfix"></div>
							</li>
							<li class="my-2">
								<i class="fas fa-phone"></i>
								<p>1234567890</p>
								<div class="clearfix"></div>
							</li>
							<li>
								<i class="fas fa-envelope"></i>
								<a href="mailto:info@example.com">mail@example.com</a>
								<div class="clearfix"></div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="copy-right-grids py-3">
			<p class="footer-gd text-center text-white">© 2018 Cappuccino Coffee. All Rights Reserved | Design by
				<a href="https://w3layouts.com/" target="_blank">W3layouts</a>
			</p>
		</div>
	</footer>
	<!-- //footer -->


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="{{asset ('js/jquery-2.2.3.min.js')}}"></script>
	<!-- Default-JavaScript-File -->
	<script src="{{ asset ('js/bootstrap.js')}}"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- smooth scrolling -->
	<script src="{{ asset('js/SmoothScroll.min.js')}}"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="{{ asset ('js/move-top.js')}}"></script>
	<!-- easing -->
	<script src="{{ asset ('js/easing.js')}}"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="{{ asset ('js/coffee.js')}}"></script>

	<!-- //Js files -->
	 <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="{{ asset ('https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="{{ asset('js/algolia.js') }}"></script>

</body>

</html>