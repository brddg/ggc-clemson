<?php
$hero_image = get_field('hero_image');
if (empty($hero_image)) {
  $hero_image = get_template_directory_uri() . '/img/hero-img.jpg';
}
$hero_text = get_field('hero_text');
if (empty($hero_text)) {
  $hero_text = get_the_title($post);
}
?>

<div class="hero container" style="background-image: url('<?php echo $hero_image; ?>')">
  <div class="container">
    <h1><?php echo $hero_text; ?></h1>
<!--     <a href="https://www.youtube.com/watch?v=wPIk2rRbmhE" class="btn-white cta-btn" data-toggle="lightbox">Watch The Video</a> -->
  </div>
</div>