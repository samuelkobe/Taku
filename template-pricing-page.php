<?php
/**
 * Template Name: Pricing Page Template
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
			<img src="<?php the_field('getting_here_map'); ?>" id="taku-map" alt="Taku Map"  />
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

		<div class="accommodation_pricing" style="margin-top:-48px;">
				<table class="pricing full_table">
					<tr>
						<td class="pricing_titles"><strong>Accommodation</strong> <br><span class="smaller-text">* extras</span></td>
						<td class="pricing_titles center"><strong>Standard Rate</strong> <br><span class="smaller-text">Sept 14 - June 12</span></td>
						<td class="pricing_titles center"><strong>Peak Rate</strong> <br><span class="smaller-text">June 13 - Sept 13</span></td>
					</tr>
					<tr class="break_price_title">
						<td class="subtitle_price" colspan="3"><strong>Taku Terraces</strong></td>
					</tr>
					<tr>
						<td><?php the_field('terrace_studio', 'options'); ?></td>
						<td class="center"><?php the_field('terrace_studio_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('terrace_studio_peak_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('terrace_one_br', 'options'); ?></td>
						<td class="center"><?php the_field('terrace_one_br_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('terrace_one_br_peak_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('terrace_two_br', 'options'); ?></td>
						<td class="center"><?php the_field('terrace_two_br_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('terrace_two_br_peak_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('terrace_deluxe', 'options'); ?></td>
						<td class="center"><?php the_field('terrace_deluxe_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('terrace_deluxe_peak_rate', 'options'); ?></td>
					</tr>
					<tr class="break_price_title">
						<td class="subtitle_price" colspan="3"><strong>Beach House</strong></td>
					</tr>
					<tr>
						<td><?php the_field('beach_house', 'options'); ?></td>
						<td class="center"><?php the_field('beach_house_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('beach_house_peak_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('beach_house_s2', 'options'); ?></td>
						<td class="center"><?php the_field('beach_house_standard_rate_s2', 'options'); ?></td>
						<td class="center"><?php the_field('beach_house_peak_rate_s2', 'options'); ?></td>
					</tr>
					<tr class="break_price_title">
						<td class="subtitle_price" colspan="3"><strong>Beachfront Cabins</strong></td>
					</tr>
					<tr>
						<td><?php the_field('beachfront_cabin', 'options'); ?></td>
						<td class="center"><?php the_field('cabin_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('cabin_peak_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('intimate_beachfront_cabin', 'options'); ?></td>
						<td class="center"><?php the_field('intimate_cabin_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('intimate_cabin_peak_rate', 'options'); ?></td>
					</tr>
					<tr class="break_price_title">
						<td class="subtitle_price" colspan="3"><strong>Treehouse</strong></td>
					</tr>
					<tr>
						<td><?php the_field('treehouse_suite', 'options'); ?></td>
						<td class="center"><?php the_field('treehouse_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('treehouse_peak_rate', 'options'); ?></td>
					</tr>
					<tr class="break_price_title">
						<td class="subtitle_price" colspan="3"><strong>Rv &amp; Camping</strong></td>
					</tr>
					<tr>
						<td><?php the_field('rv_camping', 'options'); ?></td>
						<td class="center"><?php the_field('rv_camping_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('rv_camping_peak_rate', 'options'); ?></td>
					</tr>
					<tr class="break_price_title">
						<td class="subtitle_price" colspan="3"><strong>Marina</strong></td>
					</tr>
					<tr>
						<td><?php the_field('taku_marina', 'options'); ?></td>
						<td class="center"><?php the_field('marina_standard_rate', 'options'); ?></td>
						<td class="center"><?php the_field('marina_peak_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('marina_power', 'options'); ?></td>
						<td class="center"><?php the_field('marina_power_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('drop_off', 'options'); ?></td>
						<td class="center"><?php the_field('drop_off_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('ice', 'options'); ?></td>
						<td class="center"><?php the_field('ice_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('garbage_bag', 'options'); ?></td>
						<td class="center"><?php the_field('garbage_bag_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td colspan="3"><?php the_field('marina_information', 'options'); ?></td>
					</tr>
					<tr class="break_price_title">
						<td class="subtitle_price" colspan="3"><strong>Extras</strong></td>
					</tr>
					<tr>
						<td><?php the_field('extra_person', 'options'); ?></td>
						<td class="center"><?php the_field('extra_person_rate', 'options'); ?></td>
					</tr>
					<tr>
						<td><?php the_field('pets_accommodations', 'options'); ?></td>
						<td class="center"><?php the_field('pets_accommodations_rate', 'options'); ?></td>
					</tr>
				</table>
			<div class="accomm-information"><?php the_field('accommodation_infomation_general', 'options'); ?></div>
		</div>

		<?php get_template_part('templates/content', 'page'); ?>

  </div>
<?php endwhile; ?>