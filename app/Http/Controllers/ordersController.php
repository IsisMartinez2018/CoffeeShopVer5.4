<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\orders;

use Illuminate\Support\Facades\Input;

class ordersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $orders=orders::orderBy('id')->paginate();
        return view('pruebalistado',compact('orders')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function create()
    {
        return view("ordervista");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
$this->validate($request,  [
'Nombre' => 'required|alpha|string|max:255',
'Apellido' => 'required|alpha|string|max:255',
'Email' => 'required|string|max:255|email',
'Telefono' => 'required|integer',
'Cantidad' => 'required|integer|min:1|max:10',
'Fecha' => 'required|date|string|max:255|after:today',
'Comentario' => 'max:100'
]);






$user = new orders;
    $user->Nombre = Input::get("Nombre");
    $user->Apellido = Input::get("Apellido");
    $user->Email = Input::get("Email");
    $user->Telefono = Input::get("Telefono");
    $user->Cantidad = Input::get("Cantidad");
    $user->Fecha = Input::get("Fecha");
    $user->Comentario = Input::get("Comentario");

    $user->Type_Coffee = Input::get("Type_Coffee");
    $user->Size = Input::get("Size");
    $user->Extra = Input::get("Extra");
    $user->Dulzor = Input::get("Dulzor");
    $user->id_users = Input::get("id_users");
    
    $user->save();
        return redirect()->to('/homevista')->with('alert','Pedido creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $orders=orders::find($id);
        return  view('pruebalistado',compact('orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $orders = \App\Orders::find($id);
        return view('pruebalistadoedit',compact('orders', 'id'));  
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function update(Request $request, $id)
    {
      
    $this->validate($request,['Nombre'=>'required|alpha|string|max:255', 'Apellido'=>'required|alpha|string|max:255', 'Email'=>'required|string|max:255|email', 'Telefono'=>'required|integer','Cantidad'=>'required|integer|min:1|max:10', 'Fecha'=>'required|date|string|max:255|after:today','Type_Coffee'=>'required','Size'=>'required','Extra'=>'required','Dulzor'=>'required']);

        Orders::find($id)->update($request->all());
        return redirect()->route('orders.index')->with('alert','Registro modificado satisfactoriamente');
 
    }


    public function destroy($id)
    {
       $orders=orders::find($id);
      $orders->delete();
        return redirect()->route('orders.index')->with('alert','Registro eliminado satisfactoriamente');
    }
}
