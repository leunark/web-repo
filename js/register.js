(function($){
  $(function(){

    $('button[name=register]').click(function(event){
      event.preventDefault();
      //object that contains all parameters for the request
      obj = { 
        register: true,
        username: $('input[name=username]').val(),
        password: $('input[name=password]').val(),
        passwordConfirmation: $('input[name=passwordConfirmation]').val()
      };
      //async ajax request
      $.ajax({ 
      type: 'POST', 
      url: '../php/register.php', 
      data: obj, 
      dataType: 'json',
      success: function (data) { 
          console.log(data);
          if(data.success){
            window.location.href = "login.php";
          }else{
          	//show error message
            $('input[name=username]').addClass("invalid");
            $('input[name=password]').addClass("invalid");
            $('input[name=passwordConfirmation]').addClass("invalid");
          }
        }
      });
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space