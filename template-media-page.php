<?php
/**
 * Template Name: Media Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div id="inner-content-wrap">	
		<?php get_template_part('templates/page', 'header'); ?>

		<?php the_field('generic_page_text_area_full'); ?>
		
		<section id="taku-videos">
			<?php the_field('taku_video_01'); ?>
			<?php the_field('taku_video_02'); ?>
			<?php the_field('taku_video_03'); ?>
			<?php the_field('taku_video_04'); ?>
			<?php the_field('taku_video_05'); ?>
			<?php the_field('taku_video_06'); ?>
			<?php the_field('taku_video_07'); ?>
			<?php the_field('taku_video_08'); ?>
			<?php the_field('taku_video_09'); ?>
			<?php the_field('taku_video_10'); ?>
		</section>

		<?php get_template_part('templates/content', 'page'); ?>

  </div>
<?php endwhile; ?>