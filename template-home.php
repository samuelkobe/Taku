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
	
				<div class="inner_experience_wrap">
					<h2 class="experience_title"><?php the_field('adventure_title'); ?></h2>
					<p class="experience_description"><?php the_field('adventure_description'); ?></p>
					<img src="<?php the_field('adventure_image'); ?>" class="experience_image" alt="" />
				</div>

				</a>
			</div>

			<div id="connect" class="experience_portal">
				<a class="experience_link" href="<?php the_field('connect_link'); ?>">
	
				<div class="inner_experience_wrap">
					<h2 class="experience_title"><?php the_field('connect_title'); ?></h2>
					<p class="experience_description"><?php the_field('connect_description'); ?></p>
					<img src="<?php the_field('connect_image'); ?>" class="experience_image" alt="" />
				</div>

				</a>
			</div>

			<div id="discover" class="experience_portal">
				<a class="experience_link" href="<?php the_field('discover_link'); ?>">
	
				<div class="inner_experience_wrap">
					<h2 class="experience_title"><?php the_field('discover_title'); ?></h2>
					<p class="experience_description"><?php the_field('discover_description'); ?></p>
					<img src="<?php the_field('discover_image'); ?>" class="experience_image" alt="" />
				</div>

				</a>
			</div>

			<div id="escape" class="experience_portal">
				<a class="experience_link" href="<?php the_field('escape_link'); ?>">
	
				<div class="inner_experience_wrap">
					<h2 class="experience_title"><?php the_field('escape_title'); ?></h2>
					<p class="experience_description"><?php the_field('escape_description'); ?></p>
					<img src="<?php the_field('escape_image'); ?>" class="experience_image" alt="" />
				</div>

				</a>
			</div>
			

	</section>
 
<?php endwhile; ?>