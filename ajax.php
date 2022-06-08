$(document).ready(function(){
  
  $(document).on('submit', 'form[data-xhr]', function(event){
      event.preventDefault();
      var action    = $(this).attr('action');
      var method    = $(this).attr('method');
      var formData  = new FormData($(this)[0]);
        $.ajax({
          url:  action,
          type: method,
          dataType: 'json',
          data: formData,
          cache: false,
          contentType: false,
          processData: false
        })
        .done(function(result){
          
          var options={
            title:  result.t,
            text:   result.m,
            type:   result.s,
            confirmButtonText: 'Teşkür Teşkür'
          };
          if (result.r!=null) {
            options['timer']              = 3000;
            options['showConfirmButton']  = false;
            setTimeout(function(){
              window.location.href  = result.r;
            },3000);
          }
          swal(options);
        })
        .fail(function(){
          swal({
            title:  'Hata oluştu!',
            text:   'İstek gerçekleştirilemedi',
            type:   'error',
            confirmButtonText: "Tamam"
          });
        })
  });
});