<?php
/**
 * Displays header site navigation
 *
 */
?>
<nav class="navbar navbar-expand-md navbar-light bg-light py-3" aria-label="<?php esc_attr_e( 'Top Menu', 'epignosis' ); ?>">
    
    <div class="container d-flex justify-content-between">
        <a class="navbar-brand" href="<?php echo home_url(); ?>">
            <img src="<?php echo get_bloginfo('template_url') ?>/assets/img/logo.png" rel="home" />
        </a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <?php if ( has_nav_menu( 'top-menu' ) ) : ?>
            <?php   
                wp_nav_menu(
                    array(
                        'theme_location' => 'top-menu',
                        'menu_class'     => 'navbar-nav ml-auto',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'add_li_class'  => 'nav-item',
                        'container' => false ,
                        'link_class'   => 'nav-link m-2 font-weight-bold'
                    )
                );
			?>
            <?php endif; ?>

            <button class="btn btn-primary my-2 ml-3 my-sm-0 ls-2 text-uppercase" type="button">Register</button>
        </div>
    </div>

</nav>