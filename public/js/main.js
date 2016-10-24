$(document).ready(function(){
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


})
