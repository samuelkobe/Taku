<?php
/**
 * Template Name: Experiences Template
 */
?>

<?php while (have_posts()) : the_post(); ?>
  
<?php 
// arguments
$category_types = array(
	'type'                     => 'post',
	'child_of'                 => 12,
	'parent'                   => '',
	'orderby'                  => 'slug',
	'order'                    => 'ASC',
	'hide_empty'               => 1,
	'hierarchical'             => 1,
	'exclude'                  => '',
	'include'                  => '',
	'number'                   => '',
	'taxonomy'                 => 'category',
	'pad_counts'               => false 

); ?>
<div class="experience-select-box">
<select name="event-dropdown" onchange='document.location.href=this.options[this.selectedIndex].value;'> 
 <option value=""><?php echo esc_attr(__('Taku Experiences')); ?></option> 
 <?php 
  $categories = get_categories($category_types); 
  foreach ($categories as $category) {
  	$option = '<option value="/category/'.$category->category_nicename.'">';
	$option .= $category->cat_name;
	$option .= '</option>';
	echo $option;
  }
 ?>
</select>
</div>


  <section id="experiences">
  <?php 

  // args
  $args = array(
  	'numberposts'	=> -1,
  	'category_name' => 'experience',
  	'orderby'       => 'rand'
  );

  // query
  $the_query = new WP_Query( $args );

  if( $the_query->have_posts()) :
  	while( $the_query->have_posts()) : $the_query->the_post(); ?>  		
			
		<?php
		  get_template_part('templates/experiences');
		?>		

  	<?php endwhile;
  endif;
  ?>
	</section>
  <?php wp_reset_query();	 // Restore global post data stomped by the_post(). ?>
<?php endwhile; ?>