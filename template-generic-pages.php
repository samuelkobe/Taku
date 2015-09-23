<?php
/**
 * Template Name: Generic Page Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
	<div id="inner-content-wrap">	
		<?php get_template_part('templates/page', 'header'); ?>

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

		<section id="taku-contact-info">
			<div id="phone-info" class="contact-info padding-right">
				<div class="contact-header">
					<h2><?php the_field('phone_taku_header'); ?></h2>
				</div>
				<div class="contact-content">
					<div class="contact-content-row">
						<p class="contact-info-title"><?php the_field('taku_phone_title_01'); ?></p>
						<p class="contact-info-content"><?php the_field('taku_phone_number_01'); ?></p>
					</div>
					<div class="contact-content-row">
						<p class="contact-info-title"><?php the_field('taku_phone_title_02'); ?></p>
						<p class="contact-info-content"><?php the_field('taku_phone_number_02'); ?></p>
					</div>
					<div class="contact-content-row">
						<p class="contact-info-title"><?php the_field('taku_phone_title_03'); ?></p>
						<p class="contact-info-content"><?php the_field('taku_phone_number_03'); ?></p>
					</div>
				</div>
			</div>
			<div id="email-info" class="contact-info padding-left">
				<div class="contact-header">
					<h2><?php the_field('email_taku_header'); ?></h2>
				</div>
				<div class="contact-content">
					<div class="contact-content-row">
						<p class="contact-info-title"><?php the_field('taku_email_title_01'); ?></p>
						<p class="contact-info-content"><?php the_field('taku_email_01'); ?></p>
					</div>
					<div class="contact-content-row">
						<p class="contact-info-title"><?php the_field('taku_email_title_02'); ?></p>
						<p class="contact-info-content"><?php the_field('taku_email_02'); ?></p>
					</div>
					<div class="contact-content-row">
						<p class="contact-info-title"><?php the_field('taku_email_title_03'); ?></p>
						<p class="contact-info-content"><?php the_field('taku_email_03'); ?></p>
					</div>
				</div>
			</div>
		</section>

		<?php get_template_part('templates/content', 'page'); ?>

  </div>
<?php endwhile; ?>