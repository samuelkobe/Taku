<?php
/**
 * Template Name: Asymmetrical Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>

	<div id="inner-content-wrap">	
		<?php get_template_part('templates/page', 'header'); ?>

		<!-- Asymmetrical Content Starts Here -->

		<div class="asymmetrical_content_wrap">
			<div class="asymmetrical_content_left padding-right">
				<img src="<?php the_field('image_block_01'); ?>" alt="Taku Resort &amp; Marina"  />
				<h2><?php the_field('title_block_02'); ?></h2>
				<?php the_field('content_block_02'); ?>
				<img src="<?php the_field('image_block_05'); ?>" alt="Taku Resort &amp; Marina" />
				<h2><?php the_field('title_block_03'); ?></h2>
				<?php the_field('content_block_03'); ?>
				<img src="<?php the_field('image_block_07'); ?>" alt="Taku Resort &amp; Marina" />
			</div>

			<div class="asymmetrical_content_right padding-left">
				<h2><?php the_field('title_block_01'); ?></h2>
				<?php the_field('content_block_01'); ?>
				<img src="<?php the_field('image_block_02'); ?>" alt="Taku Resort &amp; Marina" />
				<img src="<?php the_field('image_block_03'); ?>" alt="Taku Resort &amp; Marina" />
				<img src="<?php the_field('image_block_04'); ?>" alt="Taku Resort &amp; Marina" />
				<img src="<?php the_field('image_block_06'); ?>" alt="Taku Resort &amp; Marina" class="half-width-images" />
				<img src="<?php the_field('image_block_08'); ?>" alt="Taku Resort &amp; Marina" />
				<h2><?php the_field('title_block_04'); ?></h2>
				<?php the_field('content_block_04'); ?>
			</div>
		</div>

		<!-- Generic Content Starts here -->

		<div class="generic_content_wrap">
			<div class="generic_content_left padding-right">
				<?php the_field('generic_page_text_area_left'); ?>
			</div>
			<div class="generic_content_right padding-left">
				<?php the_field('generic_page_text_area_right'); ?>
			</div>
		</div>

		<div class="generic_content_wrap">
			<div class="generic_content_full">
				<?php the_field('generic_page_text_area_full'); ?>
			</div>
		</div>

		<?php get_template_part('templates/content', 'page'); ?>

  </div>
<?php endwhile; ?>