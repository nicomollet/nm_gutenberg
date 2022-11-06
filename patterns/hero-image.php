<?php
/**
 * Title: Hero with CTA and image
 * Slug: gutenberg/hero-image
 * Categories: custom
 * Block Types: core/image, core/columns
 *
 * @package nm_gutenberg
 * @since 1.0.0
 */
?>
<!-- wp:group {"templateLock":"all","lock":{"move":true,"remove":true},"className":"section-hero alignfull","layout":{"type":"constrained","justifyContent":"center"}} -->
<div class="wp-block-group section-hero alignfull"><!-- wp:columns {"lock":{"move":false,"remove":false}} -->
<div class="wp-block-columns"><!-- wp:column {"verticalAlignment":"center","layout":{"type":"default"}} -->
<div class="wp-block-column is-vertically-aligned-center"><!-- wp:heading {"textAlign":"left","level":1,"className":"has-text-align-center","fontSize":"xxx-large"} -->
<h1 class="has-text-align-left has-text-align-center has-xxx-large-font-size"><strong>Sample title to replace</strong></h1>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"left","fontSize":"large"} -->
<p class="has-text-align-left has-large-font-size">Sample content. Replace the text with your own content.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"left","orientation":"horizontal"}} -->
<div class="wp-block-buttons"><!-- wp:button {"width":50} -->
<div class="wp-block-button has-custom-width wp-block-button__width-50"><a class="wp-block-button__link wp-element-button" href="#">Sample content</a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column -->
<div class="wp-block-column"><!-- wp:image {"align":"center","width":610,"height":472,"sizeSlug":"large","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-large is-resized"><img src="<?php echo esc_url( get_theme_file_uri( 'assets/images/hero-image.png' ) ); ?>" alt="" width="610" height="472"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div>
<!-- /wp:group -->
