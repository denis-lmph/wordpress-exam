<section class="banner-slider-section">
    <div class="banner-slider">

      <?php if(have_rows("slides")): ?>
        <?php while( have_rows('slides') ): the_row();
          $slider_image = get_sub_field('slider_image');
          $title = get_sub_field('title');
          $button_one = get_sub_field('button_one');
          $button_two = get_sub_field('button_two');
          $gradient_pattern = get_sub_field('gradient_pattern');


          switch ( $gradient_pattern) {
            case "Grey":
              $gradient_pattern = "background: linear-gradient(180deg, #0F232E -16.72%, #9BAAB9 20.91%, #FFFFFF 61.67%);";
              break;
            case "Green":
              $gradient_pattern = "background:linear-gradient(180deg, #0F232E 7.81%, rgba(4, 255, 135, 0.85) 42.69%, #FFF 81.59%);";
              break;
              case "Red":
                $gradient_pattern = "background:linear-gradient(180deg, #0F232E 7.81%,  #620F18 42.69%, #FFF 81.59%);";
              break;
            case "None":
              $gradient_pattern = "";
              break;
            default:

            $gradient_pattern = "background: linear-gradient(180deg, #0F232E -16.72%, #9BAAB9 20.91%, #FFFFFF 61.67%);";
          }
          
          $gradient_pattern.= " position:relative;";

        ?>
          <div class="banner-slider-item" style="<?php echo $gradient_pattern; ?>">
            <div class="banner-slider-item__content">
              <div class="banner-slider-item__image-wrapper">
                <img class="banner-slider-item__image" src="<?= $slider_image['url'] ?>">
              </div>
              <div class="banner-slider-item__text-wrapper">
                <?php if ($title) : ?>
                  <h1 class="banner-slider-item__title">
                    <?= $title ?>
                  </h1>
                <?php endif; ?>
              </div>

              <div class="banner-slider-item__button-wrapper">
                <?php if ($button_one) : ?>
                  <a class="button button--dark-blue button--hover-gradient" href="<?= $button_one['url'] ?>">
                    <?= $button_one['title'] ?>
                  </a>
                <?php endif; ?>

                <?php if ($button_two) : ?>
                  <a class="button button--dark-blue button--hover-gradient" href="<?= $button_two['url'] ?>">
                    <?= $button_two['title'] ?>
                  </a>
                <?php endif; ?>
              </div>
            </div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
      
  </div>        
</section>
