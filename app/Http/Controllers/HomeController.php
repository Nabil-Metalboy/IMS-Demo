<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $viewA = Product::where('p_name' , 'like', 'A'.'%')->get();

       // $viewAll = Product::orderBy('p_name','asc')->get();

       $viewAll = Product::orderBy('p_name')->get()->groupBy(function($products){
          return substr($products->p_name,0,1);
       });
        return view('inventory.index' ,['allProduct'=>$viewAll]);


        //return view('inventory.index',['productStartWithA'=>$viewAll]);
    }

    public function edit()
    {
        $edit_value = Product:: $products->p_name;
        redirect('inventory.edit', ['name' => $edit_value]);
    }

    public function display()
    {
        
    }
}
