<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Product;
 class ConfirmationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (! session()->has('success_message')) {
            return redirect('/homevista');
        }
        $mightAlsoLike = Product::inRandomOrder()->take(4)->get();

         return view('thankyou', compact('mightAlsoLike'));
    }
}