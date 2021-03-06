$(document).ready(function(){
  //last_activity();
  //$("#home").addClass("active");
  partidoVer(1);

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

function partidoAdd(){
  $.ajax({
    url: '/backend/partido/create',
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

function loadMessageSender(){
  $.ajax({
    url: '/backend/loadmessagesender',
    type: 'get',
    dataType: 'html',
    contentType: "application/json"
  })
  .done(function(data) {
    $('#content' ).html(data);
  })
  .fail(function(data) {
    $('#content').html(data);
  });
}

function loadUserCreator(){
  $.ajax({
    url: '/backend/user',
    type: 'get',
    dataType: 'html',
    contentType: "application/json"
  })
  .done(function(data) {
    $('#content' ).html(data);
  })
  .fail(function(data) {
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

function partidoActions(){
  $.ajax({
    url: '/backend/partido/actions',
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

function partidoVer(id){
  $.ajax({
    url: '/backend/partido/show/'+id,
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
