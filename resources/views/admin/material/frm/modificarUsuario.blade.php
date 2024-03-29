<div class="modal" id="frmModificarUsuario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modificar Usuario</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form class="form"  method="post" action="{{route('usuarios.update', $user->id)}}">
          @csrf
          {!! method_field('PUT')!!}
            <div class="modal-body" id="body">
            
           
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static"> Correo</label>
                    <input type="text" class="form-control" name="email" id="email"   >
                        <span class="text-danger">{!! $errors->first('correo', '<span class=error>:message</span>') !!}</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static"> Contraseña</label>
                        <input type="password" class="form-control" name="password" id="password"  >
                        <span class="text-danger">{!! $errors->first('password', '<span class=error>:message</span>') !!}</span>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group">
                      <label class="bmd-label-static"> Confirmar Contraseña</label>
                        <input  type="password" class="form-control" name="password_confirmation"   required autocomplete="new-password">
                        <span class="text-danger">{!! $errors->first('password', '<span class=error>:message</span>') !!}</span>
                    </div>
                </div>
                
                <div class="col-sm-12">
                    <div class="form-group"> 
                      <select class="select form-control-sm custom-select" id="rol" name="role_id" required>
                      <option value="">--Tipo de Usuario--</option>
              
                        @foreach ($roles as $role)
                          <option value="{{$role->id}}">{{$role->nombre}}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">{!! $errors->first('role_id', '<span class=error>Seleccione una opción</span>') !!}</span>
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

