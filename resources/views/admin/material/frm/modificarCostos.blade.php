<div class="modal" id="frmModificarCostos" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modificar Costos</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form"  method="post" action="{{route('costos.update', $item->id)}}">
            {!! csrf_field()  !!}
          
            {{method_field('PATCH')}}
            <div class="modal-body" id="body">
             
            
                <div class="col-sm-12">
                    <div class="form-group {{ $errors->has('cliente_id') ? 'has-error' : ''}}"> 
                      <select class="select form-control-sm custom-select" id="cliente_id" name="idcliente">
                          <option selected disabled>Selecciona el Cliente:</option>
                          
                            @foreach ($cliente as $item)
                              <option value="{{$item->id}}">{{$item->razon_social}} </option>
                            @endforeach
                        </select>
                        <span class="text-danger">{!! $errors->first('clientes', '<span class=error>Seleccione una opción</span>') !!}</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group {{ $errors->has('producto_id') ? 'has-error' : ''}}"> 
                      <select class="select form-control-sm custom-select" id="producto_id" name="idproducto">
                          <option selected disabled>Selecciona el Producto:</option>
                          
                            @foreach ($productos as $item)
                              <option value="{{$item->id}}">{{$item->nombre}} </option>
                            @endforeach
                        </select>
                        <span class="text-danger">{!! $errors->first('producto_id', '<span class=error>:message</span>') !!}</span>
                    </div>
                  </div>
               
                  <div class="col-sm-12">
                    <div class="form-group {{ $errors->has('precio') ? 'has-error' : ''}}">
                      <label class="bmd-label-floating">Precio Unitario: ejemplo 17.00 o 17.50</label>
                        <input type="text" class="form-control" name="precio_unitario"    id="precio">
                        <span class="text-danger">{!! $errors->first('precio', '<span class=error>:message</span>') !!}</span>
                     </div>
                  </div>

                

                  

        



                  @if (session('exito'))
                  <div class="alert alert-success">
                    {{ session('exito') }}
                  </div>
                  @endif
                    
             
            </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            <button type="submit"  class="btn btn-success">Guardar</button>
            </div>


        </form>
   
      </div>
    </div>
  </div>

