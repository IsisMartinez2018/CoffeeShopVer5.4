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
	 <style>
        .mt-32 {
            margin-top: 32px;
        }
    </style>

    <script src="https://js.stripe.com/v3/"></script>
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
	h1.checkout-heading {
  margin-top: 40px;
}

.checkout-section {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
  margin: 40px auto 80px;
}

.checkout-section .checkout-table-container {
  margin-left: 124px;
}

.checkout-section h2 {
  margin-bottom: 28px;
}

.checkout-section .checkout-table-row {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
  border-top: 1px solid #919191;
  padding: 14px 0;
}

.checkout-section .checkout-table-row:last-child {
  border-bottom: 1px solid #919191;
}

.checkout-section .checkout-table-row .checkout-table-row-left,
.checkout-section .checkout-table-row .checkout-table-row-right {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  -webkit-box-align: center;
      -ms-flex-align: center;
          align-items: center;
}

.checkout-section .checkout-table-row .checkout-table-row-left {
  width: 75%;
}

.checkout-section .checkout-table-row .checkout-table-img {
  max-height: 60px;
}

.checkout-section .checkout-table-row .checkout-table-description {
  color: #919191;
}

.checkout-section .checkout-table-row .checkout-table-price {
  padding-top: 6px;
}

.checkout-section .checkout-table-row .checkout-table-quantity {
  border: 1px solid #919191;
  padding: 4px 12px;
  margin-right: 5px;
}

.checkout-section .checkout-totals {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
      -ms-flex-pack: justify;
          justify-content: space-between;
  border-bottom: 1px solid #919191;
  padding: 18px 0;
  line-height: 2;
}

.checkout-section .checkout-totals .checkout-totals-right {
  text-align: right;
}

.checkout-section .checkout-totals .checkout-totals-total {
  font-weight: bold;
  font-size: 22px;
  line-height: 2.2;
}
form .half-form {
  display: grid;
  grid-template-columns: 1fr 1fr;
  grid-gap: 30px;
}

form button[type="submit"] {
  border-style: none;
  cursor: pointer;
  font-size: 18px;
  line-height: 1.6;
}

.form-group {
  margin-bottom: 20px;
}

.form-group label {
  display: block;
}

.form-group input {
  width: 100%;
  padding: 12px;
  font-size: 16px;
}
.container {
  margin: auto;
  max-width: 1200px;
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

.StripeElement {
  background-color: white;
  height: 40px;
  padding: 10px 12px;
  border-radius: 4px;
  border: 1px solid transparent;
  box-shadow: 0 1px 3px 0 #e6ebf1;
  -webkit-transition: box-shadow 150ms ease;
  transition: box-shadow 150ms ease;
}

.StripeElement--focus {
  box-shadow: 0 1px 3px 0 #cfd7df;
}

.StripeElement--invalid {
  border-color: #fa755a;
}

.StripeElement--webkit-autofill {
  background-color: #fefde5 !important;
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
		</div>
<div class="banner-2">

	</div>
	<!-- breadcrumb -->
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="index.html">Home</a>
			</li>
			<li class="breadcrumb-item active" aria-current="page">Checkout</li>
		</ol>
	</nav>

<!-- //empieza checkout -->

    <div class="container">
<br><br>
        <?php if(session()->has('success_message')): ?>
            <div class="spacer"></div>
            <div class="alert alert-success">
                <?php echo e(session()->get('success_message')); ?>

            </div>
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

        <div class="container">
             <h1 class="checkout-heading stylish-heading">Checkout</h1>
        <div class="checkout-section">
            <div>
                <form action="<?php echo e(route('checkout.store')); ?>" method="POST" id="payment-form">
                    <?php echo e(csrf_field()); ?>

                    <h2>Billing Details</h2>

                    <div class="form-group">
                        <label for="email">Email Address</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" name="name" value="<?php echo e(old('name')); ?>" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address" name="address" value="<?php echo e(old('address')); ?>" required>
                    </div>

                    <div class="half-form">
                        <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" id="city" name="city" value="<?php echo e(old('city')); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province" name="province" value="<?php echo e(old('province')); ?>" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="half-form">
                        <div class="form-group">
                            <label for="postalcode">Postal Code</label>
                            <input type="text" class="form-control" id="postalcode" name="postalcode" value="<?php echo e(old('postalcode')); ?>" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" class="form-control" id="phone" name="phone" value="<?php echo e(old('phone')); ?>" required>
                        </div>
                    </div> <!-- end half-form -->

                    <div class="spacer"></div>

                    <h2>Payment Details</h2>

                    <div class="form-group">
                        <label for="name_on_card">Name on Card</label>
                        <input type="text" class="form-control" id="name_on_card" name="name_on_card" value="">
                    </div>

                    <div class="form-group">
                        <label for="card-element">
                          Credit or debit card
                        </label>
                        <div id="card-element">
                          <!-- a Stripe Element will be inserted here. -->
                        </div>

                        <!-- Used to display form errors -->
                        <div id="card-errors" role="alert"></div>
                    </div>
                    <div class="spacer"></div>

                    <button type="submit" id="complete-order" class="button-primary full-width">Complete Order</button>


                </form>
            </div>



            <div class="checkout-table-container">
                <h2>Your Order</h2>

                <div class="checkout-table">
                    <?php $__currentLoopData = Cart::content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="checkout-table-row">
                        <div class="checkout-table-row-left">
                            <img src="<?php echo e(asset('images/products/'.$item->model->slug.'.jpg')); ?>" alt="item" class="checkout-table-img">
                            <div class="checkout-item-details">
                                <div class="checkout-table-item"><?php echo e($item->model->name); ?></div>
                                <div class="checkout-table-description"><?php echo e($item->model->details); ?></div>
                                <div class="checkout-table-price"><?php echo e($item->model->presentPrice()); ?></div>
                            </div>
                        </div> <!-- end checkout-table -->

                        <div class="checkout-table-row-right">
                            <div class="checkout-table-quantity"><?php echo e($item->qty); ?></div>
                        </div>
                    </div> <!-- end checkout-table-row -->
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                </div> <!-- end checkout-table -->

                <div class="checkout-totals">
                    <div class="checkout-totals-left">
                        Subtotal <br>
                        <?php if(session()->has('coupon')): ?>
                            Discount (<?php echo e(session()->get('coupon')['name']); ?>) :
                            <br>
                            <hr>
                            New Subtotal <br>
                        <?php endif; ?>
                        Tax (13%)<br>
                        <span class="checkout-totals-total">Total</span>

                    </div>

                    <div class="checkout-totals-right">
                        <?php echo e(presentPrice(Cart::subtotal())); ?> <br>
                        <?php if(session()->has('coupon')): ?>
                            -<?php echo e(presentPrice($discount)); ?> <br>
                            <hr>
                            <?php echo e(presentPrice($newSubtotal)); ?> <br>
                        <?php endif; ?>
                        <?php echo e(presentPrice($newTax)); ?> <br>
                        <span class="checkout-totals-total"><?php echo e(presentPrice($newTotal)); ?></span>

                    </div>
                </div> <!-- end checkout-totals -->
            </div>

        </div> <!-- end checkout-section -->
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

<script>
        (function(){
            // Create a Stripe client
            var stripe = Stripe('pk_test_hqvhCMTwUyvyqbxVjFbqznkw');
             // Create an instance of Elements
            var elements = stripe.elements();
             // Custom styling can be passed to options when creating an Element.
            // (Note that this demo uses a wider set of styles than the guide below.)
            var style = {
              base: {
                color: '#32325d',
                lineHeight: '18px',
                fontFamily: '"Roboto", Helvetica Neue", Helvetica, sans-serif',
                fontSmoothing: 'antialiased',
                fontSize: '16px',
                '::placeholder': {
                  color: '#aab7c4'
                }
              },
              invalid: {
                color: '#fa755a',
                iconColor: '#fa755a'
              }
            };
             // Create an instance of the card Element
            var card = elements.create('card', {
                style: style,
                hidePostalCode: true
            });
             // Add an instance of the card Element into the `card-element` <div>
            card.mount('#card-element');
             // Handle real-time validation errors from the card Element.
            card.addEventListener('change', function(event) {
              var displayError = document.getElementById('card-errors');
              if (event.error) {
                displayError.textContent = event.error.message;
              } else {
                displayError.textContent = '';
              }
            });
             // Handle form submission
            var form = document.getElementById('payment-form');
            form.addEventListener('submit', function(event) {
              event.preventDefault();
               // Disable the submit button to prevent repeated clicks
              document.getElementById('complete-order').disabled = true;
               var options = {
                name: document.getElementById('name_on_card').value,
                address_line1: document.getElementById('address').value,
                address_city: document.getElementById('city').value,
                address_state: document.getElementById('province').value,
                address_zip: document.getElementById('postalcode').value
              }
               stripe.createToken(card, options).then(function(result) {
                if (result.error) {
                  // Inform the user if there was an error
                  var errorElement = document.getElementById('card-errors');
                  errorElement.textContent = result.error.message;
                   // Enable the submit button
                  document.getElementById('complete-order').disabled = false;
                } else {
                  // Send the token to your server
                  stripeTokenHandler(result.token);
                }
              });
            });
             function stripeTokenHandler(token) {
              // Insert the token ID into the form so it gets submitted to the server
              var form = document.getElementById('payment-form');
              var hiddenInput = document.createElement('input');
              hiddenInput.setAttribute('type', 'hidden');
              hiddenInput.setAttribute('name', 'stripeToken');
              hiddenInput.setAttribute('value', token.id);
              form.appendChild(hiddenInput);
               // Submit the form
              form.submit();
            }
        })();
    </script>
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

</body>

</html>