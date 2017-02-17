/**
 * @file
 * Placeholder file for custom sub-theme behaviors.
 *
 */
(function ($, Drupal) {

  /**
   * Use this behavior as a template for custom Javascript.
   */
  Drupal.behaviors.exampleBehavior = {
    attach: function (context, settings) {
      //alert("I'm alive!");
    }
  };

  var parallax = document.querySelectorAll(".parallax"),
      speed = -0.1;

  $(window).on("scroll resize load",function(){
      [].slice.call(parallax).forEach(function(el,i){

        var windowYOffset = window.pageYOffset,
            elBackgrounPos = "center " + (windowYOffset * speed) + "px";
        if( window.innerWidth > 640 ){
          el.style.backgroundPosition = elBackgrounPos;
        }

      });
  });

})(jQuery, Drupal);

(function(){

})();

//Ajax Test
function test_ajax_load() {
  jQuery("#ajax-container").load("/monikamaehner.com/node/7 #node-7");
};
