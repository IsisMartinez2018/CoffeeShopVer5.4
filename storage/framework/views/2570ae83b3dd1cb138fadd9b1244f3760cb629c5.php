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
	<link rel="stylesheet" href="<?php echo e(asset('css/algolia.css')); ?>">
	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap(2).css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/ken-burns.css" type="text/css" media="all" />
	<!-- Banner CSS -->
	<link rel="stylesheet" href="css/style(2).css" type="text/css" media="all" />
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
	.cart-section {
  display: grid;
  grid-template-columns: 2fr 1fr;
  grid-gap: 30px;
  margin: 60px auto;
}

.cart-section h2 {
  margin-bottom: 30px;
}

.cart-section .cart-table-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  border-top: 1px solid #919191;
  padding: 14px 0;
}

.cart-section .cart-table-row:last-child {
  border-bottom: 1px solid #919191;
}

.cart-section .cart-table-row .cart-table-row-left,
.cart-section .cart-table-row .cart-table-row-right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.cart-section .cart-table-row .cart-table-row-left {
  width: 50%;
}

.cart-section .cart-table-row .cart-table-row-right {
  width: 33%;
  padding-top: 10px;
}

.cart-section .cart-table-row .cart-table-img {
  max-height: 75px;
}

.cart-section .cart-table-row .cart-table-actions {
  text-align: right;
  font-size: 14px;
}

.cart-section .cart-table-row .cart-item-details {
  padding-top: 5px;
}

.cart-section .cart-table-row .cart-table-description {
  color: #919191;
}

.cart-section .cart-table-row .cart-options {
  color: #212121;
  background: transparent;
  font-size: 14px;
  font-weight: 300;
  padding: 0;
}

.cart-section .cart-table-row .cart-options:hover {
  color: #6e6d6d;
}

.cart-section .cart-totals {
  margin: 30px 0;
  padding: 20px;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  background: #F5F5F5;
}

.cart-section .cart-totals .cart-totals-left {
  width: 50%;
}

.cart-section .cart-totals .cart-totals-right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  width: 35%;
  text-align: right;
}

.cart-section .cart-totals .cart-totals-total {
  font-weight: bold;
  font-size: 22px;
  line-height: 2;
}

.cart-section .cart-buttons {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  margin-bottom: 40px;
}

.cart-section .have-code {
  display: block;
  margin: 14px 0;
  text-align: right;
}

.cart-section .have-code-container {
  border: 1px solid #919191;
  padding: 16px;
  width: 50%;
  margin-left: auto;
}

.cart-section .have-code-container form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.cart-section .have-code-container input[type="text"] {
  width: 70%;
  padding: 10px;
  font-size: 16px;
}

.cart-section .have-code-container input[type="submit"] {
  background: white;
  border: 1px solid #919191;
  padding-top: 8px;
  padding-bottom: 8px;
}

.cart-section .have-code-container input[type="submit"]:hover {
  background: #212121;
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

.button {
  margin-right: 14px;
}

.have-code {
  display: block;
  margin: 14px 0;
  text-align: right;
}

.have-code-container {
  border: 1px solid #919191;
  padding: 16px;
  width: 75%;
  margin-left: auto;
}

.have-code-container form {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
}

.have-code-container input[type="text"] {
  width: 70%;
  padding: 10px;
  font-size: 16px;
}

.have-code-container input[type="submit"] {
  background: white;
  border: 1px solid #919191;
  padding-top: 8px;
  padding-bottom: 8px;
}

.have-code-container input[type="submit"]:hover {
  background: #212121;
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
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Carrito de compra</li>
		</ol>
	</nav>


<!--empieza la shop-->
 <div class="cart-section container">
        <div>
<?php if(session()->has('success_message')): ?>
            <div class="spacer"></div>
            <div class="alert alert-success">
                <?php echo e(session()->get('success_message')); ?>

            </div><br>
        <?php endif; ?>

        <?php if(count($errors) > 0): ?>
            <div class="spacer"></div>
            <div class="alert alert-danger">
                <ul>
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li><?php echo $error; ?></li>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
            </div>
        <?php endif; ?>

<?php if(Cart::count() > 0): ?>

            <h2> <?php echo e(Cart::count()); ?> item(s) in Shopping Cart</h2>
             <div class="cart-table">
              <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

              



                  <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="<?php echo e(route ('shop.show', $item->model->slug)); ?>"><img src="<?php echo e(asset('/images/products/'.$item->model->slug.'.jpg')); ?>" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="<?php echo e(route ('shop.show', $item->model->slug)); ?>"><?php echo e($item->model->name); ?></a></div>
                            <div class="cart-table-description"><?php echo e($item->model->details); ?></div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                              
                          <form action="<?php echo e(route('cart.destroy', $item->rowId)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                            <?php echo e(method_field('DELETE')); ?>

                            <button type="submit" class="cart-options">Remove</button>

                          </form>



                             <br>
                           
 <form action="<?php echo e(route('cart.switchToSaveForLater', $item->rowId)); ?>" method="POST">
                            <?php echo e(csrf_field()); ?>

                           
                            <button type="submit" class="cart-options">Save for Later</button>

                          </form>




                        </div>
                        <div>
                             <select class="quantity" data-id="<?php echo e($item->rowId); ?>">
                                <?php for($i = 1; $i < 5 + 1 ; $i++): ?>
                                    <option <?php echo e($item->qty == $i ? 'selected' : ''); ?>><?php echo e($i); ?></option>
                                <?php endfor; ?>
                                
                            </select>
                        </div>
                        <div><?php echo e(presentPrice($item->subtotal)); ?></div>
                    </div>
                </div> <!-- end cart-table-row -->

                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 
             </div> <!-- end cart-table -->
             
             <?php if(! session()->has('coupon')): ?>

<a href="#" class="have-code">Have a Code?</a>
             <div class="have-code-container">
                <form action="<?php echo e(route('coupon.store')); ?>" method="POST">
                  <?php echo e(csrf_field()); ?>

                    <input type="text" name="coupon_code" id="coupon_code">
                   <button type="submit" class="button button-plain">Apply</button>
                </form>
            </div> <!-- end have-code-container -->
<?php endif; ?>

             <div class="cart-totals">
                <div class="cart-totals-left">
                    Shipping is free because we’re awesome like that. Also because that’s additional stuff I don’t feel like figuring out :).
                </div>
                <div class="cart-totals-right">
                    <div>
                        Subtotal <br>
                        <?php if(session()->has('coupon')): ?>
                            Code (<?php echo e(session()->get('coupon')['name']); ?>)
                           : <form action="<?php echo e(route('coupon.destroy')); ?>" method="POST" style="display:inline">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('delete')); ?>

                                <button type="submit" style="font-size:14px;">Remove</button>
                            </form>
                            <hr>
                            New Subtotal <br>
                        <?php endif; ?>
                        Tax (13%)<br>
                        <span class="cart-totals-total">Total</span>
                    </div>
                    <div class="cart-totals-subtotal">
                        <?php echo e(presentPrice(Cart::subtotal())); ?> <br>
                        <?php if(session()->has('coupon')): ?>
                            -<?php echo e(presentPrice($discount)); ?> 
                            <hr>
                            <?php echo e(presentPrice($newSubtotal)); ?> <br>
                        <?php endif; ?>
                        <?php echo e(presentPrice($newTax)); ?> <br>
                        <span class="cart-totals-total"><?php echo e(presentPrice($newTotal)); ?></span>
                    </div>
                </div>
            </div> <!-- end cart-totals -->



             <div class="cart-buttons">
                <a href="<?php echo e(route ('shop.index')); ?>" class="button">Continue Shopping</a>
                <a href="<?php echo e(route ('checkout.index')); ?>" class="button-primary">Proceed to Checkout</a>
            </div>

<?php else: ?>
<h3>No items in cart!</h3>
<br><br><br><br><br><br>
<a href="<?php echo e(route ('shop.index')); ?>" class="button">Continue shopping</a>
<br><br><br>

            <?php endif; ?>

<?php if(Cart::instance('saveForLater')->count() > 0): ?>

            <h2> <?php echo e(Cart::instance('saveForLater')->count()); ?> item(s) save for later</h2>
 
             <div class="saved-for-later cart-table">

              <?php $__currentLoopData = Cart::instance('saveForLater')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="cart-table-row">
                    <div class="cart-table-row-left">
                        <a href="<?php echo e(route ('shop.show', $item->model->slug)); ?>">
                          <img src="<?php echo e(asset('/images/products/'.$item->model->slug.'.jpg')); ?>" alt="item" class="cart-table-img"></a>
                        <div class="cart-item-details">
                            <div class="cart-table-item"><a href="<?php echo e(route ('shop.show', $item->model->slug)); ?>"><?php echo e($item->model->name); ?></a></div>
                            <div class="cart-table-description"><?php echo e($item->model->details); ?></div>
                        </div>
                    </div>
                    <div class="cart-table-row-right">
                        <div class="cart-table-actions">
                           <form action="<?php echo e(route('saveForLater.destroy', $item->rowId)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                <?php echo e(method_field('DELETE')); ?>

                        <button type="submit" class="cart-options">Remove</button>
                            </form>
                            <br>


                             <form action="<?php echo e(route('saveForLater.switchToCart', $item->rowId)); ?>" method="POST">
                                <?php echo e(csrf_field()); ?>

                                 <button type="submit" class="cart-options">Move to Cart</button>
                            </form>
                          
                        </div> 
                         <div><?php echo e($item->model->presentPrice()); ?>

                         </div>
                    
                </div> <!-- end cart-table-row -->
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                 </div> <!-- end saved-for-later -->


             <?php else: ?>
             <h3>No tienes items guardados para despues</h3>
             <?php endif; ?>
         </div>
     </div> <!-- end cart-section -->
 <div class="might-like-section">
        <div class="container">
            <h2>You might also like...</h2>
            <div class="might-like-grid">
                <?php $__currentLoopData = $mightAlsoLike; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="might-like-product"><a href="<?php echo e(route('shop.show', $product->slug)); ?>">
                    <img src="<?php echo e(asset('images/products/'.$product->slug.'.jpg')); ?>" alt="product">
                    <div class="might-like-product-name"><?php echo e($product->name); ?></div>
                    <div class="might-like-product-price"><?php echo e($product->presentPrice()); ?></div>
                    </a>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->
	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smooth scrolling -->

	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/coffee.js"></script>

	<!-- //Js files -->
	 <!-- Include AlgoliaSearch JS Client and autocomplete.js library -->
    <script src="https://cdn.jsdelivr.net/algoliasearch/3/algoliasearch.min.js"></script>
    <script src="https://cdn.jsdelivr.net/autocomplete.js/0/autocomplete.min.js"></script>
    <script src="<?php echo e(asset('js/algolia.js')); ?>"></script>


<script src="<?php echo e(asset('js/app.js')); ?>"></script>
    <script>
        (function(){
            const classname = document.querySelectorAll('.quantity');

            Array.from(classname).forEach(function(element){
                element.addEventListener('change', function(){

                    const id = element.getAttribute('data-id');
                    axios.patch(`cart/${id}`, {
                        quantity: this.value
                    })
                    .then(function (response) {
                        //console.log(response);
                        window.location.href = '<?php echo e(route('cart.index')); ?>'

                    })
                    .catch(function (error) {
                        console.log(error);
                        window.location.href = '<?php echo e(route('cart.index')); ?>'
                    });
                });
            });
        })();

</script>
</body>
</html>