<div id="inner-content-wrap">	
	<!-- Asymmetrical Content Starts Here -->
	<h1 class="accommodations_main_title"><?php the_field('accommodations_main_title_block_01') ?></h1>
	<div class="asymmetrical_content_wrap accommodations_padding">
		<div class="asymmetrical_content_left padding-right">
			<img src="<?php the_field('accommodations_image_block_01'); ?>" alt="Taku Resort &amp; Marina"  />
			<h2><?php the_field('accommodations_title_block_01'); ?></h2>
			<?php the_field('accommodations_content_block_01'); ?>
		</div>

		<div class="asymmetrical_content_right padding-left">
			<img src="<?php the_field('accommodations_image_block_02'); ?>" alt="Taku Resort &amp; Marina" />
			<div class="asymmetrical_inner_content_wrap">
				<img src="<?php the_field('accommodations_image_block_03'); ?>" alt="Taku Resort &amp; Marina" class="half-width-images padding-right order-back" />
				<div class="padding-left order-forward"><?php the_field('accommodations_content_block_02'); ?></div>
			</div>
			<a href="<?php the_field('accommodations_book_now_link'); ?>" target="_blank">Temporary Book Now Link</a>
		</div>
	</div>


	<!-- EXTRA INFORMATION FOR ACCOMMODATIONS -->
	<div class="asymmetrical_content_wrap accommodations_padding">
		<?php 

		$images = get_field('accommodation_gallery');

		if( $images ): ?>
		    <ul>
		        <?php foreach( $images as $image ): ?>
		            <li>
		                <a href="<?php echo $image['url']; ?>" class="fancybox" title="<?php echo $image['title']; ?>" rel="<?php the_title(); ?>">
		                     <img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
		                </a>
		                <p><?php echo $image['caption']; ?></p>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>
	</div>

</div>