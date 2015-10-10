<footer class="content-info" role="contentinfo">
  <div class="container">
    <?php dynamic_sidebar('sidebar-footer'); ?>
  </div>

  <script type="text/javascript">
    jQuery(function ($) {
      $(document).ready(function(){
        $('.bxslider').bxSlider({
          mode: 'vertical',
          prevText: '<i class="fa fa-long-arrow-left hide-bx-prev"></i>',
          nextText: 'Continue',
          pager: false,
          touchEnabled: false
        });

        var bx_next_counter = 0;
        $('.bx-prev').addClass('hide-bx-prev');

        //hide back button to start.
        $(".bx-next").click(function(){
          bx_next_counter ++;
          if (bx_next_counter > 0) {
            $('.bx-prev').removeClass('hide-bx-prev');
            $('.bx-prev i').removeClass('hide-bx-prev');
          }
        });

        $(".bx-prev").click(function(){
          bx_next_counter --;
          if (bx_next_counter == 0) {
            $('.bx-prev').addClass('hide-bx-prev');
            $('.bx-prev i').addClass('hide-bx-prev');
          }
        });

      });
    });
  	// used to ensure first touch on over elements activates and not.
    document.addEventListener("touchstart", function(){}, true);
  </script>

  <script>
    //EXPERIENCES SCRIPT FOR EXEPERIENCE CONTENT REVEAL
    jQuery(function ($) {
      // Open and closing of experiences.
      $(".experience_link_ep.on_experiences").unbind().click(makeItOpen);

      function makeItOpen(e) {
        e.preventDefault();
        if ($('.expanded').length > 0) {
          var isOpen = $(this).parent().hasClass('expanded');
          $('.expanded').css( "height", 400);
          $('.expanded').removeClass('expanded');
            if (isOpen) {
              return;
            }
          var self = $(this);
          setTimeout(function() {
            $('.expanded').removeClass('expanded');
            self.parent().addClass('expanded');
            $('.expanded').css( "height", $('.expanded').children('.experience_inner_content').outerHeight()+$('.expanded').height());
          }, 800);
        } else {
          $(this).parent().addClass('expanded');
          $('.expanded').css( "height", $('.expanded').children('.experience_inner_content').outerHeight()+$('.expanded').height());
        }
      }
    });
  </script>
  <script>
  //DROPDOWN SELECTOR
   jQuery(function ($) {
      var url = window.location.pathname.slice(0,-1);
      $(".experience-select-box select option").each(function() {
        var value = $(this).val();
        if(url === value) {
            $(this).attr('selected', 'selected')
        };
      });
    });
  </script>
</footer>