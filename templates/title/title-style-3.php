<?php
/**
 * Title section
 *
 * This template can be overridden by copying it to yourchildtheme/templates/title/title-style-3.php
 */

// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) { exit; }

/* Center alignment */
echo '<section class="hongo-main-title-wrap bg-dark-gray cover-background' . esc_attr( $hongo_title_class.'-wrap ' ) . esc_attr( $hongo_title_style ) . esc_attr( $hongo_space_class ) . esc_attr( $hongo_title_parallax ) .'"'. $hongo_title_parallax_effect . $hongo_title_bg_image . '>'; // @codingStandardsIgnoreLine
	if( ! empty( $hongo_title_bg_image ) ) {
		echo wp_kses_post( $hongo_title_bg_image_overlay, '' );
	}
	if( $hongo_title != '' || ( $hongo_enable_subtitle != '0' && $hongo_title_subtitle ) || ( $hongo_enable_breadcrumb == 1 && $hongo_breadcrumb_position == 'title-area' ) || $hongo_enable_title_heading == '1' ) {
	?>
		<div class="<?php echo esc_attr( $container_style ); ?>">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12 display-table page-title-medium extra-small-screen">
					<div class="display-table-cell vertical-align-middle text-center">
						<?php if( $hongo_title && $hongo_enable_title_heading == '1' ) { ?>
							<h1 class="alt-font hongo-main-title text-white<?php echo esc_attr( $hongo_title_text_transform ) . esc_attr( $hongo_title_class ); ?>"><?php echo sprintf( '%s', $hongo_title ); ?></h1>
						<?php } ?>
						<?php if( $hongo_enable_subtitle != '0' && $hongo_title_subtitle ) { ?>
							<span class="display-block alt-font hongo-main-subtitle<?php echo esc_attr( $hongo_subtitle_class ) . esc_attr( $hongo_subtitle_text_transform ); ?>"><?php echo sprintf( '%s', $hongo_title_subtitle ); ?></span>
						<?php } ?>
						<?php if( $hongo_enable_breadcrumb == 1 && $hongo_breadcrumb_position == 'title-area' ) { ?>
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 display-table no-padding-lr">
								<div class="display-table-cell vertical-align-middle breadcrumb alt-font">
									<ul class="hongo-main-title-breadcrumb<?php echo esc_attr( $hongo_title_class ); ?>-breadcrumb"<?php echo sprintf( '%s', $hongo_breadcumbre_attribute ); ?>>
										<?php echo hongo_breadcrumb_display(); ?>
									</ul>
								</div>
							</div>
						<?php } ?>
						<?php if( ! empty( $hongo_single_post_meta_output ) && $hongo_breadcrumb_position == 'after-title-area' ) { ?>
							<div class="hongo-single-post-meta vertical-align-middle alt-font display-block">
								<?php echo sprintf( '%s', $hongo_single_post_meta_output ); ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>
</section>
<?php if( $hongo_enable_breadcrumb == 1 && $hongo_breadcrumb_position == 'after-title-area') { ?>
	<section class="hongo-main-breadcrumb<?php echo esc_attr( $hongo_breadcrumb_class ); ?>">
		<div class="<?php echo esc_attr( $container_style ); ?>">
			<div class="row">
				<div class="col-md-12 display-table">
					<div class="display-table-cell vertical-align-middle<?php echo esc_attr( $breadcrumb_class ); ?>">
						<div class="breadcrumb alt-font">
							<ul class="hongo-main-title-breadcrumb<?php echo esc_attr( $hongo_title_class ); ?>-breadcrumb"<?php echo sprintf( '%s', $hongo_breadcumbre_attribute ); ?>>
								<?php echo hongo_breadcrumb_display(); ?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php } ?>
<?php if( ! empty( $hongo_single_post_meta_output ) && $hongo_breadcrumb_position == 'title-area' ) { ?>
	<section class="single-post-meta-wrap">
		<div class="<?php echo esc_attr( $container_style ); ?>">
			<div class="row">
				<div class="col-md-12 display-table">
					<div class="hongo-single-post-meta vertical-align-middle alt-font display-block">
						<?php echo sprintf( '%s', $hongo_single_post_meta_output ); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php }