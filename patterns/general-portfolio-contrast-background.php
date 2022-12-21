<?php
/**
 * Title: Portfolio with images, text.
 * Slug: mackman/general-portfolio-contrast-background
 * Categories: portfolio
 * Viewport Width: 1280
 */
?>
<!-- wp:group {"align":"full","style":{"elements":{"link":{"color":{"text":"var:preset|color|base"}}},"spacing":{"margin":{"top":"0px"},"padding":{"top":"var:preset|spacing|x-large","right":"30px","bottom":"var:preset|spacing|x-large","left":"30px"}}},"backgroundColor":"contrast","textColor":"base","className":"has-background-color","layout":{"inherit":true,"type":"constrained"}} -->
  <div class="wp-block-group alignfull has-background-color has-base-color has-contrast-background-color has-text-color has-background has-link-color" style="margin-top:0px;padding-top:var(--wp--preset--spacing--x-large);padding-right:30px;padding-bottom:var(--wp--preset--spacing--x-large);padding-left:30px">
    
    <!-- wp:columns {"verticalAlignment":"center","align":"wide"} -->
      <div class="wp-block-columns alignwide are-vertically-aligned-center">
        
        <!-- wp:column {"verticalAlignment":"center","width":""} -->
          <div class="wp-block-column is-vertically-aligned-center">
            
            <!-- wp:heading {"fontSize":"x-large"} -->
              <h2 class="has-x-large-font-size" id="sample-heading"><?php echo esc_html__( 'Sample Heading', 'mackman' ); ?></h2>
            <!-- /wp:heading -->
            
            <!-- wp:paragraph -->
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing dignissim. Quisque vitae mauris pellentesque arcu fermentum, vestibulum malesuada elit condimentum. Vivamus et enim diam velit.</p>
            <!-- /wp:paragraph -->
            
            <!-- wp:paragraph -->
              <p><a href="#"><?php echo esc_html__( 'View Project', 'mackman' ); ?> →</a></p>
            <!-- /wp:paragraph -->
              
          </div>
        <!-- /wp:column -->
        
        <!-- wp:column {"verticalAlignment":"center","width":""} -->
          <div class="wp-block-column is-vertically-aligned-center">
            
            <!-- wp:gallery {"columns":2,"linkTo":"none"} -->
              <figure class="wp-block-gallery has-nested-images columns-2 is-cropped">
                
                <!-- wp:image {"id":3492,"sizeSlug":"full","linkDestination":"none"} -->
                  <figure class="wp-block-image size-full">
                    <img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/holding.jpg'; ?>" alt="Sample Image" class=""/>
                  </figure>
                <!-- /wp:image -->
                
                <!-- wp:image {"id":3493,"sizeSlug":"full","linkDestination":"none"} -->
                  <figure class="wp-block-image size-full">
                    <img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/holding.jpg'; ?>" alt="Sample Image" class=""/>
                  </figure>
                <!-- /wp:image -->
                
                <!-- wp:image {"id":3494,"sizeSlug":"full","linkDestination":"none"} -->
                  <figure class="wp-block-image size-full">
                    <img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/holding.jpg'; ?>" alt="Sample Image" class=""/>
                  </figure>
                <!-- /wp:image -->
                
                <!-- wp:image {"id":3495,"sizeSlug":"full","linkDestination":"none"} -->
                  <figure class="wp-block-image size-full">
                    <img src="<?php echo esc_url( get_theme_file_uri() ) . '/assets/images/holding.jpg'; ?>" alt="Sample Image" class=""/>
                  </figure>
                <!-- /wp:image -->
                  
              </figure>
            <!-- /wp:gallery -->
              
          </div>
        <!-- /wp:column -->
          
      </div>
    <!-- /wp:columns -->
      
  </div>
<!-- /wp:group -->