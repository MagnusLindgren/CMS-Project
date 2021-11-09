<?php
get_header(); 

$about_title = get_field('about_title');
?>


	<h1><?php echo $about_title ?></h1>
	<?php get_template_part('/includes/section','content'); ?>



<?php
get_footer();