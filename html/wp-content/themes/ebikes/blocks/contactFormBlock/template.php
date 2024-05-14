<?php


$gravity_form_id = get_field('gravity_form_id');
$background_image = get_field('background_image');

?>
<section class="contact-form-block section" style="background-image: url('<?php echo $background_image['url'] ?>')">
  <div class="contact-form-block__content content">
    <div class="row">
        <div class="col-12">
          <?php if ($gravity_form_id) : ?>
            <div class="contact-form-block__form-wrapper">
               <?= do_shortcode('[gravityform id="'.$gravity_form_id.'" title="true"]'); ?>
            </div>
          <?php endif; ?>
        </div>             
    </div>
  </div>
</section>