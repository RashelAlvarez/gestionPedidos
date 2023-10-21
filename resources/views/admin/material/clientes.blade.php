@extends('admin.layouts.material')

@section('titulo')

Joyeria | Clientes

@endsection


@section('contenido')

<style>
  .error{

   color: #f5543f;
   
}

</style>

 {{-- 
<button type="button" id="crearCliente" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModalLong">
  Nuevo Cliente
</button> --}}
@if  (auth()->user()->hasRoles(['Administrador', 'Operador', 'Vendedor']))
    <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#exampleModalLong">
      Nuevo Cliente
    </button>

    
@endif

<div class="col-md-12">
  <div class="card">
    <div class="card-header card-header-primary">
      <h4 class="card-title ">Clientes</h4>
    {{--   <p class="card-category"> Here is a subtitle for this table</p> --}}
    </div> 
    <div class="card-body">
      <div class="table-responsive">
        <table id="example" class="table">
    @if  (auth()->user()->hasRoles(['Administrador', 'Operador']))
          <thead class=" text-primary">
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Razón Social</th>
            <th>Rif</th>
            <th>Teléfono</th>
            <th>Dirección</th>
           {{--        <th>Archivo</th> --}}
          
            <th>Vendedor</th>
            <th>Fecha de creación</th>
             <th>Acciones</th>
          </thead>
          <tbody>
         
           
            
                @foreach($clientes as $clientess)
                        
                  
                  <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$clientess->nombre}}</td>
                  <td>{{$clientess->apellido}}</td>
                    <td>{{$clientess->razon_social}}</td>
                    <td>{{$clientess->rif}}</td>
                    <td>{{$clientess->telefono}}</td>
                    <td>{{$clientess->direccion}}</td>
                  {{--   <td>
                      <a href="{{route('clientes.show', $item->file)}}" target="_blank">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                        
                      </a>
                      
                              
                      </td> --}}
                   
                    <td>{{$clientess->usvendedor}}</td>
                    <td>{{Carbon\Carbon::parse($clientess->created_at)->format('d-m-Y')}}</td>
          
                    <td>
                      <button class="btn btn-warning btn-sm"  href="{{url('/clientes/'.$clientess->id.'/edit')}}"  rel="tooltip" title="Modificar" data-id="{{$clientess->id}}" id="modificarCliente" data-toggle="modal" onclick="obtenerClientes('{{$clientess->id}}')" data-target="#frmModificarCliente" > 
                        <span class="material-icons ">
                          create
                          </span></button>
                        @if  (auth()->user()->hasRoles(['Administrador']))
                          <a type="button" href="#" > <span class="material-icons red600">
                            delete_outline
                            </span></a>
                        @endif
                    </td>
                
                  </tr>
                @endforeach
          
         
        </tbody>
    @endif

    @if  (auth()->user()->hasRoles(['Vendedor']))
          <thead class=" text-primary">
            <th>#</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Razón Social</th>
            <th>Rif</th>
            <th>Teléfono</th>
            <th>Dirección</th>
                  <th>Archivo</th>
           
            <th>Vendedor</th>
            <th>Fecha de creación</th>
             <th>Acciones</th>
          </thead>
          <tbody>
         
           
            
                @foreach($clientes2 as $clientess)
                        
                  
                  <tr>
                  <td>{{$loop->iteration}}</td>
                  <td>{{$clientess->nombre}}</td>
                  <td>{{$clientess->apellido}}</td>
                    <td>{{$clientess->razon_social}}</td>
                    <td>{{$clientess->rif}}</td>
                    <td>{{$clientess->telefono}}</td>
                    <td>{{$clientess->direccion}}</td>
                    <td>
                      <a href="{{route('clientes.show', $clientess->file)}}" target="_blank">
                          <i class="fa fa-eye" aria-hidden="true"></i>
                        
                      </a>
                              
                      </td>
                   
                    <td>{{$clientess->usvendedor}}</td>
                    <td>{{Carbon\Carbon::parse($item->created_at)->format('d-m-Y')}}</td>
                    <td>
                      <button class="btn btn-warning btn-sm"  href="{{url('/clientes/'.$clientess->id.'/edit')}}"  data-id="{{$clientess->id}}"  rel="tooltip" title="Modificar" id="modificarCliente" data-toggle="modal" onclick="obtenerClientes('{{$clientess->id}}')" data-target="#frmModificarCliente" > 
                        <span class="material-icons ">
                          create
                          </span></button>
                        @if  (auth()->user()->hasRoles(['Administrador']))
                          <a type="button" href="#" > <span class="material-icons red600">
                            delete_outline
                            </span></a>
                        @endif
                    </td>
                
                  </tr>
                @endforeach
          
         
        </tbody>
    @endif
        </table>
      </div>
    </div>
  </div>
</div>




<script>
    function obtenerClientes(id){
    var route ="{{url('clientes')}}/"+id+"/edit";
    $.get(route, function(data){
      $('#nombre').val(data.nombre);
      $('#apellido').val(data.apellido);
      $('#razon_social').val(data.razon_social);
      $('#rif').val(data.rif);
      $('#telefono').val(data.telefono);
      $('#direccion').val(data.direccion);
      $('#vendedor').val(data.vendedor_id);
    })
  }
</script>


@include('admin/material/frm/clientes')


@if (isset($clientess->id))

@include('admin/material/frm/modificarCliente')
@endif
 

@endsection