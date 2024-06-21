$(document).ready(function() {
  "use strict"

  setTimeout(function() {
    $('body').prepend("<div class='container starting' align='center'><img class='img-responsive rocket' src='assets/img/rocket.png'></div>");
  }, 500);

  setTimeout(function() {
    window.location.href = '/pages/home';
  }, 4000);

});

