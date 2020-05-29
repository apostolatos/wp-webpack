<?php
/**
 * The main template file
 */
get_header();
?>

<div class="jumbotron text-center page-title">
    <div class="container">
        <p class="text-white">Home - Contact</p>
        <h1 class="jumbotron-heading text-white">Album example</h1>
    </div>
</div>

<!-- body goes here -->
<div class="album py-5">
    <div class="pb-5">
        <div class="container">
            <?php query_posts('cat=2&showposts=6');  ?>
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