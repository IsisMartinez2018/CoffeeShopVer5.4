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
  <link rel="stylesheet" href="{{ asset('css/range.css')}}" />
<script src="js/range.js"></script>


  <link href="{{ asset('css/wickedpicker.css')}}" rel="stylesheet" type='text/css' media="all" />
  <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}" />
  <link href="{{ asset('css/style3.css') }}" rel='stylesheet' type='text/css' />
  <!-- //Stylesheet -->
  <!--fonts-->
  <link href="//fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Josefin+Sans:300,400,600,700" rel="stylesheet">
  <!--//fonts-->
</head>
<body style="background-image: url({{url('/images/coffee-shop-1.jpg')}})">
  <h1> Pedidos Online 
  </h1>

  <div class="bg-agile"> 
  <div class="book-appointment">
      
      <div class="book-agileinfo-form">
  <form class="login100-form validate-form" method="POST" action="{{ route('orders.update', $id)}}">
       
        {{csrf_field()}}
        <input name="_method" type="hidden" value="PATCH">
           <h2 class="sub-head-w3ls">Modificación de pedidos</h2>





          <div class="main-agile-sectns">
            <div class="agileits-btm-spc form-text1">
                  <i class="fa fa-envelope" aria-hidden="true"></i>

          <input class="input100" type="text" name="Nombre" placeholder="Nombre" value="{{$orders->Nombre}}" >
          </div>



          <div class="agileits-btm-spc form-text2">
              
                   <i class="fa fa-envelope" aria-hidden="true"></i>
            <input class="Apellido" type="text" name="Apellido" placeholder="Apellido" value="{{$orders->Apellido}}" >
          </div>



          </div>
            
            <div class="agileits-btm-spc form-text">
            
                  <i class="fa fa-envelope" aria-hidden="true"></i>
                   <input class="Email" type="email" name="Email" placeholder="Email" value="{{$orders->Email}}" >
                     </div>


        <div class="main-agile-sectns">
            <div class="agileits-btm-spc form-text1">
              <p style="width:100%; color: #a0a0a0; font-size: 16px; letter-spacing: 1.5px; padding: 10px 10px; outline: none; background: rgba(255, 255, 255, 0); border: none; box-sizing: border-box; font-family: 'Roboto', sans-serif;"> Teléfono </p>
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <input class="Telefono" type="number" name="Telefono" placeholder="Telefono" value="{{$orders->Telefono}}" >           
          </div>





<div class="agileits-btm-spc form-text2">
              <p style="width:100%; color: #a0a0a0; font-size: 16px; letter-spacing: 1.5px; padding: 10px 10px; outline: none; background: rgba(255, 255, 255, 0); border: none; box-sizing: border-box; font-family: 'Roboto', sans-serif;"> Cantidad (1-10) </p>
            <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <div class="container"><input class="Cantidad" type="range" name="Cantidad" placeholder="Cantidad" min="1" max="10" step="1" value="{{$orders->Cantidad}}" style="width: 220px; margin-left: 25px"></div>         
          </div>
          

</div>

          <div class="main-agile-sectns">
            <div class="agileits-btm-spc form-text1">
              <p style="width:100%; color: #a0a0a0; font-size: 16px; letter-spacing: 1.5px; padding: 10px 10px; outline: none; background: rgba(255, 255, 255, 0); border: none; box-sizing: border-box; font-family: 'Roboto', sans-serif;"> Fecha </p>
                    <i class="fa fa-unlock-alt" aria-hidden="true"></i>
            <input class="Fecha" type="date" name="Fecha" placeholder="Fecha" value="{{$orders->Fecha}}" >           
          </div>



            <div class="agileits-btm-spc form-text2">
               <br>
                <p style="width:100%; color: #a0a0a0; font-size: 16px; letter-spacing: 1.5px; padding: 10px 10px; outline: none; background: rgba(255, 255, 255, 0); border: none; box-sizing: border-box; font-family: 'Roboto', sans-serif;">¿Modificar comentario?</p>
            <input type="text" rows="4" cols="60" name="Comentario" placeholder="{{$orders->Comentario}}" value="{{$orders->Comentario}}" style="width: 95%; height: 150px; padding: 12px 20px; box-sizing: border-box; border: 2px solid #ccc; border-radius: 4px; background-color: #f8f8f8; font-size: 16px; resize: none;">
          
          </div>

          
</div>


          <div class="main-agile-sectns">
            <div class="agileits-btm-spc form-text1">
              
        <i class="fa fa-envelope" aria-hidden="true"></i>
              <select name="Type_Coffee" class="frm-field required" id="country">
                  <option value="Capuccino"  @if($orders->Type_Coffee=="Capuccino") selected @endif>Capuccino</option>
                  <option value="Americano"  @if($orders->Type_Coffee=="Americano") selected @endif>Americano</option>
                  <option value="Moccacino" @if($orders->Type_Coffee=="Moccacino") selected @endif>Moccacino</option>  
                  <option value="Latte" @if($orders->Type_Coffee=="Latte") selected @endif>Latte</option>
                 <option value="Expresso Black" @if($orders->Extra=="Expresso Black") selected @endif>Expresso Black</option>
               </select>

          </div>
          <div class="agileits-btm-spc form-text2">
              
        <i class="fa fa-envelope" aria-hidden="true"></i>
            <select name="Size" class="frm-field required" id="country">
                  <option value="S"  @if($orders->Size=="S") selected @endif>S</option>
                  <option value="M"  @if($orders->Size=="M") selected @endif>M</option>
                  <option value="L" @if($orders->Size=="L") selected @endif>L</option>  
               </select>

</div>

            <div class="agileits-btm-spc form-text2">
              
        <i class="fa fa-envelope" aria-hidden="true"></i>
            <select name="Extra" class="frm-field required" id="country">
                  <option value="Hielo"  @if($orders->Extra=="Hielo") selected @endif>Hielo</option>
                  <option value="Leche"  @if($orders->Extra=="Leche") selected @endif>Leche</option>
                  <option value="Crema" @if($orders->Extra=="Crema") selected @endif>Crema</option>  
                  <option value="Helado" @if($orders->Extra=="Helado") selected @endif>Helado</option>
                 <option value="Galleta" @if($orders->Extra=="Galleta") selected @endif>Galleta</option>
               </select>
          <br>
        </div>


          </div>
          <div class="wthree-text">
            <h6>Dulzor</h6>
            <ul class="radio-w3ls">
              <li>
                <input type="radio" value="edulcorante" id="a-option" name="Dulzor" value="{{$orders->Dulzor}}"  {{ $orders->Dulzor=='edulcorante' ? 'checked': ''  }}>
                <label for="a-option">Edulcorante</label>
                <div class="check"></div>
              </li>
              <li>
                <input type="radio" id="b-option" name="Dulzor" value="azucar" value="{{$orders->Dulzor}}" {{ $orders->Dulzor=='azucar' ? 'checked': ''  }}>
                <label for="b-option">Azucar</label>
                <div class="check">
                  <div class="inside"></div>
                </div>
              </li>
              
            </ul>
            <div class="clear"></div>
          </div>
          
          
   
         <div class="clear"></div>
          <input type="submit" name="submit" value="actualizar">
           <div style="text-align:right"><a href="{{ route('orders.index') }}" style="text-decoration: none; color: white"><img src="{{ URL::asset("/images/back.png") }}" style="top: 720px; left: 670px; height: 27px; width: 27px; border:none;">Atrás</a></div>

      
          <div class="clear"></div>
        </form>
      </div>

    </div>

    <div class="left-agileits-w3layouts-img" style="background-image: url({{url('/images/prueba2.jpg')}}); z-index: -10;">
      <h3 style="color: white;">What we provide you</h3><img src="{{ URL::asset("/images/divider.png") }}" style="top: 230px; left: 810px; height: 120px; width: 290px; border:none;">
      <ul>
        

<br><br><br>
        <li style="color: black; font-weight: 350;text-shadow: 2px 2px 4px white;"><span style="color: black"><img src="{{ URL::asset("/images/clock.png") }}" style="top: 340px; left: 800px; height: 40px; width: 40px; border:none;"></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;24x7 Food service are available</li>
        <li style="color: black; font-weight: 350;text-shadow: 2px 2px 4px white;"><span style="color: black"><img src="{{ URL::asset("/images/menu.png") }}" style="top: 395px; left: 800px; height: 40px; width: 40px; border:none;"><br></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Online Food Order booking</li>
      
        <li style="color: black; font-weight: 350;text-shadow: 2px 2px 4px white;"><span style="color: black"><img src="{{ URL::asset("/images/padlock.png") }}" style="top: 450px; left: 800px; height: 40px; width: 40px; border:none;"><br></span>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Credit and debit card payment</li>
      




      </ul>
      <img src="{{ URL::asset("/images/divider2.png") }}" style="top: 530px; left: 810px; height: 120px; width: 290px; border:none;">
    </div>
    
  </div>
  <!--copyright-->
  <div class="copy-w3layouts">
    <p>&copy; 2018.Catering Order Form . All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> & Isis Martinez  </p>
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