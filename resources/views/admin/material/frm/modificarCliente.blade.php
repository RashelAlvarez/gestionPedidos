<div class="modal" id="frmModificarCliente" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modificar Cliente</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form"  method="post" action="{{route('clientes.update', $clientess->id)}}">
            {!! csrf_field()  !!}
          
            {{method_field('PATCH')}}
            <div class="modal-body" id="body">
            
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="bmd-label-static"> Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre"  >
                    <span class="text-danger">{!! $errors->first('nombre', '<span class=error>:message</span>') !!}</span>
                </div>
              </div>
              <div class="col-sm-12">
                <div class="form-group">
                  <label class="bmd-label-static">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="apellido"   >
                    <span class="text-danger">{!! $errors->first('apellido', '<span class=error>:message</span>') !!}</span>
                </div>
              </div>
                <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static"> Razon Social</label>
                        <input type="text" class="form-control" name="razon_social" id="razon_social"  >
                        <span class="text-danger">{!! $errors->first('razon_social', '<span class=error>:message</span>') !!}</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static"> Rif</label>
                        <input type="text" class="form-control" name="rif" id="rif" >
                        <span class="text-danger">{!! $errors->first('rif', '<span class=error>:message</span>') !!}</span>
                     </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static"> Telefono</label>
                        <input type="text" class="form-control" name="telefono" id="telefono"   >
                        <span class="text-danger">{!! $errors->first('telefono', '<span class=error>:message</span>') !!}</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static"> Direccion</label>
                        <input type="text" class="form-control" name="direccion" id="direccion"  >
                        <span class="text-danger">{!! $errors->first('direccion', '<span class=error>:message</span>') !!}</span>
                    </div>
                  </div>

                  <div class="col-sm-12">
                    <div class="form-group"> 
                      <select class="select form-control-sm custom-select" id="vendedor" name="vendedor" required>
                      <option value="">--Vendedor--</option>
              
                        @foreach ($vendedor as $item)
                          <option value="{{$item->id}}">{{$item->nombre}} {{$item->apellido}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{!! $errors->first('vendedor', '<span class=error>Seleccione una opción</span>') !!}</span>
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

