<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>

  <script type="text/javascript">
    jQuery(function ($) {
      $(document).ready(function(){
        $('.bxslider').bxSlider({
          mode: 'vertical',
          prevText: '<i class="fa fa-long-arrow-left"></i>',
          nextText: 'Continue',
          pager: false,
          touchEnabled: false
        });
      });
    });
  	// used to ensure first touch on over elements activates and not.
    document.addEventListener("touchstart", function(){}, true);
  </script>
  <script>
    jQuery(function ($) {

      $(".experience_link").unbind().click(makeItOpen);

      function makeItOpen(e) {
        e.preventDefault();
        if ($('.expanded').length > 0) {
          var isOpen = $(this).parent().hasClass('expanded');
          $('.expanded').removeClass('expanded');
            if (isOpen) {
              return;
            }
          var self = $(this);
          setTimeout(function() {
            $('.expanded').removeClass('expanded');
            self.parent().addClass('expanded');
          }, 800);
        } else {
          $(this).parent().addClass('expanded');
        }
      } 

    });
  </script>
</footer>