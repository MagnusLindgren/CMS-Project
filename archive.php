<?php
get_header();
?>
<div class="row">
<?php
if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 
	# Declaration
	$project_title = get_field('project_title');
	$project_imageArray = get_field('project_image');
	$project_image = $project_imageArray['sizes']['large'];
	# End of declarations
	?>

	<div class="card m-3" style="width: 18rem;">
  		<img src="<?php echo $project_image ?>" class="card-img-top" alt="...">
  		<div class="card-body">
			<h5><?php echo $project_title; ?></h5>			
    		<p class="card-text"><?php the_excerpt(); ?></p>
			<p class="card-text"><small class="text-muted"><a href="<?php echo the_permalink(); ?>">Link to Project</a> </small></p>
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