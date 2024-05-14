<?php

?>

<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main">

        <header class="page-header">
            <h1 class="page-title"><?php printf(esc_html__('Search Results for: %s', 'your-theme'), '<span>' . get_search_query() . '</span>'); ?></h1>
        </header>

        <?php
        $args = array(
            'post_type' => 'product',
            's' => get_search_query(),
            'meta_query' => array(
                'relation' => 'OR',
                array(
                    'key' => '_sku', // Search within the product SKU meta field
                    'value' => get_search_query(),
                    'compare' => 'LIKE'
                ),
                array(
                    'key' => '_product_name', // Custom meta key for product name or title
                    'value' => get_search_query(),
                    'compare' => 'LIKE'
                )
            )
        );
        $query = new WP_Query($args);
        ?>

        <?php if ($query->have_posts()) : ?>

            <div class="product-list">
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                    <?php wc_get_template_part('content', 'product'); ?>
                <?php endwhile; ?>
            </div>

            <?php the_posts_navigation(); ?>

        <?php else : ?>

            <div class="no-results">
                <p><?php esc_html_e('No products found.', 'your-theme'); ?></p>
            </div>

        <?php endif; ?>

        <?php wp_reset_postdata(); ?>

    </main>
</div>

<?php get_footer(); ?>
