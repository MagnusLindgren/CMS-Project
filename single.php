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
	$project_desc = get_field('project_description');
	$project_image = $project_imageArray['sizes']['large'];
	# End of declarations
	?>

<div class="col m-3">
	<div class="row m-3">
		<img src="<?php echo $project_image; ?>" class="img-thumbnail rounded mx-auto d-block">
	</div>
	<div class="row">
		<div class="container bg-light rounded">
		<h2 class="text-center"><?php echo $project_title; ?></h2>
			<div class="">
				<?php echo $project_desc; ?>
			</div>
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