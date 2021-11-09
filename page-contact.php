<?php
get_header(); 

$contact_name = get_field('contact_name'); 
$contact_email = get_field('contact_email');
$contact_phonenumber = get_field('contact_phonenumber');
$contact_github = get_field('contact_github');
$contact_imageArray = get_field('contact_image');
$contact_image = $contact_imageArray['sizes']['large'];
?>

<div class="container">
  <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
      <div class="col-md-4">
        <img src="<?php echo $contact_image ?>" class="img-fluid rounded-start" alt="<?php echo $contact_name; ?>">
      </div>
      <div class="col-md-8">
        <div class="card-body">
          <h5 class="card-title"><?php echo $contact_name; ?></h5>
          <p class="card-text">Mail me: 
            <a href="mailto:<?php echo $contact_email; ?>"><?php echo $contact_email; ?></a> 
            <br> Call me: <?php echo $contact_phonenumber; ?> 
          </p>
          <p class="card-text"><small class="text-muted">
            <a href="<?php echo $contact_github['url']; ?>">
            <?php echo $contact_github['title']; ?></a>
          </small></p>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();