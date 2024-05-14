<?php
 /** 
  *
  * Template for Coming Soon Page
  *
  **/

  get_header();

 ?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<section class="section video-cover" id="coming-soon">
  <video playsinline autoplay muted loop id="coming-soon-video">
    <source src="/wp-content/themes/ebikes/assets/videos/eBikes_Landingpage_Clip_Desktop.mp4" type="video/mp4">
    <source src="/wp-content/themes/ebikes/assets/videos/eBikes_Landingpage_Clip_Desktop.webm" type='video/webm; codecs="vp8.0, vorbis"'>
    Your browser does not support HTML5 video.
  </video>
  <div class="content--wrapper">
    <div class="content">
        <div class="content__header">
          <figure class="logo">
            <img src="/wp-content/themes/ebikes/assets/images/ebike-logo-white.svg" class="logo__img" alt="Ebikes Logo" >
          </figure>
          <a href="https://www.instagram.com/ebikes_au/" target="_blank">
            <figure class="social">
              <img src="/wp-content/themes/ebikes/assets/images/Instagram.svg" class="instagram-icon" alt="Ebikes Logo" >
            </figure>
          </a>
        </div>
        <div class="content__footer">
          <h2>COMING SOON</h2>
          <p>Join the list to find out when we launch</p>
          <div class="gf-form-block">
            <?php echo do_shortcode( '[gravityform id="1" title="true"]' ); ?>
          </div> 
        </div>
    </div>
  </div>
</section>
