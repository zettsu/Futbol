<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1>Nuevo Equipo</h1>
{!! Form::open(array('url' => 'backend/equipo/create')) !!}
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
        {!! Form::submit('Enviar',['class'=>'btn btn-success']); !!}
      </div>
    </div>

  </div>
{!! Form::close() !!}
<!--
<div class="row">
  <div class="col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-0">
  <div class="alert alert-success" role="alert"> <strong>Well done!</strong> You successfully read this important alert message. </div>
  <div class="alert alert-warning" role="alert"> <strong>Warning!</strong> Better check yourself, you're not looking too good. </div>
  <div class="alert alert-danger" role="alert"> <strong>Oh snap!</strong> Change a few things up and try submitting again. </div>
</div>
</div>
-->
