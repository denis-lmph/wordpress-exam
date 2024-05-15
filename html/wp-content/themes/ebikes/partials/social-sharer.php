<?php

$headerImage = get_template_directory_uri() . '/assets/images/knox-shopping-centre.png';
$chevron = get_template_directory_uri() . '/assets/images/right-chevron-gold.png';
$facebookIcon = get_template_directory_uri() . '/assets/images/Facebook.png';
$twitterIcon = get_template_directory_uri() . '/assets/images/Twitter.png';
$linkedInIcon = get_template_directory_uri() . '/assets/images/Linkedin.png';

?>

    <div class="date-socials-wrapper">
        <div class="post-date">
            <?php $post_date = get_the_date('F d, Y');
            echo $post_date; ?>
        </div>
        <div class="socials-wrapper">
            <a href="/" class="share-link">Share</a>
            <a href="/" class="social-link">
                <img src="<?= $facebookIcon ?>" alt="Facebook logo" class="social-icon">
            </a>
            <a href="/" class="social-link">
                <img src="<?= $twitterIcon ?>" alt="Twitter logo" class="social-icon">
            </a>
            <a href="/" class="social-link">
                <img src="<?= $linkedInIcon ?>" alt="LinkedIn logo" class="social-icon">
            </a>
        </div>
    </div>
