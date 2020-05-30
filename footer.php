<?php 
/**
 * Footer
 *
 */
?>
</main>

<footer>
    
    <div class="jumbotron mb-0">
        <div class="container py-4">
            <div class="row">
                <div class="col-md-3">
                    <h6 class="font-weight-bold mb-3 text-uppercase">Company</h6>
                    <p class="d-block mb-3 text-muted">Lorem Ipsum</p>
                    <p>
                        <i class="fa fa-twitter mr-2 text-muted"></i>
                        <i class="fa fa-facebook-square mr-2 text-muted"></i>
                        <i class="fa fa-instagram mr-2 text-muted"></i>
                        <i class="fa fa-pinterest mr-2 text-muted"></i>
                        <i class="fa fa-vimeo-square mr-2 text-muted"></i>
                    </p>
                </div>
                <div class="col-md-2">
                    <?php if ( has_nav_menu( 'about' ) ) : ?>
                    <h6 class="font-weight-bold mb-3 text-uppercase">About</h6>
                    <?php   
                        wp_nav_menu(
                            array(
                                'theme_location' => 'about',
                                'menu_class'     => 'list-unstyled text-small',
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'link_class'     => 'text-muted',
                                'container'      => false,
                            )
                        );
                    ?>
                    <?php endif ?>
                </div>
                <div class="col-md-2">
                    <?php if ( has_nav_menu( 'terms' ) ) : ?>
                    <h6 class="font-weight-bold mb-3 text-uppercase">Terms</h6>
                    <?php   
                        wp_nav_menu(
                            array(
                                'theme_location' => 'terms',
                                'menu_class'     => 'list-unstyled text-small',
                                'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                                'link_class'     => 'text-muted',
                                'container'      => false,
                            )
                        );
                    ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-3">
                    <h6 class="font-weight-bold mb-3 text-uppercase">Find Us</h6>
                    <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="bg-dark py-3">
        <div class="container">
            <span class="text-white font-weight-normal">© Company 2017-2018</span>
        </div>
    </div>
</footer>

<?php
/**
 * Footer
 *
 */
wp_footer(); 
?>



</body>
</html>