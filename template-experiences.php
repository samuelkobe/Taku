<?php
/**
 * Template Name: Experiences Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  <!-- <?php get_template_part('templates/page', 'header'); ?> -->
  



  <section id="experience_portals">
  <?php 

  // args
  $args = array(
  	'numberposts'	=> -1,
  	'category_name' => 'experience'
  );

  // query
  $the_query = new WP_Query( $args );

  if( $the_query->have_posts()) :
  	while( $the_query->have_posts()) : $the_query->the_post(); ?>  		
			<div id="adventure" class="experience_portal">
				<a class="experience_link" href="<?php the_field('adventure_link'); ?>">
				
				<h2 class="experience_title"><span><?php the_title(); ?></span></h2>	
				<div class="inner_experience_wrap" style="background-image: url(<?php the_field('experience_bg_image'); ?>)">
					<p class="experience_description"><?php the_field('adventure_description'); ?></p>
				</div>

				</a>
			</div>
			

  	<?php endwhile;
  endif;
  ?>
	</section>
  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
  <?php get_template_part('templates/content', 'page'); ?>

<?php endwhile; ?>