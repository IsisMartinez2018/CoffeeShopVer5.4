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
	<!-- Custom-Files -->
	<link rel="stylesheet" href="<?php echo e(asset('css/bootstrap(2).css')); ?>">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('css/ken-burns.css')); ?>" type="text/css" media="all" />
	<!-- Banner CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('css/style(2).css')); ?>" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="<?php echo e(asset('css/fontawesome-all.css')); ?>">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Arizonia&amp;subset=latin-ext" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Timmana&amp;subset=telugu" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
	<!-- //Web-Fonts -->




<style type="text/css">
.section-description {
  width: 80%;
  margin: 44px auto;
}

.sidebar h3 {
  font-weight: bold;
  margin-bottom: 16px;
}

.sidebar ul {
  line-height: 2;
  margin-bottom: 20px;
}

.featured-section .products {
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

.products-section .products {
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
  opacity: 0;
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
  margin-bottom: 16px;
}

.pagination {
  display: inline-block;
  padding-left: 0;
  margin: 20px 0;
  border-radius: 4px;
}

.pagination > li {
  display: inline;
}

.pagination > .active > a,
.pagination > .active > span,
.pagination > .active > a:hover,
.pagination > .active > span:hover,
.pagination > .active > a:focus,
.pagination > .active > span:focus {
  background-color: #f4f4f4;
  border-color: #DDDDDD;
  color: inherit;
  cursor: default;
  z-index: 2;
}

.pagination > li:first-child > a,
.pagination > li:first-child > span {
  margin-left: 0;
  border-top-left-radius: 4px;
  border-bottom-left-radius: 4px;
}

.pagination > li > a,
.pagination > li > span {
  background-color: #FFFFFF;
  border: 1px solid #DDDDDD;
  color: inherit;
  float: left;
  line-height: 1.42857;
  margin-left: -1px;
  padding: 16px 22px;
  position: relative;
  text-decoration: none;
}

.pagination > li > a:focus,
.pagination > li > a:hover,
.pagination > li > span:focus,
.pagination > li > span:hover {
  z-index: 2;
  color: #23527c;
  background-color: #eee;
  border-color: #ddd;
}

.search-form {
  position: relative;
}

.search-icon {
  color: gray;
  position: absolute;
  top: 12px;
  left: 12px;
}

.search-box {
  padding: 10px 12px 10px 34px;
  width: 400px;
  max-width: 100%;
  font-size: 14px;
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


h1.stylish-heading {
  margin-bottom: 60px;
  position: relative;
}

h1.stylish-heading:before,
h1.stylish-heading:after {
  position: absolute;
  top: -4px;
  left: 0;
  width: 66px;
  height: 1px;
  background: #212121;
  content: '';
  display: block;
}

h1.stylish-heading:after {
  bottom: -14px;
  top: auto;
}
.sidebar li.active {
        font-weight: 500;
    }
  .products-header {
    display: flex;
    justify-content: space-between;
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
						<a class="nav-link" href="<?php echo e(url('/homevista')); ?>">Home
							<span class="sr-only">(current)</span>
						</a>
					</li>
					<li class="nav-item mx-lg-4">
						<a class="nav-link" href="<?php echo e(url('/aboutus')); ?>">About Us</a>
					</li>
					<li class="nav-item dropdown mr-lg-4">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
						    aria-expanded="false">
							Pages
						</a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?php echo e(url('/menu')); ?>">Menu</a>
							<a class="dropdown-item scroll" href="<?php echo e(url('#services')); ?>">Services</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="<?php echo e(url('/aboutus')); ?>">Team</a>
						</div>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo e(url('/gallery')); ?>">Gallery</a>
					</li>
					<li class="nav-item mx-lg-4">
						<a class="nav-link" href="<?php echo e(url('/menu')); ?>">Menu</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="<?php echo e(url('/contactus')); ?>">Contact Us</a>
					</li>
					<br>
					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="<?php echo e(route('orders.create')); ?>">Pedidos</a>
					</li>
					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="<?php echo e(route('shop.index')); ?>">Shop&nbsp;</a>
					</li>
					

					<?php if(Auth::guard('web')->check()): ?>
<li class="nav-item dropdown mr-lg-4">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                             Bienvenido, usuario &nbsp;<?php echo e(Auth::user()->name); ?>


                        <img src="<?php echo e(URL::asset("/images/cup.png")); ?>" style="top: 130px; left: 650px;height: 30px; width: 30px; border:none;"></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(url('/profile')); ?>">Perfil</a>
                            <a class="dropdown-item" href="<?php echo e(route('cart.index')); ?>">Cart<span class="cart-count">
                              <?php if(Cart::instance('default')->count() > 0): ?>

                              <span><?php echo e(Cart::instance('default')->count()); ?></span></span></a>
                            <?php endif; ?>
                            
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">Cerrar Sesion</a><form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                       <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
                                    </form>
                        </div>
                </li>

<?php else: ?>

					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="<?php echo e(route('login')); ?>">Login</a>
					</li>
					<br>
					<li class="nav-item" style="margin-left: 25px">
						<a class="nav-link" href="<?php echo e(route('register')); ?>">Registrate</a>
					</li>

					<?php endif; ?>

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
				<a href="/">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Shop</li>
		</ol>
	</nav>

	<!-- //EMPIEZA ACA LA SHOP -->

 <div class="products-section container">
        <div class="sidebar">
            <h3>By Category</h3>
            <ul>
               <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><a href="<?php echo e(route ('shop.index', [ 'category' => $category->slug])); ?>"><?php echo e($category->name); ?></a></li>
               <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

              
                
            </ul>

            
        </div> <!-- end sidebar -->
        <div>
            <div class="products-header">
                <h1 class="stylish-heading"><?php echo e($categoryName); ?></h1>
                <div>
                    <strong>Price: </strong>
                    <a href="<?php echo e(route('shop.index', ['category'=> request()->category, 'sort' => 'low_high'])); ?>">Low to High</a> |
                    <a href="<?php echo e(route('shop.index', ['category'=> request()->category, 'sort' => 'high_low'])); ?>">High to Low</a>

                </div>
            </div>

            <div class="products text-center">
                <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                    <div class="product">
                <a href="<?php echo e(route('shop.show', $product->slug)); ?>">
                <img src="<?php echo e(asset('images/products/'.$product->slug.'.jpg')); ?>" alt="product" style="width: 200px; height: 200px;">
            	</a>
                <a href="<?php echo e(route('shop.show', $product->slug)); ?>">
                <div class="product-name"><?php echo e($product->name); ?>

                </div>
            	</a>
                <div class="product-price"><?php echo e($product->presentPrice()); ?>

                </div></div>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
<div style="text-align: left">No items found</div>
<?php endif; ?>

  




            
           
        </div> <!-- end products -->
   <br>
    <?php echo e($products->appends(request()->input())->links()); ?>

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
	<script src="<?php echo e(asset('js/jquery-2.2.3.min.js')); ?>"></script>
	<!-- Default-JavaScript-File -->
	<script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- smooth scrolling -->
	<script src="<?php echo e(asset('js/SmoothScroll.min.js')); ?>"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="<?php echo e(asset('js/move-top.js')); ?>"></script>
	<!-- easing -->
	<script src="<?php echo e(asset('js/easing.js')); ?>"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="<?php echo e(asset('js/coffee.js')); ?>"></script>

	<!-- //Js files -->
	 <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="<?php echo e(asset('https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js')); ?>"></script>
    <script src="<?php echo e(asset ('https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js')); ?>"></script>
    <script src="<?php echo e(asset('js/algolia.js')); ?>"></script>

</body>

</html>