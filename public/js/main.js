$(document).ready(function(){
  last_activity();
  $("#home").addClass("active");
});


function equipoAdd(){
  $.ajax({
    url: '/backend/equipo/add',
    type: 'get',
    dataType: 'html'
  })
  .done(function(data) {
    $('#content' ).html( data);
  })
  .fail(function() {
    console.log("error");
  })
  .always(function() {
    console.log("complete");
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
    console.log("error");
  })
  .always(function() {
    console.log("complete");
  });
}
