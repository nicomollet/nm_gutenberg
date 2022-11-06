<?php
/**
 * Title: 404
 * Slug: gutenberg/404
 * Categories: text
 * inserter: no
 *
 * @package nm_gutenberg
 * @since 1.0.0
 */

?>
<!-- wp:heading {"className":"is-style-gutenberg-text-shadow","textAlign":"center","fontSize":"x-large"} -->
<h2 class="has-text-align-center has-x-large-font-size is-style-gutenberg-text-shadow">
	<?php esc_html_e( 'Page not found', 'gutenberg' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:paragraph --><p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try a search?', 'gutenberg' ); ?></p><!-- /wp:paragraph -->
<!-- wp:search {"label":"Search","showLabel":false,"buttonText":"Search"} /-->
<!-- wp:spacer {"height":"40px"} -->
<div style="height:40px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->
<!-- wp:group {"style":{"border":{"style":"solid","radius":"4px"}},"borderColor":"transparent","backgroundColor":"secondary","layout":{"inherit":true}} -->
<div class="wp-block-group has-border-color has-transparent-border-color has-secondary-background-color has-background" style="border-radius:4px;border-style:solid">
<!-- wp:heading {"textAlign":"left"} -->
<h2 class="has-text-align-left"><?php esc_html_e( 'Latest posts', 'gutenberg' ); ?></h2>
<!-- /wp:heading -->
<!-- wp:latest-posts {"postsToShow":3,"displayAuthor":true,"displayPostDate":true,"displayFeaturedImage":true,"featuredImageAlign":"left"} /-->
</div>
<!-- /wp:group -->
