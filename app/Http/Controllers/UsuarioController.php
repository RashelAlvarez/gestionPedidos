<?php

namespace App\Http\Controllers;
use App\Http\Requests\ValidacionesRequest;
use App\Http\Requests\DatosUsuario;
use App\User;
use Carbon\Carbon;
use App\Role;
use Illuminate\Http\Request;

use App\Producto;
use App\Vendedor;
use App\Estatus;
use App\Notifications\Pedidos;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\UserRequest;
class UsuarioController extends Controller
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
      
  
        $users=User::all();
        $roles = Role::all();
     
        $vendedor=Vendedor::all();
       
        return view('admin.material.usuarios', compact('users', 'roles',  'vendedor'));
    }


    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        try {    
            $plantas = Role::all();
            $response = ['data' => $plantas];
        } catch (\Exception $exception) {
            return response()->json([ 'message' => 'There was an error retrieving the records' ], 500);
        }
        return response()->json($response);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DatosUsuario $request)
    {

        $user= User::create([
            "role_id" => $request->input('role_id'),
       
             "email" => $request->input('email'),
             'password' => $request->input('password'),
       
             "created_at" => Carbon::now(),
             "updated_at" => Carbon::now(),
           
         ]);  
    
        
       
  
    

    session()->flash('exito', 'Se ha registrado correctamente');
    return redirect('/usuarios');
   
     

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
       /*  $user= User::findOrFail($id);
        $roles=Role::all();
        return  response()->json($user); */
        $result = User::findOrFail($id);
        $role= Role::all();
       // $result = User::where('role_id', $id)->first();
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
       // return view('admin.material.frm.modificarUsuario', compact('result'));


    }

    public function getrole($getrole){
  /*       return User::where('role_id', $getrole)->get(); */
        /*  dd($db); */
        }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserRequest $request, $id)
    {
        //
     /*   dd($request->all());
        $user= User::findOrFail($id);
        $user->nombre = $request->get('nombre');
        $user->apellido = $request->get('apellido');
        $user->email =$request->get('email');
        $user->password = $request->get('password');
        $user->role_id = $request->get('role_id');
     

        $user->save();
        
        session()->flash('exito', 'Se ha actualizado los datos correctamente');
        return redirect('/usuarios');*/

            //
        //ACTUALIZAR MENSAJE con eloquent/** */
        $user = User::findOrFail($id);
        $user->update($request->all());
      
        //REDIRECCIONAR
        session()->flash('exito', 'Se ha actualizado los datos correctamente');
        return redirect('/usuarios');
    
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

        User::destroy($id);

        return redirect('/usuarios');
    }
}
