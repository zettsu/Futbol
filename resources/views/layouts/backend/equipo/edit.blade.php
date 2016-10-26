<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
<h1>Nuevo Equipo</h1>
{!! Form::open(array('url' => 'backend/equipo/update/'.$equipo->equipo_id, 'method' => 'put')) !!}
  <div class="form-group">
    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::label('Nombre'); !!}
      </div>
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::text('equipo_nombre', $equipo->equipo_nombre); !!}
      </div>
    </div>
    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-0">
        {!! Form::label('Pais'); !!}
      </div>
      <div class="col-sm-6 col-sm-offset-0 col-md-2 col-md-offset-0">
        {!! Form::select('equipo_pais_id', $lista_paises, $equipo->equipo_pais_id,['required']) !!}
      </div>
    </div>
    <div class="row basic-form">
      <div class="col-sm-6 col-sm-offset-0 col-md-1 col-md-offset-1">
        {!! Form::submit('Enviar',['class'=>'btn btn-success', 'id'=>'editEquipo']); !!}
      </div>
    </div>

    <script>

      $('#editEquipo').click(function(event){
        event.preventDefault();

        var form = jQuery(this).parents("form:first");
        var dataString = form.serialize();
        var formAction = form.attr('action');

        $.ajax({
            type: "POST",
            url : formAction,
            data : dataString,
            dataType : "json",
            success : function(data){
              setMessage(data);
            },
            error:function(data){
              setMessageError(data);
            }
          });
        });

    </script>


  </div>
{!! Form::close() !!}
