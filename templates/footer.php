<footer class="content-info" role="contentinfo">

  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>

  <script type="text/javascript">
  	// used to ensure first touch on over elements activates and not.
    document.addEventListener("touchstart", function(){}, true);

    // Can also be used with $(document).ready()
  	jQuery(window).load(function() {
  	  jQuery('.flexslider').flexslider({
  		animation: "slide",
  		slideshow: false
  	  });
  	});
  </script>
</footer>
