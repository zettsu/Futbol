<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
    <h2 class="sub-header">Nuevo mensaje</h2>
<form id="enviarmsgForm" method="POST">
  <input type="text" name="titulo" id="titulo" placeholder="Ingresa un titulo..." required>
  <textarea name="mensaje" id="mensaje" placeholder="Ingresa un mensaje..." />
  <input type="submit" id="enviarmsg" value="Enviar">
</form>
</div>
<script>

$( "#enviarmsgForm" ).submit(function( event ) {

  var titulo = $("#titulo").val();
  var mensaje = $("#mensaje").val();
  var data = {
    "titulo":titulo,
    "mensaje":mensaje
  };

  $.ajax({
    url : "backend/new_message",
    type : "POST",
    data : data,
    cache : false,
    dataType:"json"
  }).done(function(data){
    alert(data);
  });

  event.preventDefault();
});
</script>
