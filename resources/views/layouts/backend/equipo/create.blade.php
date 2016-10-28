<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1>Nuevo Equipo</h1>
{!! Form::open(array('url' => 'backend/equipo/store', 'method' => 'post')) !!}
  <div class="form-group">
    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::label('Nombre'); !!}
      </div>
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::text('equipo_nombre'); !!}
      </div>
    </div>
    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::label('Pais'); !!}
      </div>
      <div class="col-sm-6 col-sm-offset-0 col-md-2 col-md-offset-0">
        {!! Form::select('equipo_pais_id', $lista_paises, null, ['placeholder' => 'Elije un pais','class'=>'form-control'],['required']) !!}
      </div>
    </div>
    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-1">
        {!! Form::submit('Enviar',['class'=>'btn btn-success', 'id'=>'addEquipo']); !!}
      </div>
    </div>

  </div>
{!! Form::close() !!}

@include('layouts.ajax.form_manage_add_equipo')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 messages">
  @include('layouts.error_messages.simples')
</div>
