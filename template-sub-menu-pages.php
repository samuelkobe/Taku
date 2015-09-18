<?php
/**
 * Template Name: Sub-Menu Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?> 


  <h2>SUB-MENU PAGES</h2>
<?php endwhile; ?>