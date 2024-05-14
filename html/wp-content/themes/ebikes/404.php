<?php  

  get_header(); 

  $logo = get_template_directory_uri() . '/assets/images/ebikes.main.svg'
?>
<section class="404 main-banner four-zero-four">
  <div class="content">
    <div class="row col-md-12">
      <div class="image-wrapper">
        <img src="<?= $logo ?>" alt="Ebikes">
      </div>
      <h1>SORRY, THIS PAGE DOESN'T EXIST</h1>
      <h2>Maybe you were looking for one of the following pages?</h2>
      <ul>
      <ul>
    </div>
  </div>
</section>


<?php get_footer(); ?>