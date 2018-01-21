<?php

add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

function my_theme_enqueue_styles() {
    wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
}

function storefront_credit() {
    ?>
    <div class="site-info">
        <?php echo esc_html( apply_filters( 'storefront_copyright_text', $content = '&copy; ' . get_bloginfo( 'name' ) . ' 2005 - ' . date( 'Y' ) ) ); ?>
        <?php if ( apply_filters( 'storefront_credit_link', true ) ) { ?>
        <?php } ?>
    </div><!-- .site-info -->
    <?php
}

function storefront_homepage_content() {
    while ( have_posts() ) {
        the_post();

//        get_template_part( 'content', 'homepage' );

    } // end of the loop.
}

?>
