<div id="inner-content-wrap">	
	<!-- Asymmetrical Content Starts Here -->
	<h1 class="accommodations_main_title"><?php the_field('accommodations_main_title_block_01') ?></h1>
	<div class="asymmetrical_content_wrap accommodations_padding">
		<div class="asymmetrical_content_left padding-right">
			<img src="<?php the_field('accommodations_image_block_01'); ?>" alt="Taku Resort &amp; Marina"  />
			<h2><?php the_field('accommodations_title_block_01'); ?></h2>
			<?php the_field('accommodations_content_block_01'); ?>
			<h2><?php the_field('extra_information_title') ?></h2>
			<?php the_field('extra_information_content') ?>
		</div>

		<div class="asymmetrical_content_right padding-left">
			<div><?php the_field('accommodations_content_block_02'); ?></div>
			<img src="<?php the_field('accommodations_image_block_02'); ?>" alt="Taku Resort &amp; Marina" />
			<div class="asymmetrical_inner_content_wrap">
				<img src="<?php the_field('accommodations_image_block_03'); ?>" alt="Taku Resort &amp; Marina" class="half-width-images" />
				<div class="accomm-button padding-left">
					<a href="<?php the_field('accommodations_book_now_link'); ?>" target="_blank" class="button-link button-link-more">Book Now</a>
				</div>
			</div>
		</div>
	</div>

	<div class="asymmetrical_content_wrap">
		<div class="accommodation_pricing">
			<h2>Pricing</h2>
				<table class="pricing">
					<tr>
						<td class="pricing_titles"><strong>Accommodation</strong> <br><span class="smaller-text">* extras</span></td>
						<td class="pricing_titles center"><strong>Standard Rate</strong> <br><span class="smaller-text">Sept 14 - June 12</span></td>
						<td class="pricing_titles center"><strong>Peak Rate</strong> <br><span class="smaller-text">June 13 - Sept 13</span></td>
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
					<tr>
						<td><?php the_field('extra_person', 'options'); ?></td>
						<td class="center"><?php the_field('extra_person_rate', 'options'); ?></td>
					</tr>
				</table>
			<div class="accomm-information"><?php the_field('accommodation_infomation_general', 'options'); ?></div>
		</div>
	</div>

	<!-- EXTRA INFORMATION FOR ACCOMMODATIONS -->
	<h2>Gallery</h2>
	<div class="asymmetrical_content_wrap">
		<?php 
		$images = get_field('accommodation_gallery');

		if( $images ): ?>
		    <div class="accommodation_gallery_wrap">
		        <?php foreach( $images as $image ): ?>
		            <div class="accommodation_gallery_object">
		                <a href="<?php echo $image['url']; ?>" target="_blank">
		                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
		                </a>
		                <p><?php echo $image['caption']; ?></p>
		            </div>
		        <?php endforeach; ?>
		    </div>
		<?php endif; ?>
	</div>

</div>