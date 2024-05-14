<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
/**
 * The template for displaying the footer
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */
?>

<?php include ebikes_theme_path('/partials/footer_main.php'); ?>
<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
</script>



<!-- Bootstrap Modal -->
<div class="modal fade no-slide search-modal" id="search-modal" tabindex="-1" role="dialog" aria-labelledby="searchModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg search-modal__dialog" role="document">
        <div class="modal-content search-modal__content">
            <div class="search-modal__form-wrapper">
                 <button type="button" class="close search-modal__btn-close btn-close-search" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <form role="search" method="get" id="searchform" action="<?php echo esc_url(home_url('/')); ?>">
                    <input class="search-modal__input" type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" placeholder="Search"/>
                    <input type="hidden" name="post_type" value="product" />
                </form>
            </div>
        </div>
    </div>
</div>

</body>

</html>