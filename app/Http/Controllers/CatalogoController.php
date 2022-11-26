<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Producto;
class CatalogoController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function index(){
        $catAnillos=Producto::where('categoryid', 1)->get();
        $catAretes=Producto::where('categoryid', 2)->get();
        $catBraza=Producto::where('categoryid', 3)->get();
        $catGafas=Producto::where('categoryid', 4)->get();
       // dd($catAnillos);
       // return view('index', compact('productos'));
        
        return view('catalogo', compact('catAnillos', 'catAretes', 'catBraza', 'catGafas'));
        
    }
}
