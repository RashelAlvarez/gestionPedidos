<div class="modal" id="frmModificarVendedor" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modificar Vendedor</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form"  method="post" action="{{route('vendedor.update', $item->id)}}">
          @csrf
          {!! method_field('PUT')!!}
            <div class="modal-body" id="body">
            
           
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static"> Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="nombre"   >
                        <span class="text-danger">{!! $errors->first('nombre', '<span class=error>:message</span>') !!}</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group ">
                        <label class="bmd-label-static"> Apellido</label>
                        <input type="text" class="form-control" name="apellido"    id="apellido">
                        <span class="text-danger">{!! $errors->first('apellido', '<span class=error>:message</span>') !!}</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                        <label class="bmd-label-static"> Rif o Cédula</label>
                        <input type="text" class="form-control" name="rif"   id="rif">
                        <span class="text-danger">{!! $errors->first('rif', '<span class=error>:message</span>') !!}</span>
                    </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static">Dirección</label>
                        <input type="text" class="form-control" name="direccion"  id="direccion">
                        <span class="text-danger">{!! $errors->first('direccion', '<span class=error>:message</span>') !!}</span>
                     </div>
                  </div>
                
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static">Teléfono</label>
                        <input type="text" class="form-control" name="telefono"   id="telefono">
                        <span class="text-danger">{!! $errors->first('telefono', '<span class=error>:message</span>') !!}</span>
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

