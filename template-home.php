<?php
/**
 * Template Name: Home Template
 */
?>

<section class="flexslider-wrap">
  <div class="flexslider">
	<ul class="slides">
		
		<?php
		query_posts(array('posts_per_page' => 3, 'category_name' => 'Intro'));
		if(have_posts()) : while(have_posts()) : the_post();
		?>
	
		  <li class="featured-post">
			<?php the_post_thumbnail('slider-image'); ?>
			<div class="caption">
				<a href="<?php the_permalink(); ?>" class="slider-title"><?php the_title();?></a>
				<?php the_excerpt(); ?>
				<a href="<?php the_permalink(); ?>" class="btn">Read More!</a>
			</div>

			
		  </li>
	  
		<?php
		    endwhile;
			endif;
			wp_reset_query();
		?>
	</ul>
  </div>
</section>

<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
  <?php get_template_part('templates/content', 'page'); ?>

	<section id="experience_portals">


			<div id="adventure" class="experience_portal">
				<a class="experience_link" href="<?php the_field('adventure_link'); ?>">
				
				<h2 class="experience_title"><span><?php the_field('adventure_title'); ?></span></h2>	
				<div class="inner_experience_wrap" style="background-image: url(<?php the_field('adventure_image'); ?>)">
					<p class="experience_description"><?php the_field('adventure_description'); ?></p>
				</div>

				</a>
			</div>

			<div id="connect" class="experience_portal">
				<a class="experience_link" href="<?php the_field('connect_link'); ?>">
				
				<h2 class="experience_title"><span><?php the_field('connect_title'); ?></span></h2>
				<div class="inner_experience_wrap" style="background-image: url(<?php the_field('connect_image'); ?>)">	
					<p class="experience_description"><?php the_field('connect_description'); ?></p>
				</div>

				</a>
			</div>

			<div id="discover" class="experience_portal">
				<a class="experience_link" href="<?php the_field('discover_link'); ?>">
	
				<h2 class="experience_title"><span><?php the_field('discover_title'); ?></span></h2>
				<div class="inner_experience_wrap" style="background-image: url(<?php the_field('discover_image'); ?>)">
					<p class="experience_description"><?php the_field('discover_description'); ?></p>
				</div>

				</a>
			</div>

			<div id="escape" class="experience_portal">
				<a class="experience_link" href="<?php the_field('escape_link'); ?>">
	
				<h2 class="experience_title"><span><?php the_field('escape_title'); ?></span></h2>
				<div class="inner_experience_wrap" style="background-image: url(<?php the_field('escape_image'); ?>)">
					<p class="experience_description"><?php the_field('escape_description'); ?></p>
				</div>

				</a>
			</div>
			

	</section>
 
<?php endwhile; ?>