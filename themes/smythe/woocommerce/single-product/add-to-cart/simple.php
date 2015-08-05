<?php
/**
 * Simple product add to cart
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.1.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

if ( ! $product->is_purchasable() ) {
	return;
}

?>

<?php
	// Availability
	$availability      = $product->get_availability();
	$availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';

	echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
?>

<?php if ( $product->is_in_stock() ) : ?>

	<?php do_action( 'woocommerce_before_add_to_cart_form' ); ?>

	<form class="cart c-mystery-page__cart" method="post" enctype='multipart/form-data'>
    <table cellspacing="0" class="group_table">
      <tbody>

        <tr>
          <td>
            <?php
              if ( ! $product->is_sold_individually() ) {
                woocommerce_quantity_input( array(
                  'min_value'   => apply_filters( 'woocommerce_quantity_input_min', 1, $product ),
                  'max_value'   => apply_filters( 'woocommerce_quantity_input_max', $product->backorders_allowed() ? '' : $product->get_stock_quantity(), $product ),
                  'input_value' => ( isset( $_POST['quantity'] ) ? wc_stock_amount( $_POST['quantity'] ) : 1 )
                ) );
              }
            ?>
          </td>

          <td class="price">
            <?php
              echo $product->get_price_html();

              if ( $availability = $product->get_availability() ) {
                $availability_html = empty( $availability['availability'] ) ? '' : '<p class="stock ' . esc_attr( $availability['class'] ) . '">' . esc_html( $availability['availability'] ) . '</p>';
                echo apply_filters( 'woocommerce_stock_html', $availability_html, $availability['availability'], $product );
              }
            ?>
          </td>

          <td class="label">
            <label for="product-<?php echo $product_id; ?>">
              <?php echo $product->is_visible() ? '<a href="' . get_permalink() . '">' . get_the_title() . '</a>' : get_the_title(); ?>
            </label>
          </td>
        </tr>

      </tbody>
    </table>

    <input type="hidden" name="add-to-cart" value="<?php echo esc_attr( $product->id ); ?>" />

    <?php do_action( 'woocommerce_before_add_to_cart_button' ); ?>
    <button type="submit" class="single_add_to_cart_button button c-button--gray"><?php echo $product->single_add_to_cart_text(); ?></button>
    <?php do_action( 'woocommerce_after_add_to_cart_button' ); ?>

	</form>

	<?php do_action( 'woocommerce_after_add_to_cart_form' ); ?>

<?php endif; ?>
