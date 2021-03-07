<?php
/**
 * displaying audio for archive page
 *
 * @package Hongo
 */

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) { exit; }

	$hongo_blog_audio = hongo_post_meta( 'hongo_audio' );
	if( $hongo_blog_audio ) {
?>
    <div class="blog-image fit-videos hongo-blog-audio">
        <?php
        	if ( $hongo_blog_audio  ) {
            	echo wp_oembed_get( $hongo_blog_audio );
        	} else {            	
            	echo sprintf(
                    '%s',
                    $hongo_blog_audio
                );
        	}
        ?>
    </div>
<?php
    }