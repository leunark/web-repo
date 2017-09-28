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

  }); // end of document ready
})(jQuery); // end of jQuery name space