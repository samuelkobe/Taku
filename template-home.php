<?php
/**
 * Template Name: Home Template
 */
?>

<ul class="bxslider">
	<li>
		<figure class="story">
		  <img src="<?php the_field('story_part_01_image'); ?>" alt="Taku Story Part 1"  />
		  <figcaption><?php the_field('story_part_01_caption'); ?></figcaption>
		</figure>
	</li>
	<li>
		<figure class="story">
		  <img src="<?php the_field('story_part_02_image'); ?>" alt="Taku Story Part 2"  />
		  <figcaption><?php the_field('story_part_02_caption'); ?></figcaption>
		</figure>
	</li>
	<li>
		<figure class="story">
		  <img src="<?php the_field('story_part_03_image'); ?>" alt="Taku Story Part 3"  />
		  <figcaption><?php the_field('story_part_03_caption'); ?></figcaption>
		</figure>
	</li>
	<li>
		<figure class="story">
		  <img src="<?php the_field('story_part_04_image'); ?>" alt="Taku Story Part 4"  />
		  <figcaption><?php the_field('story_part_04_caption'); ?></figcaption>
		</figure>
	</li>
	<li>
		<figure class="story">
		  <img src="<?php the_field('story_part_05_image'); ?>" alt="Taku Story Part 5"  />
		  <figcaption><?php the_field('story_part_05_caption'); ?></figcaption>
		</figure>
	</li>
</ul>

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