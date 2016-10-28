<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1>Nuevo Partido</h1>
{!! Form::open(array('url' => 'backend/partido/store', 'method' => 'post')) !!}
  <div class="form-group">
    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::label('Estadio'); !!}
      </div>
      <div class="col-sm-6 col-sm-offset-0 col-md-2 col-md-offset-0">
        {!! Form::select('partido_estadio_id', $lista_estadios, null, ['placeholder' => 'Elije un estadio','class'=>'form-control'],['required']) !!}
      </div>
    </div>

    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::label('Equipo Local'); !!}
      </div>
      <div class="col-sm-6 col-sm-offset-0 col-md-2 col-md-offset-0">
        {!! Form::select('partido_equipo_id_local', $lista_equipos, null, ['placeholder' => 'Elije un equipo local','class'=>'form-control'],['required']) !!}
      </div>
    </div>

    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::label('Equipo Visitante'); !!}
      </div>
      <div class="col-sm-6 col-sm-offset-0 col-md-2 col-md-offset-0">
        {!! Form::select('partido_equipo_id_visitante', $lista_equipos, null, ['placeholder' => 'Elije un equipo visitante','class'=>'form-control'],['required']) !!}
      </div>
    </div>

    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::label('Inicio partido'); !!}
      </div>
      <div class="col-sm-6 col-sm-offset-0 col-md-2 col-md-offset-0">
        {!! Form::input('select','partido_inicio',null, ['id'=>'dateIni'],['required']) !!}
      </div>
    </div>

    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::label('Fin partido'); !!}
      </div>
      <div class="col-sm-6 col-sm-offset-0 col-md-2 col-md-offset-0">
        {!! Form::input('text','partido_fin',null, ['id'=>'dateFin'],['required']) !!}
      </div>
    </div>


    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-1">
        {!! Form::submit('Guardar',['class'=>'btn btn-success', 'id'=>'addPartido']); !!}
      </div>
    </div>

  </div>
{!! Form::close() !!}

<script type="text/javascript">
var dateToday = new Date();
$('#dateIni').datetimepicker({
  dayOfWeekStart : 1, //empieza el lunes
  lang:'es', //lenguaje en español
  minDate: 0,
        beforeShow: function() {
        $(this).datepicker('option', 'maxDate', $('#from').val());
      }
});

$('#dateFin').datetimepicker({

  dayOfWeekStart : 1, //empieza el lunes
  lang:'es', //lenguaje en español
  minDate: 0,
        beforeShow: function() {
        $(this).datepicker('option', 'maxDate', $('#to').val());
      }

});

</script>

@include('layouts.ajax.form_manage_add_partido')

<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 messages">
  @include('layouts.error_messages.simples')
</div>
