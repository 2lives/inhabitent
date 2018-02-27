Inhabitent v1.0
Just another hipster camping website

Getting Started
visit url: https://2lives.github.io/inhabitent/ and browse the shop!

Motivation:
Who doesn't need hipster camping gear?
-----------------------------------------------------------------

Built With:
wordpress
sql
php
jquery
sass
fontawesome

-----------------------------------------------------------------
A simple Jquery function is  used for the animated search bar in the nav.
example:
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

sass used for styling of the templates.

fontawesome to get the icons.

a wordpress plugin (contact form 7) is used for the email form on the "find us page".