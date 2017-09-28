(function($){
  $(function(){

    $('button[name=login]').click(function(event){
      event.preventDefault();
      //object that contains all parameters for the request
      obj = { 
        login: true,
        username: $('input[name=username]').val(),
        password: $('input[name=password]').val()
      };
      //async ajax request
      $.ajax({ 
      type: 'POST', 
      url: '../php/login.php', 
      data: obj, 
      dataType: 'json',
      success: function (data) { 
          console.log(data);
          if(data.success){
            window.location.href = "home.php";
          }else{
            //show error messageg
            $('input[name=username]').addClass("invalid");
            $('input[name=password]').addClass("invalid");
          }
        }
      });
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space