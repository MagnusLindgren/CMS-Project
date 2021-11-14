<?php
get_header();
// the query
$wpb_all_query = new WP_Query(array('post_type'=>'projects', 
									'post_status'=>'publish', 
									'posts_per_page'=>-1, 
									'meta_key' => 'project_featured',
									'meta_compare' => '=',
									'meta_value' => 1
									)); ?>

<div class="row">
<?php
if ( $wpb_all_query->have_posts() ) :
	while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); 
	# Declaration
	$project_title = get_field('project_title');
	$project_imageArray = get_field('project_image');
	$project_image = $project_imageArray['sizes']['large'];
	# End of declarations
	?>

	<div class="col m-3">
		<div class="row">
			<div class="container bg-light rounded">
			<h2 class="text-center"><?php echo $project_title; ?></h2>
				<div class="">
					<?php the_excerpt() ?>
				</div>
				<div class="row m-3">
					<img src="<?php echo $project_image; ?>" class="img-thumbnail rounded mx-auto d-block">
				</div>
				<small class="text-muted"><a href="<?php echo the_permalink(); ?>">Link to Project</a> </small></p>
			</div>	
		</div>
</div>
		
	<?php

endwhile; ?>
</div>

<?php
else:
_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

get_footer();