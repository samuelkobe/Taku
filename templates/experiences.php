<div class="experience_container">
	<a class="experience_link_ep on_experiences" href="#">
	<div class="inner_experience_wrap" style="background-image: url(<?php the_field('experience_bg_image'); ?>)">
		<h2 class="experience_title_ep"><span><?php the_title(); ?></span></h2>
	</div>
	</a>
	<div class="experience_inner_content">
		<i class="fa fa-sort-asc experience_tab"></i>
		<?php the_field('experience_content_text'); ?>
	</div>
</div>