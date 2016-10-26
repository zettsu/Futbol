$(document).ready(function(){
  last_activity();
  $("#home").addClass("active");
});


function equipoAdd(){
  $.ajax({
    url: '/backend/equipo/create',
    type: 'get',
    dataType: 'html'
  })
  .done(function(data) {
    $('#content' ).html( data);
  })
  .fail(function() {
    $('#content').html(data);
  });
}



$(".nav li").on("click", function() {
    $(".nav li").removeClass("active");
    $(this).addClass("active");
});


function last_activity(){
  $.ajax({
    url: '/backend/last_activity',
    type: 'get',
    dataType: 'html'
  })
  .done(function(data) {
    $('#content' ).html( data);
  })
  .fail(function() {
    $('#content').html(data);
  });
}

function setMessage(data){
    removeMessages();
    if(data.status == 0){
      $('#alerts_container').html("<div class='alert alert-success' role='alert' > <strong>Exito! </strong>"+data.message+ "</div>");
    }else{
      setMessageError(data);
    }
}

function setMessageError(data){
    removeMessages();
    $('#alerts_container').html("<div class='alert alert-danger' role='alert' > <strong>Error! </strong>"+data.message+ "</div>");
}

function removeMessages(){
  $('#alerts_container').empty();
}

function equipoActions(){
  $.ajax({
    url: '/backend/equipo/actions',
    type: 'get',
    dataType: 'html'
  })
  .done(function(data) {
    $('#content' ).html( data);
  })
  .fail(function() {
    $('#content').html(data);
  });
}

function equipoEditar(){
  $.ajax({
    url: '/backend/equipo/list',
    type: 'get',
    dataType: 'html'
  })
  .done(function(data) {
    $('#content' ).html( data);
  })
  .fail(function() {
    $('#content').html(data);
  });
}
