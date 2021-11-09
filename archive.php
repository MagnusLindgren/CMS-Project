<?php
get_header();

if ( have_posts() ) :
	while ( have_posts() ) : the_post(); 
	# Declaration
	$project_title = get_field('project_title');
	$project_imageArray = get_field('project_image');
	$project_image = $project_imageArray['sizes']['large'];
	?>
	<div class="card mb-3">
  <img src="<?php echo $project_image ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $project_title; ?></h5>
    <p class="card-text"><?php the_excerpt(); ?></p>
    <p class="card-text"><small class="text-muted"><a href="<?php echo the_permalink(); ?>">Link to Post</a> </small></p>
  </div>
</div>
		
<?php

	endwhile;
else:
	_e( 'Sorry, no posts matched your criteria.', 'textdomain' );
endif;

get_footer();