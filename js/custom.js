
$(document).ready(function(){

      // This is to animate the hamburger button
      $('.hamburger').hover(function(){
        $('.burger-line1,.burger-line2,.burger-line3').toggleClass("move");
      });
      // hamburger button animination ends here
      $('.hamburger').click(function(){
      	$('.line1,.line2,.line3').toggleClass('change');
      	$('.line-x-1,.line-x-2').toggleClass('change-x');
      	$('.lg-nav').toggleClass('change-lg-nav');
      	$('.user').toggleClass('change-user');
      });

      // for the bootstrap tooltip.js
      $('[data-toggle="tooltip"]').tooltip();

       // *counter*
      var counters = $(".countis");
      var countersQuantity = counters.length;
      var counter = [];

      for (i = 0; i < countersQuantity; i++) {
        counter[i] = parseInt(counters[i].innerHTML);
      }

      var count = function(start, value, id) {
        var localStart = start;
        setInterval(function() {
          if (localStart < value) {
            localStart++;
            counters[id].innerHTML = localStart;
          }
        }, 1);
      }

      for (j = 0; j < countersQuantity; j++) {
        count(0, counter[j], j);
      }
     // end of counter



 });
// main ending

