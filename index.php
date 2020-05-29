<?php
/**
 * The main template file
 */
get_header();
?>

<div class="jumbotron text-center page-title">
    <div class="col-md-5 p-lg-5 mx-auto my-5">
        <p class="text-white">Home - Contact</p>
        <h1 class="jumbotron-heading text-white font-weight-bold">How can we help you today</h1>
    </div>
</div>

<!-- body goes here -->
<div class="album py-5">
    <div class="pb-5">
        <div class="container">
            <?php query_posts([
                    'category_name' => 'tips',
                    'numberposts' => 6,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
                    'post_type' => 'post',
                    'post_status' => 'publish'
                ]);
            ?>
            <?php if (have_posts()) { ?>
                <h4 class="mb-5 font-weight-bold">Tips for our blog</h4>
                <div class="row">
                    <?php
                        while (have_posts()) {
                            the_post();
                            get_template_part( 'template-parts/content/content' );
                        }
                    ?>
                </div>
            <?php } else {
                get_template_part( 'template-parts/content/content', 'none' );
            }
            ?>
        </div>
    </div>
</div>

<?php get_template_part( 'template-parts/contact-form' ); ?>

<?php 
get_footer();