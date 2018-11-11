<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>

     <title>One Page Resume</title>

     <style type="text/css">
        * { margin: 0; padding: 0; }
        body { font: 16px Helvetica, Sans-Serif; line-height: 24px; background: url(images/coffee-shop-1.jpg); background-size: 1380px }
        .clear { clear: both; }
        #page-wrap { width: 800px; margin: 40px auto 60px; margin-right: 100px}
        #pic { float: right; margin: -30px 0 0 0; }
        h1 { margin: 0 0 16px 0; padding: 0 0 16px 0; font-size: 42px; font-weight: bold; letter-spacing: -2px; border-bottom: 1px solid #999; }
        h2 { font-size: 20px; margin: 0 0 6px 0; position: relative; }
        h2 span { position: absolute; bottom: 0; right: 0; font-style: italic; font-family: Georgia, Serif; font-size: 16px; color: #999; font-weight: normal; }
        p { margin: 0 0 16px 0; }
        a { color: #999; text-decoration: none; }
        a:hover { border-bottom-style: solid; color: black; }
        ul { margin: 0 0 32px 17px; }
        #objective { width: 500px; float: left; }
        #objective p { font-family: Georgia, Serif; font-style: italic; color: #666; }
        dt { font-style: italic; font-weight: bold; font-size: 18px; text-align: right; padding: 0 26px 0 0; width: 150px; float: left; height: 100px; border-right: 1px solid #999;  }
        dd { width: 600px; float: right; }
        dd.clear { float: none; margin: 0; height: 15px; }
     </style>

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
    <link rel="stylesheet" href="<?php echo e(url('css/bootstrap(2).css')); ?>">
    <!-- Bootstrap-Core-CSS -->
    <!-- Flexslider-CSS -->
    <link rel="stylesheet" href="<?php echo e(url('css/style(2).css')); ?>" type="text/css" media="all" />
    <!-- Style-CSS -->
    <link rel="stylesheet" href="<?php echo e(url('css/fontawesome-all(2).css')); ?>">
    <!-- Font-Awesome-Icons-CSS -->
    <!-- //Custom-Files -->

    <!-- Web-Fonts -->
    <link href="//fonts.googleapis.com/css?family=Arizonia&amp;subset=latin-ext" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Timmana&amp;subset=telugu" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Bellefair&amp;subset=hebrew,latin-ext" rel="stylesheet">
    <!-- //Web-Fonts -->

</head>

<body>
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
                    <li class="nav-item">
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
                            <a class="dropdown-item" href="<?php echo e(url('home/#services')); ?>">Services</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo e(url('/aboutus')); ?>">Team</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/gallery')); ?>">Gallery&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/menu')); ?>">Menu&nbsp;</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(url('/contactus')); ?>">Contact Us&nbsp;</a>
                    </li>
                    <br>
                    <li class="nav-item" style="margin-left: 25px">
                        <a class="nav-link" href="<?php echo e(route('orders.create')); ?>">Pedidos&nbsp;</a>
                    </li>
                    

                    <?php if(Auth::guard('web')->check()): ?>
<li class="nav-item dropdown mr-lg-4">

                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                             Bienvenido, usuario &nbsp;<?php echo e(Auth::user()->name); ?>


                        <img src="<?php echo e(asset ('/images/'.$profile->avatar)); ?>" style="top: 130px; left: 650px;height: 30px; width: 30px; border:none; border-radius: 15px;"></a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="<?php echo e(url('/profile')); ?>">Perfil</a>
                            
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
    <!-- //header -->
    <!-- inner banner -->
    <div class="banner-2">

    </div>
    <!-- breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Perfil</li>
        </ol>
    </nav>

<div id="page-wrap">
   <form action="<?php echo e(route('profile.update',$profile->id)); ?>" method="POST" enctype="multipart/form-data">
                    <?php if($errors->any()): ?>
    
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li style="color: #ec24b6;"><?php echo e($error); ?><hr></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  
<?php endif; ?>

 
  <?php echo e(csrf_field()); ?>

        <input name="_method" type="hidden" value="PATCH">
       


        <div id="contact-info" class="vcard">
        
            <!-- Microformats! -->

        
            <h1 class="fn">Perfil de usuario
                
            </h1>
            <div style="text-align:right"><a href="<?php echo e(route('profile.index')); ?>" style="text-decoration: none; color: white"><img src="<?php echo e(URL::asset("/images/back.png")); ?>" style="margin-top:-80px;margin-left: -100px; height: 27px; width: 27px; border:none;">Atrás</a></div>

        
                               
                            
            <p>
                <br>
                Telefono: <span class="tel">
                    <input type="number" name="tlf" placeholder="<?php echo e($profile->tlf); ?>" value="<?php echo e($profile->tlf); ?>" style="padding: 2px 7px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8;">
                </span><br/>
                <br>
                Email: <a class="email">
                    <input type="email" name="email" placeholder="<?php echo e($profile->users->email); ?>" value="<?php echo e($profile->email); ?>" style="padding: 2px 7px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8;"></a><br><br>
            </p>
        </div>
                
        <div id="objective">
            <p>
                Dirección: <span class="tel">
                <input type="text" name="direccion" placeholder="<?php echo e($profile->direccion); ?>" value="<?php echo e($profile->direccion); ?>" style="width: 95%; height: 150px; padding: 12px 20px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8;">
                
            </p>
             <img src="<?php echo e(asset ('/images/'.$profile->avatar)); ?>" style="margin-left: 530px; margin-top: -380px; width: 240px; height: 300px; padding: 10px 10px 20px 10px;
    border: 1px solid #BFBFBF;
    background-color: white;
    box-shadow: 10px 10px 5px #aaaaaa;transform: rotate(-8deg);">
            
            <input type="file" name="avatar"  style="margin-left: 500px; margin-top: -500px">
        
        </div>
        <div class="clear"></div>
        <br>
                    
        <dl>
            <dd class="clear"></dd>
            
            <dt>Redes sociales</dt>
            <dd>
                <h2>Facebook <img src="<?php echo e(url('svg/facebook.svg')); ?>" style="width: 20px; height: 23px;border-bottom-style: solid; color: #007bff;"></h2>
                /<input type="text" name="facebook" placeholder="<?php echo e($profile->facebook); ?>" value="<?php echo e($profile->facebook); ?>" style="padding: 2px 7px;  border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8;">
                <h2>Twitter <img src="<?php echo e(url('svg/twitter.svg')); ?>" style="width: 20px; height: 23px;border-bottom-style: solid; color: #3bbef5;"></h2>
                @<input type="text" name="twitter" placeholder="<?php echo e($profile->twitter); ?>" value="<?php echo e($profile->twitter); ?>" style="padding: 2px 7px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8;">
                <h2>Google+ <img src="<?php echo e(url('svg/google-plus.svg')); ?>" style="width: 20px; height: 23px;border-bottom-style: solid; color: #ea5d4b;"></h2>
                @<input type="text" name="google" placeholder="<?php echo e($profile->google); ?>" value="<?php echo e($profile->google); ?>" style="padding: 2px 7px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8;">
                <h2>Instagram <img src="<?php echo e(url('svg/instagram.svg')); ?>" style="width: 20px; height: 23px;border-bottom-style: solid; color: #f7659b;"></h2>
                @<input type="text" name="instagram" placeholder="<?php echo e($profile->instagram); ?>" value="<?php echo e($profile->instagram); ?>" style="padding: 2px 7px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8;">
            </dd>
<input type="hidden" name="id_users" value="<?php echo e(Auth::user()->id); ?>">

            
            <dd class="clear"></dd><br><br>
        <input type="submit" name="submit" value="&nbsp;&nbsp;&nbsp;Actualizar&nbsp;&nbsp;&nbsp;" style="background-color: #555555; /* Green */
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s; /* Safari */
    transition-duration: 0.4s;box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
margin-left: 280px;">
            
            </form>
            
            
            <dd class="clear"></dd>
        </dl>
        
        <div class="clear"></div>
    </form>
    </div>




    <!-- footer -->
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
                                    <i class="fab fa-facebook-f"><img src="<?php echo e(url('svg/facebook.svg')); ?>" style="width: 20px; height: 23px"></i>Like us on Facebook</a>
                            </li>
                            <li class="mb-3">
                                <a class="fb1" href="#">
                                    <i class="fab fa-twitter"><img src="<?php echo e(url('svg/twitter.svg')); ?>" style="width: 20px; height: 23px"></i>Follow us on Twitter</a>
                            </li>
                            <li class="mb-3">
                                <a class="fb2" href="#">
                                    <i class="fab fa-google-plus-g"><img src="<?php echo e(url('svg/google-plus.svg')); ?>" style="width: 20px; height: 23px"></i>Add us on Google Plus</a>
                            </li>
                            <li>
                                <a class="fb3" href="#">
                                    <i class="fab fa-dribbble"><img src="<?php echo e(url('svg/instagram.svg')); ?>" style="width: 20px; height: 23px"></i>Follow us on Instagram</a>
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

<!-- JavaScript -->
    <script src="<?php echo e(url('js/jquery-2.2.3.min.js')); ?>"></script>
    <!-- Default-JavaScript-File -->
    <script src="<?php echo e(url('js/bootstrap.js')); ?>"></script>
    <script src="<?php echo e(url('js/jquery.flexisel.js')); ?>"></script>
    <!-- //flexSlider-for-menu-section -->

    <!-- smooth scrolling -->
    <script src="<?php echo e(url('js/SmoothScroll.min.js')); ?>"></script>
    <!-- //smooth scrolling -->

    <!-- move-top -->
    <script src="<?php echo e(url('js/move-top.js')); ?>"></script>
    <!-- easing -->
    <script src="<?php echo e(url('js/easing.js')); ?>"></script>
    <!--  necessary snippets for few javascript files -->
    <script src="<?php echo e(url('js/coffee.js')); ?>"></script>

    <!-- //Js files -->
</body>

</html>