<?php get_header(); ?>
    
    <?php
        $heading = get_the_archive_title();
        $logo = get_field('gpcb_option_logo', 'options');
        $global_banner = get_field('gpcb_option_banner_image', 'options');
        $bg_img  = $global_banner  ? $global_banner  : '' ;
        $insert_classes = "product-icon";
    ?>

    <section class="page-header-default section" style="background-image: url('<?php echo $bg_img['url'] ?>')">
        <div class="page-header-default__background-overlay"></div>
        <div class="page-header-default__content content">
            <?php if ($logo) : ?>
                <div class="page-header-default__icon-wrapper">
                    <img src="<?= $logo['url'] ?>" class="icon <?= $insert_classes ?>" />
                </div>
            <?php endif; ?>
            <?php if ($heading) : ?>
                <div class="page-header-default__heading-wrapper">
                    <h1 class="heading-1"><?= $heading ?></h1>
                </div>
            <?php endif; ?>
        </div>
    </section>
    <div class="content">
    <div class="row owner-stories-list">
        <?php while (have_posts()) : the_post(); ?>
            <div class="col-md-4">
                <div class="card">
                    <?php if (has_post_thumbnail()) : ?>
                        <img class="card-img-top" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                    <div class="card-body">
                        <h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
                        <p class="card-text"><?php the_excerpt(); ?></p>
                        <p class="card-author-date">By <?php the_author(); ?> on <?php the_time('F j, Y'); ?></p>
                    </div>
                </div>
            </div>
        <?php endwhile; ?>
    </div><!-- .owner-stories-list -->
</div>



<?php the_posts_navigation(); ?>

<?php get_footer(); ?>
