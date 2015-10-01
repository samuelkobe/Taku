<?php while (have_posts()) : the_post(); ?>
  <!-- <?php get_template_part('templates/page', 'header'); ?> -->
  
  <?php 

  // args
  $args = array(
  	'numberposts'	=> -1,
  	'category_name' => 'adventure-experience'
  );

  // query
  $the_query = new WP_Query( $args );

  if( $the_query->have_posts()) :
  	while( $the_query->have_posts()) : $the_query->the_post(); ?>
  		<h2><?php the_title(); ?></h2>
  		<img src="<?php the_field('experience_bg_image') ?>">
  	<?php endwhile;
  endif;
  ?>

  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
  <?php get_template_part('templates/content', 'page'); ?>


<?php endwhile; ?>