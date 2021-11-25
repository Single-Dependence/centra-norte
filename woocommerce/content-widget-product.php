<?php
/**
 * The template for displaying product widget entries
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-widget-product.php.
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.5.5
 * 
 * @cmsmasters_package 	Mall
 * @cmsmasters_version 	1.1.7
 */


if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( ! is_a( $product, 'WC_Product' ) ) {
	return;
}
?>
<li>
	<?php do_action( 'woocommerce_widget_product_item_start', $args ); ?>

	<a href="<?php echo esc_url( $product->get_permalink() ); ?>">
		<?php echo  cmsmasters_return_content($product->get_image());  // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
		<span class="product-title"><?php echo  wp_kses_post( $product->get_name() ); ?></span>
	</a>

	<?php if ( ! empty( $show_rating ) ) : ?>
		<?php cmsmasters_woocommerce_rating('cmsmasters_theme_icon_star_empty', 'cmsmasters_theme_icon_star_full'); ?>
	<?php endif; ?>
	
	<?php echo  cmsmasters_return_content($product->get_price_html());  // PHPCS:Ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>

	<?php do_action( 'woocommerce_widget_product_item_end', $args ); ?>
</li>