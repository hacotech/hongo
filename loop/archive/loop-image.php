<?php
/**
 * displaying featured image for archive page
 *
 * @package Hongo
 */

	// Exit if accessed directly.
	if ( ! defined( 'ABSPATH' ) ) { exit; }

	$hongo_srcset_archive 	= get_theme_mod( 'hongo_image_srcset_archive', 'full' );
	/* Image Alt, Title, Caption */
	$hongo_img_alt 			= hongo_option_image_alt( get_post_thumbnail_id() );
	$hongo_img_title 		= hongo_option_image_title( get_post_thumbnail_id() );
	$hongo_image_alt 		= ( isset( $hongo_img_alt['alt'] ) && ! empty( $hongo_img_alt['alt'] ) ) ? $hongo_img_alt['alt'] : '' ; 
	$hongo_image_title 		= ( isset( $hongo_img_title['title'] ) && ! empty( $hongo_img_title['title'] ) ) ? $hongo_img_title['title'] : '';

	$hongo_img_attr = array(
    	'title' => $hongo_image_title,
    	'alt' 	=> $hongo_image_alt,
	);
	
	$page_url = get_permalink();

	if ( has_post_thumbnail() ) {
?>
		<div class="blog-image">
			<a href="<?php echo esc_url( $page_url ); ?>">
				<?php echo get_the_post_thumbnail( get_the_ID(), $hongo_srcset_archive, $hongo_img_attr ); ?>
			</a>
		</div>
<?php
	}