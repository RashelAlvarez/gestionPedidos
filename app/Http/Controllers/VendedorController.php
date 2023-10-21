<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vendedor;
use App\User;
use DB;
use App\Http\Requests\VendedorRequest;
class VendedorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware([
            
            'auth',  'roles:Administrador,Operador'
        
        ]);

       
    }


    public function index(){

         
      $vendedores=Vendedor::all();
     /*    $vendedor=DB::table('vendedors')
        ->select('vendedors.id', 'vendedors.rif', 'vendedors.direccion', 'vendedors.telefono' )
       
        ->get(); */

       // dd($vendedores);
        return view('admin.material.vendedores' , compact('vendedores'));
    }

    public function store(VendedorRequest $request){
       
        $vendedor = Vendedor::create([
           
            "nombre" => $request->input('nombre'),
            "apellido" => $request->input('apellido'),
            "rif" => $request->input('rif'),
            "direccion" => $request->input('direccion'),
            "telefono" => $request->input('telefono'),
        ]);
        return redirect('/vendedor')->with('exito', 'Datos registrados correctamente');; 

    }

    public function edit($id)
    {
     
        $result = Vendedor::findOrFail($id);
       // dd($result);
       return response()->json($result);
        
       if($result) {
        return response()->json([
            'message' => "Data Found",
            "code"    => 200,
            "data"    => $result
        ]);
    } else  {
        return response()->json([
            'message' => "Internal Server Error",
            "code"    => 500
        ]);
    }
     

    }

    public function update(VendedorRequest $request, $id)
    {
    
        //ACTUALIZAR MENSAJE con eloquent/** */
        $vendedor = Vendedor::findOrFail($id);
        //dd($vendedor);
        $vendedor->update($request->all());
      
        //REDIRECCIONAR
        session()->flash('exito', 'Se ha actualizado los datos correctamente');
        return redirect('/vendedor');
    
    }
}
