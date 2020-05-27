<?php
/**
 * The main template file
 */
get_header();
?>

<section class="jumbotron text-center page-title">
    <div class="container">
        <p class="text-white">Home - Contact</p>
        <h1 class="jumbotron-heading text-white">Album example</h1>
    </div>
</section>

<!-- body goes here -->
<div class="album py-5">
    <div class="container">
        <h6>Tips for our blog</h6>
        <div class="row">
            <?php
                query_posts('cat=2&showposts=6');
                
                if ( have_posts() ) {

                    // Load posts loop.
                    while ( have_posts() ) {
                        the_post();
                        get_template_part( 'template-parts/content/content' );
                    }

                    // Previous/next page navigation.
                    // twentynineteen_the_posts_navigation();

                } 
                else {

                    // If no content, include the "No posts found" template.
                    get_template_part( 'template-parts/content/content', 'none' );
                }
            ?>
        </div>
    </div>
</div>

<?php 
get_footer();