<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\profile;
use App\orders;

use Illuminate\Support\Facades\Input;

use Image;

use Auth;

class profileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=Auth::user()->id;
    $profile=profile::where('id_users', 'like', $users)->first();
    if(empty($profile)){
        return view('profile'); 
    }
    else
    {
         $users=Auth::user()->id;
    $profile=profile::where('id_users', 'like', $users)->first();
    $orders=orders::where('id_users', 'like', $users)->get();
        return  view('listadoperfil',compact('profile','orders'));
    }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function create()
    {
        return view("profile");
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
'tlf' => 'numeric',
'email' => 'email',
'direccion' => 'string|max:255',
'avatar' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048',
'facebook' => 'string',
'twitter' => 'string',
'google' => 'string',
'instagram' => 'string',
'id_users' => 'required|unique:profile',
]);



$user = new profile;
    $user->tlf = Input::get("tlf");
    $user->email = Input::get("email");
    $user->direccion = Input::get("direccion");

if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename=time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,350)->save( public_path('/images/' . $filename));
            $user->avatar=$filename;
            
        }


    $user->facebook = Input::get("facebook");
    $user->twitter = Input::get("twitter");
    $user->google = Input::get("google");

    $user->instagram = Input::get("instagram");
    $user->id_users = Input::get("id_users");
    $user->save();
        return redirect()->to('profile/show')->with('alert','Perfil creado satisfactoriamente');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $users=Auth::user()->id;
    $profile=profile::where('id_users', 'like', $users)->first();
    $orders=orders::where('id_users', 'like', $users)->get();
    
        return  view('listadoperfil',compact('profile', 'orders'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
     $profile = \App\profile::find($id);
        return view('listadoperfileditar',compact('profile', 'id'));  
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
      
    $this->validate($request,['tlf'=>'required|numeric', 'email'=>'required|email|max:255', 'direccion'=>'required|string|max:255', 'facebook'=>'required','twitter'=>'required', 'google'=>'required|string|max:255','instagram'=>'required']);

        $user = profile::find($id);
    $user->tlf = Input::get("tlf");
    $user->email = Input::get("email");
    $user->direccion = Input::get("direccion");

if($request->hasFile('avatar')){
            $avatar=$request->file('avatar');
            $filename=time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,350)->save( public_path('/images/' . $filename));
           $user->avatar=$filename;
            
        }


    $user->facebook = Input::get("facebook");
    $user->twitter = Input::get("twitter");
    $user->google = Input::get("google");

    $user->instagram = Input::get("instagram");
    $user->id_users = Input::get("id_users");
    $user->save();
        return redirect()->to('profile/show')->with('message','Perfil modificado satisfactoriamente');
    }

    public function destroy($id)
    {
      
    }
}
