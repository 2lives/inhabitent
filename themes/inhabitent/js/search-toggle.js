(function ($) {

  var $seachInput = $('.main-navigation .search-field');
  $seachInput.hide();

  $('.main-navigation .search-submit').on('click', function (evt) {
    evt.preventDefault();
    $seachInput.show('slow');
    $seachInput.focus();

    $(document).on('keypress', function (event) {
      if ($seachInput.val() !== '') {
        if (event.which == 13) {
          $('.search-form').submit();
        }
      }
    });
    
  });

  $seachInput.on('blur', function () {
    $seachInput.hide(500);
  });




}(jQuery));