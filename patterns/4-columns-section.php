<?php
/**
 * Title: 4 Columns Section
 * Slug: gutenberg/4-columns-section
 * Categories: custom
 * Block Types: core/image, core/columns
 *
 * @package nm_gutenberg
 * @since 1.0.0
 */
?>
<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"className":"alignfull section-4-columns has-background-light-background-color","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group alignfull section-4-columns has-background-light-background-color"><!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:heading {"textAlign":"center","fontSize":"xx-large"} -->
<h2 class="has-text-align-center has-xx-large-font-size">Section title</h2>
<!-- /wp:heading -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer -->

<!-- wp:columns -->
<div class="wp-block-columns"><!-- wp:column {"backgroundColor":"background-dark","textColor":"background-lighter","layout":{"type":"default"}} -->
<div class="wp-block-column has-background-lighter-color has-background-dark-background-color has-text-color has-background"><!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="has-x-large-font-size">Column title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Sample content. Replace the text with your own content.</p>
<!-- /wp:paragraph -->

<!-- wp:image {"id":107,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icon-arrow.svg' ) ); ?>" alt="" class="wp-image-107"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column -->

<!-- wp:column {"backgroundColor":"background-light"} -->
<div class="wp-block-column has-background-light-background-color has-background"><!-- wp:image {"id":108,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icon-user.svg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="has-x-large-font-size">Column title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Sample content. Replace the text with your own content.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"backgroundColor":"background-light"} -->
<div class="wp-block-column has-background-light-background-color has-background"><!-- wp:image {"id":109,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icon-traffic.svg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="has-x-large-font-size">Column title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Sample content. Replace the text with your own content.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column -->

<!-- wp:column {"backgroundColor":"background-light"} -->
<div class="wp-block-column has-background-light-background-color has-background"><!-- wp:image {"id":106,"sizeSlug":"large","linkDestination":"none","className":"is-style-default"} -->
<figure class="wp-block-image size-large is-style-default"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/icon-conversions.svg' ) ); ?>" alt="" /></figure>
<!-- /wp:image -->

<!-- wp:heading {"level":3,"fontSize":"x-large"} -->
<h3 class="has-x-large-font-size">Column title</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left"} -->
<p class="has-text-align-left">Sample content. Replace the text with your own content.</p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:spacer {"height":"30px"} -->
<div style="height:30px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group -->
