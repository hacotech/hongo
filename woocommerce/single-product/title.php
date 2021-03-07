<?php
/**
 * Single Product title
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/title.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see        https://docs.woocommerce.com/document/template-structure/
 * @author     WooThemes
 * @package	WooCommerce/Templates
 * @version	4.4.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$hongo_title_alt_font = hongo_option( 'hongo_single_product_page_title_alt_font', '1' );
$title_alt_font_class = $hongo_title_alt_font == '1' ? ' alt-font' : '';

?>
<h1 class="product_title entry-title<?php echo esc_attr( $title_alt_font_class ) ?>">
	<?php echo esc_html( get_the_title() ); ?>
</h1>