$(document).ready(function(){
   $("#submit").click(function(event){
      //Evita que el formulario se envíe de forma habitual y refresque la página
      event.preventDefault();

      var request;
      var contactForm = $("#newsLetterForm");
      request = $.ajax({
         type: "POST",
         url: contactForm.attr('action'),
         data: contactForm.serialize(),
         dataType: 'json',
         encode: true
      });
      request.done(function(data){
          $('#phpResponse').removeClass('colorGreen');
          $('#phpResponse').removeClass('colorRed');
          $('#phpResponse').empty();

          if(data.success === true){
              $('#phpResponse').addClass('colorGreen');
              $('#phpResponse').html("Gracias por suscribirte a nuestro newsletter, te mantendremos informado con todas las noticias");
          }
          if(data.errors !== undefined){ //Ha habido algún error
              if(data.errors.email !== undefined){
                  $('#phpResponse').addClass('colorRed');
                  $('#phpResponse').html(data.errors.email);
              }
          }
      });
      request.fail(function(jqHQR, textStatus){

      });
   });
});