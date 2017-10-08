(function($){
  $(function(){

    // menu dropdown on medium or higher resolutions
    $('.dropdown-button').dropdown({
      inDuration: 300,
      outDuration: 225,
      gutter: 0, // Spacing from edge
      hover: false, // Activate on hover
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'right' // Displays dropdown with edge aligned to the left of button
    });

     // menu dropdown on small resolutions
    $('#buttonDropdownMenu').click(function() {
      $('#dropdownMenu').slideToggle( "fast");
    });

    // fix menu dropdowns mispositioning when resizing window
    $(window).resize(function() {
      $('#dropdownMenu').hide();
      $('#dropdownProfile').hide();
    });

    // logout on click: searching for class and not id cause 2 logouts, navbar and dropdown menu
    $('.logout-icon').click(function(){
      //async ajax request
      $.ajax({ 
      type: 'POST', 
      url: '../php/logout.php',
      dataType: 'json',
      success: function (data) {
          if(data.success){
            window.location.href = "home.php";
          }else{
            //show error message <------------>
          }
        }
      });
    });

    // reveive data from user and update username and status
    $.ajax({
      type: 'GET',
      url: '../php/user.php',
      dataType: 'json',
      success: function(data) {
        if(data.success){
          $('.profile-username').text(data.data.username);
          if(!data.data.status){
            $('.profile-status').text('...'); 
          }else{
            $('.profile-status').text(data.data.status); 
          }
        }else{
          //show error message
        }
      }
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space