<div class="col-lg-4 col-md" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <div class="card border-0 mb-4 shadow rounded post">
    
        <?php
            if (has_post_thumbnail()) {
                the_post_thumbnail(); 
            }
            else {
                echo ' <img class="card-img-top" data-src="holder.js/100px225?theme=thumb&amp;bg=55595c&amp;fg=eceeef&amp;text=Thumbnail" alt="Thumbnail [100%x225]" style="height: 225px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22288%22%20height%3D%22226%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20288%20226%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_1724eb0b28d%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A14pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_1724eb0b28d%22%3E%3Crect%20width%3D%22288%22%20height%3D%22226%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2296.8203125%22%20y%3D%22119.24375%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" data-holder-rendered="true">';
            }
        ?>
        
        <div class="card-body">

            <p class="text-secondary text-uppercase">
                <?php
                    $cat = get_the_category(); 
                    echo $cat[0]->cat_name;
                ?>
            </p>

            <?php
                if ( is_sticky() && is_home() && ! is_paged() ) {
                    printf( '<span class="sticky-post">%s</span>', _x( 'Featured', 'post', 'epignosis' ) );
                }
                if ( is_singular() ) :
                    the_title( '<h5 class="card-title">', '</h5>' );
                else :
                    the_title( sprintf( '<h5 class="card-title font-weight-bold mb-3"><a class="text-dark" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h5>' );
                endif;
            ?>

            <div class="mb-4 text-black-50"><i class="fa fa-clock-o"></i> <?php echo get_the_date() ?></div>
            
            <p class="card-text text-muted">
                <?php the_excerpt(); ?>
            </p>

            <a class="ls-2 text-uppercase font-weight-bold" href="<?php the_permalink() ?>" rel="bookmark">
                Read more <i class="fa fa-long-arrow-right"></i>
            </a>
        </div>
    </div>
</div>