<div class="row">
    <div class="col-md-8 col-md-offset-2">
        <form class="form-horizontal" role="form" method="POST" action="{{ url('/backend/create_role') }}">
            {{ csrf_field() }}
            <div class="form-group{{ $errors->has('role_name') ? ' has-error' : '' }}">
                <label for="name" class="col-md-4 control-label">Nombre Rol</label>
                <div class="col-md-6">
                    <input id="role_name" type="text" class="form-control" name="role_name" value="{{ old('role_name') }}" required autofocus>
                    @if ($errors->has('role_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('role_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-2">
                  <label  class="col-md-2 control-label">Todos</label>
                  {{ Form::checkbox('actions[]', "all", false) }}
                </div>
                <div class="col-md-6 col-md-offset-2">
                  <label  class="col-md-2 control-label">Ver</label>
                  {{ Form::checkbox('actions[]', "ver", false) }}
                </div>
                <div class="col-md-6 col-md-offset-2">
                  <label  class="col-md-2 control-label">Editar</label>
                  {{ Form::checkbox('actions[]', "editar", false) }}
                </div>

            </div>

            <div class="form-group">
              <div class="col-md-6">
                <div class="col-md-6 col-md-offset-4">
                      <label for="role_description" class="col-md-4 control-label">Descripcion</label>
                </div>
                {{ Form::textarea('name', 'Ingresar descripcion') }}
            </div>
          </div>
            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn">
                        Guardar
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>
