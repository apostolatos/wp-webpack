<?php
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @package WordPress
 */

?>
<div class="col-md-6">
	<h1 class="mt-5"><?php _e( 'Nothing Found', 'epignosis' ); ?></h1>
	<?php
		if ( is_home() && current_user_can( 'publish_posts' ) ) :

			printf(
				'<p>' . wp_kses(
					/* translators: 1: Link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'epignosis' ),
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
				esc_url( admin_url( 'post-new.php' ) )
			);

		elseif ( is_search() ) :
			?>

			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'epignosis' ); ?></p>
			<?php
			get_search_form();

		else :
			?>

			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'epignosis' ); ?></p>
			<?php
			get_search_form();

		endif;
		?>
</div>