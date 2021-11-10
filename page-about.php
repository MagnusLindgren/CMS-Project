<?php
get_header(); 
$about_title = get_field('about_title');
$about_desc = get_field('about_description');
$about_imageArray = get_field('about_image');
$about_image = $about_imageArray['sizes']['large'];
?>
<div class="col m-3">
	<div class="row m-3">
		<img src="<?php echo $about_image; ?>" class="img-thumbnail rounded mx-auto d-block">
	</div>
	<div class="row">
		<div class="container bg-light rounded">
		<h2 class="text-center"><?php echo $about_title; ?></h2>
			<div class="">
				<?php echo $about_desc; ?>
			</div>
		</div>	
	</div>
</div>


<?php
get_footer();