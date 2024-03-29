<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Cliente;
use App\PrecioProducto;
use App\Producto;
use Carbon\Carbon;
use App\Http\Requests\CostosRequest;
use Illuminate\Support\Facades\DB;

class CostosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware([
            
            'auth',  'roles:Administrador,Operador'
        
        ]);

       
    }
    public function index()
    {
        //

        $precios=DB::table('precio_producto')
        ->select('precio_producto.id', 'clientes.razon_social', 'productos.nombre', 'precio_unitario')
        ->join('clientes', 'precio_producto.idcliente', '=', 'clientes.id')
        ->join('productos', 'precio_producto.idproducto', '=', 'productos.id')
        ->get();

        //dd($precios);
        $clientes=Cliente::all();
        $productos=Producto::all();

        return view('admin.material.costos', compact('precios', 'clientes', 'productos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CostosRequest $request)
    {
        //

        $costos=PrecioProducto::create([
            'idcliente' => $request->input('cliente_id'),
            'idproducto' => $request->input('producto_id'),
            'precio_unitario' => $request->input('precio'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),

        ]);


        return redirect('/costos')->with('costos', 'Se ha agregado el registro exitosamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $result= PrecioProducto::findOrFail($id);
        
        return response()->json($result);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
