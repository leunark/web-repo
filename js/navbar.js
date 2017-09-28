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
          console.log(data);
          if(data.success){
            window.location.href = "home.php";
          }else{
            //show error messageg <------------>
          }
        }
      });
    });

  }); // end of document ready
})(jQuery); // end of jQuery name space