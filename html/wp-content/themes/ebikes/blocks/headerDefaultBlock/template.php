<?php 
    $heading = get_field('heading_title');
    $background_image = get_field('background_image');
    $icon_content = get_field('icon_content');
?>

<section class="header-default section" style="background-image: url('<?php echo $background_image['url'] ?>')">
  <div class="header-default__background--overlay">
  </div>

  <div class="header-default__content content">
  <?php if ($icon_content) : ?>
      <div class="header-default__icon-wrapper">
        <img src="<?= $icon_content['url'] ?>" class="icon" />
      </div> 
    <?php endif; ?>
    <?php if ($heading) : ?>
      <div class="header-default__heading-wrapper">
        <h1 class="header-default__heading"><?= $heading ?></h1>
      </div> 
    <?php endif; ?>
  </div>
</section>