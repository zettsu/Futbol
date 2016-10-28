<script>

  $('#addPartido').click(function(event){
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
