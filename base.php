<?php

use Roots\Sage\Config;
use Roots\Sage\Wrapper;

?>

<!doctype html>
<html class="no-js" <?php language_attributes(); ?>>
  <?php get_template_part('templates/head'); ?>
  <body <?php body_class(); ?>>
    <!--[if lt IE 9]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'sage'); ?>
      </div>
    <![endif]-->
    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>
    <div id="half-banner-page-banner" style="background-image: url(<?php the_field('half_banner_page_banner'); ?>)">
      <h1 class="half_banner_content_title"><?php the_field('half_banner_content_title'); ?></h1>
    </div>
    <div class="wrap container" role="document">
      <div class="content row">
        <main class="half-banner-page" role="main">
          <?php include Wrapper\template_path(); ?>
        </main><!-- /.main -->
          <!-- <?php if (Config\display_sidebar()) : ?>
            <aside class="sidebar" role="complementary">
              <?php include Wrapper\sidebar_path(); ?>
            </aside>
          <?php endif; ?> -->
      </div><!-- /.content -->
    </div><!-- /.wrap -->
    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
