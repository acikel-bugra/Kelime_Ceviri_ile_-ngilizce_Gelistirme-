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
      if(result==2){
        location.reload();
      }else if(result==3){
        alert("Bitiş Tarihi Başlangıç Tarihinden Küçük Olamaz");
      }else if(result==4){
        alert("Şifreler Uyuşmuyor");
      }else{
       alert("ok");
     }
   })
    .fail(function(){
     alert("fail");
   })
  });
});