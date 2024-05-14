<?php
/**
 * A Simple Category Template
 */

get_header();

$headerImage = get_template_directory_uri() . '/assets/images/knox-shopping-centre.png';
$pagePrevious = get_template_directory_uri() . '/assets/images/slider-previous.png';
$pageNext = get_template_directory_uri() . '/assets/images/slider-next.png';
$chevron = get_template_directory_uri() . '/assets/images/right-chevron.png';

$tags = get_categories();

global $wp_query;
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

$args = array(
    'post_type' => 'post',
    'post_status' => 'publish',
    'orderby' => 'title',
    'order' => 'ASC',
    'paged' => $paged
);

$newsMedia = new WP_Query($args);
?>

<section class="news-archive">
    <section class="header-default" style="background-image: url('<?= $headerImage ?>')">
        <div class="heading-content">
            <div class="title-wrapper">
                <h1>News and Media</h1>
            </div>
        </div>
    </section>

    <div class="content">
        <h2 class="block-subheading">NEWS & MEDIA</h2>
        <h2 class="block-heading">Get the latest updates</h2>
        <p class="body-text">
            While we’ve had the privilege of working on some truly amazing projects, we also love sharing updates from
            how cities around the world are tackling urban heat and other climate challenges.
        </p>

        <div class="tag-filters-wrapper">
            <div class="tag-link active">all</div>
            <div class="tag-link">Technology</div>
            <div class="tag-link">Announcements</div>
            <div class="tag-link">Media Releases</div>
        </div>

        <div class="news-wrapper row">
            <?php
            if ($newsMedia->have_posts()):
                $count = 0;
                while ($newsMedia->have_posts()):
                    $newsMedia->the_post();
                    $image = get_field('post_image');
                    $title = get_field('post_title');
                    $link = get_permalink();
                    ?>
                    <div class="col-sm-6 col-lg-3">
                        <div class="news-post">
                            <?php if ($image): ?>
                                <div class="post-image-wrapper">
									<?= wp_get_attachment_image( $image['id'], 'medium' ) ?>
								</div>
                            <?php endif; ?>
							<div class="post-content-wrapper">
								<?php if ($title): ?>
									<?php if ($link): ?>
									<a href="<?= $link ?>">
										<p class="news-title p-bold">
											<?= $title ?>
										</p>
									</a>
									<?php endif; ?>
								<?php endif; ?>

								<?php if ($link): ?>
									<a href="<?= $link ?>" class="post-link">
										<p class="link-text">Read more<img src="<?= $chevron ?>" alt="right arrow"></p>
									</a>
								<?php endif; ?>
							</div>
                        </div>
                    </div>
                    <?php
                endwhile;

            else: ?>
                <p>Sorry, no posts matched your criteria.</p>
            <?php endif;
            wp_reset_postdata();
            ?>
        </div>

        <div class="pagination_bar">
            <?php archive_pagination_bar($newsMedia); ?>
            <div class="pagination-prev-next">
                <a href="" class="prev-page">
                    <img src="<?= $pagePrevious ?>" alt="previous page" class="prev">
                </a>
                <a href="" class="next-page">
                    <img src="<?= $pageNext ?>" alt="next page" class="next">
                </a>
            </div>
        </div>
    </div>

</section>

<?php get_sidebar(); ?>


<?php get_footer(); ?>