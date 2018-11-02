<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Catering Order Form a Responsive Widget Template :: w3layouts</title>
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Catering  Order Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tags -->
	<!-- Stylesheet -->
<link rel="stylesheet" href="<?php echo e(asset('css/range.css')); ?>" />
<script src="js/range.js"></script>


	<link href="<?php echo e(asset('css/wickedpicker.css')); ?>" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="<?php echo e(asset('css/jquery-ui.css')); ?>" />
	<link href="<?php echo e(asset('css/style3.css')); ?>" rel='stylesheet' type='text/css' />
	<!-- //Stylesheet -->
	<!--fonts-->
	<link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
	<!--//fonts-->
</head>

<body style="background-image: url(<?php echo e(url('/images/coffee-shop-1.jpg')); ?>)">
	<!--background-->
	<h1> Pedidos Online </h1>
	<div class="bg-agile"> 
	<div class="book-appointment">
			
			<div class="book-agileinfo-form">
				 <form action="<?php echo e(route('orders.store')); ?>" method="POST">
					<?php if($errors->any()): ?>
    
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="color: #ec24b6;"><?php echo e($error); ?><hr></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
<?php endif; ?>

					<h2 class="sub-head-w3ls">Formulario de pedidos<img src="<?php echo e(URL::asset("/images/food-and-restaurant.png")); ?>" style="top: 130px; left: 650px;height: 40px; width: 40px; border:none;"></h2>
					<div class="main-agile-sectns">

						<div class="agileits-btm-spc form-text1">
        					<i class="fa fa-envelope" aria-hidden="true"></i>
        					<input type="text" name="Nombre" class="Nombre" required="required" placeholder="Nombre">
						</div>


						<div class="agileits-btm-spc form-text2">
							
       						 <i class="fa fa-envelope" aria-hidden="true"></i>
       						 <input type="text" name="Apellido" class="Apellido" required="required" placeholder="Apellido">

						</div>
					</div>
						
						<div class="agileits-btm-spc form-text">
						
            			<i class="fa fa-envelope" aria-hidden="true"></i>
            			<input type="email" class="Email" name="Email" placeholder="Email" required="" placeholder="Email">
						</div>


					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<p style="width:100%; color: #a0a0a0; font-size: 16px; letter-spacing: 1.5px; padding: 10px 10px; outline: none; background: rgba(255, 255, 255, 0); border: none; box-sizing: border-box; font-family: 'Roboto', sans-serif;"> Teléfono </p>
            				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
            				<input type="number" class="Telefono" name="Telefono" required="" required="required">
           
						</div>


						<div class="agileits-btm-spc form-text2">
							<p style="width:100%; color: #a0a0a0; font-size: 16px; letter-spacing: 1.5px; padding: 10px 10px; outline: none; background: rgba(255, 255, 255, 0); border: none; box-sizing: border-box; font-family: 'Roboto', sans-serif;"> Cantidad (1-10) </p>
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>


            <div class="container"><input type="range" class="slider white" name="Cantidad"  min="1" max="10" step="1" value="0" required="required" style="width: 220px"></div>





						</div>
					</div>

					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							<p style="width:100%; color: #a0a0a0; font-size: 16px; letter-spacing: 1.5px; padding: 10px 10px; outline: none; background: rgba(255, 255, 255, 0); border: none; box-sizing: border-box; font-family: 'Roboto', sans-serif;"> Fecha Entrega</p>
            				<i class="fa fa-unlock-alt" aria-hidden="true"></i>
           					 <input type="date" class="Fecha" name="Fecha" required="required">
            

						</div>


						<div class="agileits-btm-spc form-text2">
							 <br>
            		<p style="width:100%; color: #a0a0a0; font-size: 16px; letter-spacing: 1.5px; padding: 10px 10px; outline: none; background: rgba(255, 255, 255, 0); border: none; box-sizing: border-box; font-family: 'Roboto', sans-serif;">¿Algún comentario extra? </p>
            		<textarea rows="4" cols="60" name="Comentario" style="width: 95%; height: 150px; padding: 12px 20px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8; font-size: 16px; resize: none;"></textarea>
						</div>
					</div>


					<div class="main-agile-sectns">
						<div class="agileits-btm-spc form-text1">
							
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <select name="Type_Coffee" value="Type_Coffee" class="frm-field required" id="country">
        
		<option value="tipodecafe"> Tipo de Café </option>
        <option value="Capuccino"> Capuccino </option>
        <option value="Americano"> Americano </option>
        <option value="Moccachino"> Moccachino </option>
        <option value="Latte"> Latte </option>
        <option value="Expresso Black"> Expresso Black </option>
        </select>
						</div>
						<div class="agileits-btm-spc form-text2">
							
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <select name="Size" value="Size" class="frm-field required" id="country">
        <option value="tamaño"> Tamaño (S/M/L) </option>
        <option value="S"> S </option>
        <option value="M"> M </option>
        <option value="L"> L </option>
        </select>
        <br>
						</div>

						<div class="agileits-btm-spc form-text2">
							
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <select name="Extra" value="Extra" class="frm-field required" id="country">
        <option value="extra"> Extra (+$) </option>
        <option value="Hielo"> Hielo </option>
        <option value="Leche"> Leche </option>
        <option value="Crema"> Crema </option>
        <option value="Helado"> Helado </option>
        <option value="Galleta"> Galleta </option>
        </select>
        <br>
						</div>






<div class="agileits-btm-spc form-text2">
							
        <i class="fa fa-envelope" aria-hidden="true"></i>
        <select name="id_users" value="id_users" class="frm-field required" id="country">
       
        <option value=""> Id usuario </option>
        <option value="<?php echo e(Auth::user()->id); ?>"> <?php echo e(Auth::user()->id); ?> </option>
        </select>
        <br>
						</div>







					</div>
					<div class="wthree-text">
						<h6>Dulzor</h6>
						<ul class="radio-w3ls">
							<li>
								<input type="radio" value="edulcorante" id="a-option" name="Dulzor">
								<label for="a-option">Edulcorante</label>
								<div class="check"></div>
							</li>
							<li>
								<input type="radio" id="b-option" name="Dulzor" value="azucar">
								<label for="b-option">Azucar</label>
								<div class="check">
									<div class="inside"></div>
								</div>
							</li>
							
						</ul>
						<div class="clear"></div>
					</div>
					
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">
   
					<div class="clear"></div>
					<input type="submit" name="submit" value="submit">
					
					<div class="clear"></div>
				</form>
			</div>

		</div>
		<div class="left-agileits-w3layouts-img" style="background-image: url(<?php echo e(url('/images/prueba2.jpg')); ?>); z-index: -10;">
			<h3 style="color: white;">What we provide you</h3><img src="<?php echo e(URL::asset("/images/divider.png")); ?>" style="top: 230px; left: 810px; height: 120px; width: 290px; border:none;">
			<ul>
				

<br><br><br>
				<li style="color: black; font-weight: 350;text-shadow: 2px 2px 4px white;"><span style="color: black"><img src="<?php echo e(URL::asset("/images/clock.png")); ?>" style="top: 340px; left: 800px; height: 40px; width: 40px; border:none;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24x7 Food service are available</li>
				<li style="color: black; font-weight: 350;text-shadow: 2px 2px 4px white;"><span style="color: black"><img src="<?php echo e(URL::asset("/images/menu.png")); ?>" style="top: 395px; left: 800px; height: 40px; width: 40px; border:none;"><br></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online Food Order booking</li>
			
				<li style="color: black; font-weight: 350;text-shadow: 2px 2px 4px white;"><span style="color: black"><img src="<?php echo e(URL::asset("/images/padlock.png")); ?>" style="top: 450px; left: 800px; height: 40px; width: 40px; border:none;"><br></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Credit and debit card payment</li>
			




			</ul>
			<img src="<?php echo e(URL::asset("/images/divider2.png")); ?>" style="top: 530px; left: 810px; height: 120px; width: 290px; border:none;">
		</div>
		
	</div>
	<!--copyright-->
	<div class="copy-w3layouts">
		<p>&copy; 2018.Catering Order Form . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> & Isis Martinez	</p>
	</div>
	<!--//copyright-->
	<script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>
	<!-- Time -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->

</body>

</html>