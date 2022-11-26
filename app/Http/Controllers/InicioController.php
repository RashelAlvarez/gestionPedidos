<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class InicioController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
   


    public function index(){
        $selectAttribute = ['1', '2', '5'];
        $productos=Producto::whereIn('id', [$selectAttribute[0], $selectAttribute[1], $selectAttribute[2]])->get();
        //dd($productos);
        return view('index', compact('productos'));
        
    }
    
}

 