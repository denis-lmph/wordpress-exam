<header class="header-search-page">
    <div class="header-search-page__content content">
        <h1 class="header-search-page__title">
            <?php printf(
                esc_html__('Search Results for "%s"',  'your-theme-textdomain' ),
                '<span>' . get_search_query() . '</span>'
            ); ?>
        </h1>
    </div>
</header>
