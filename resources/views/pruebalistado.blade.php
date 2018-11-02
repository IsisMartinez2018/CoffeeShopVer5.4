<!--
  Author: W3layouts
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Quick Signin & Signup form Flat Responsive Widget Template :: w3layouts</title>
    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="Quick Signin & Signup form a Responsive Web Template, Bootstrap Web Templates, Flat Web Templates, Android Compatible Web Template, Smartphone Compatible Web Template, Free Webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design">
    <script>
        addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
   <!-- Default-JavaScript-File -->
     <script src="js/jquery-2.2.3.min.js"></script>
    <!-- Default-JavaScript-File -->
    <script src="js/bootstrap.js"></script>
  
   <link rel="stylesheet" href="css/bootstrap(2).css">
    <!-- Index-Page-CSS -->
    <link rel="stylesheet" href="css/style4.css" type="text/css" media="all">
    <!-- onlinefonts -->
    <link href="//fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700,800" rel="stylesheet">
    <!-- //Custom-Stylesheet-Links -->
</head>

<body>
    <header>
        <h1 class="title-agile text-center">Listado de pedidos & Modificación</h1>
    @if( Session::has( 'alert' ))
    <div class="alert alert-success" style="width: 1250px; margin-left: 50px; margin-top: -20px;">
     {{ Session::get( 'alert' ) }}
     </div>
     @endif

   </header>
    <!-- //header -->
    

 

<div class="banner">
  


    <div style="background-image:url({{url('images/banner.jpg')}}); width: 1250px; height: 500px; margin-left: 50px;">
        <div class="main_w3agile" style=" width: 1250px; height: 500px; padding: .3em;">
            

            <table style="border-spacing:4px; text-align:left; width: 100%;border-collapse: collapse;">
             <tr>
             
           		<th class="c6" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #777; border-color: #1fcdb4; padding: 13px;">&nbsp;ID</th>
            
               <th class="c1" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #000; border-color: #1fcdb4; padding: 13px;">&nbsp;Nombre</th>
               
               <th class="c2" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #777; border-color: #1fcdb4; cursor: pointer; padding: 13px;">&nbsp;Apellido</th>
              
               <th class="c3" style="font-size: 13px; font-weight: 600; padding-bottom: 5px; display: inline-block; border-bottom: 2px solid transparent; color: #000; border-color: #1fcdb4; padding: 13px;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Email&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               

               <th class="c3" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #000; border-color: #1fcdb4; padding: 13px;">&nbsp;&nbsp;&nbsp;&nbsp;Telefono&nbsp;&nbsp;&nbsp;</th>
               
               <th class="c4" style="font-size: 13px; font-weight: 600; padding-bottom: 5px; display: inline-block; border-bottom: 2px solid transparent; color: #777; border-color: #1fcdb4; padding: 13px;">&nbsp;Ctd</th>
              
               <th class="c5" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #000; border-color: #1fcdb4; padding: 13px;">&nbsp;Fecha entrega</th>
               
               <th class="c6" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #777; border-color: #1fcdb4; padding: 13px;">&nbsp;&nbsp;&nbsp;&nbsp;Comentario&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
               
               <th class="c7" style="font-size: 13px; font-weight: 600; padding-bottom: 5px; display: inline-block; border-bottom: 2px solid transparent; color: #000; border-color: #1fcdb4; padding: 13px;">&nbsp;&nbsp;Tipo de Cafe</th>
              
               <th class="c8" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #777; border-color: #1fcdb4; padding: 13px;">&nbsp;Tamaño</th>
               
                <th class="c9" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #000; border-color: #1fcdb4; padding: 13px;">Extra&nbsp;&nbsp;&nbsp;&nbsp;</th>
                
                <th class="c10" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #777; border-color: #1fcdb4; padding: 13px;">&nbsp;Dulzor</th>
                
                <th class="c11" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #000; border-color: #1fcdb4; padding: 13px;">&nbsp;&nbsp;&nbsp;Fecha pedido&nbsp;&nbsp;&nbsp;</th>

                <th class="c11" style="font-size: 13px; font-weight: 600; padding-bottom: 5px;  display: inline-block; border-bottom: 2px solid transparent; color: #000; border-color: #1fcdb4; padding: 13px;">Pedido hecho por usuario:</th>

             </tr>
             <tbody>
              @if($orders->count())  
              @foreach($orders as $orders)  
              <tr>
             
              	<td class="c6" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->id}}</td>
                <td class="c1" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Nombre}}</td>
                <td class="c2" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Apellido}}</td>
                <td class="c2" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Email}}</td>                
                <td class="c3" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Telefono}}</td>
                <td class="c4" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Cantidad}}</td>
                <td class="c5" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Fecha}}</td>
                <td class="c6" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Comentario}}</td>
                <td class="c7" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Type_Coffee}}</td>
                <td class="c8" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Size}}</td>
                <td class="c8" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Extra}}</td>
                <td class="c9" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->Dulzor}}</td>
                <td class="c10" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->created_at}}</td>
                <td class="c10" style="padding-bottom: 5px; font-size: 14px; display: inline-block; padding: 13px;">{{$orders->users->name}}</td>

               <td>

              <a href="{{action('ordersController@edit', $orders->id)}}"> <p style="margin-right: -1px">Editar</p> <img src="{{ URL::asset("/images/editorial-design.png") }}" style="top: 230px; left: 810px; height: 25px; width: 25px; border:none;"></a></td>
                <td >
                  <button style="border:none; background-color: transparent;" data-toggle="modal" data-target="#{{$orders->id}}">Eliminar <img src="{{ URL::asset("/images/delete.png") }}" style="top: 230px; left: 810px; height: 25px; width: 25px; border:none; cursor:pointer;">
                   </button>
                 
                 <div class="modal modal-danger fade" id="{{$orders->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">

                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                      </div>
                      <form action="{{route('orders.destroy', $orders->id)}}" method="POST">{{ csrf_field()}}
                        <div class="modal-body">
                          <p class="text-center">¿Está seguro que desea eliminar este pedido?</p>
                          <input type="hidden" name="_method" value="DELETE">
                           </div>
                        <div class="modal-footer">
                          <button type="submit" class="p-3 mb-2 bg-primary text-white" style="border:solid 1px black; border-radius: 5px; width: 60px">
                            Si
                          </button>
                          <button type="button" class="p-3 mb-2 bg-danger text-white" style="border:solid 1px black; border-radius: 5px; width: 60px" data-dismiss="modal">
                            No
                          </button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>








</td>

                 <td colspan="2" scope="colgroup"><a href="{{ route('orders.create') }}" ><p style="margin-right: 5px">Añadir</p> <img src="{{ URL::asset("/images/add.png") }}" style="top: 230px; left: 810px; height: 25px; width: 25px; border:none;"></a> </td>
               </tr>



               @endforeach 
               @else
               <tr>
                <td colspan="8">No hay registro !!</td>
              


              </tr>
              @endif
            </tbody>
 
          </table>
          
                        <div class="hr"></div>
                        <div class="foot-lnk">
                          </div>
                
        </div></div>
    </section>
    <!-- //section -->
    <footer>
        <div class="copy-wthree text-center">
            <p>© 2018 Quick Signin & Signup form. All rights reserved | Design by
                <a href="http://w3layouts.com">W3layouts</a>
            </p>
        </div>
    </footer>
    <!-- //footer -->
    <!-- script for password match -->
    

 </body>
 </html>
