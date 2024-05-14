<div class="header-widget">  
    <div class="header-widget__cart">
        <?php
        // Get cart count
        $cart_count = WC()->cart->get_cart_contents_count();
        ?>
        <a href="<?php echo wc_get_cart_url(); ?>" class="header-widget__cart-icon">
            <?php if($cart_count>0): ?>
                <span class="header-widget__cart-icon-count"><?php echo $cart_count; ?></span>
            <?php endif; ?>
            <img src="/wp-content/themes/ebikes/assets/images/cart.svg">
        </a>
    </div>
    <div class="header-widget__search">
        <a href="#" class="header-widget__search-icon">
            <img src="/wp-content/themes/ebikes/assets/images/search.svg">
        </a>
    </div>
</div>