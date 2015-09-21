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
</footer>