<?php

/**
 * Provide a admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       https://github.com/jsphpl/affiliatewp-create-woocommerce-coupon
 * @since      1.0.0
 *
 * @package    AffiliateWP_Create_WooCommerce_Coupon
 * @subpackage AffiliateWP_Create_WooCommerce_Coupon/admin/partials
 */
?>

<div class="wrap">
	<h2>AffiliateWP Woocommerce Coupon Settings</h2>

	<p><strong>In order to change the settings for the generated coupons, such as value or type, please edit the <a href="<?php echo get_edit_post_link(get_option('awpwcc_template_id'));  ?>">Template-Coupon</a>.</strong></p>

	<form method="post" action="options.php">
		<?php settings_fields( 'awpwcc-settings-general' ); ?>
		<?php do_settings_sections( 'awpwcc-settings-general' ); ?>
		<table class="form-table">
			<tr valign="top">
				<th scope="row">Auto-Create Coupon</th>
				<td>
					<input name="awpwcc_auto_create" type="checkbox" value="1" <?php checked( '1', get_option( 'awpwcc_auto_create' ) ); ?> />
				</td>
				<td>
					<span>Check if you want to auto-create a coupon code when a new affiliate is created</span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Auto-Delete Coupons</th>
				<td>
					<input name="awpwcc_auto_delete" type="checkbox" value="1" <?php checked( '1', get_option( 'awpwcc_auto_delete' ) ); ?> />
				</td>
				<td>
					<span>Check if you want to delete all coupons when an affiliate is deleted</span>
				</td>
			</tr>
			<tr valign="top">
				<th scope="row">Coupon Code Length</th>
				<td>
					<input name="awpwcc_code_length" type="number" min="3" max="32" steps="1" value="<?php echo get_option( 'awpwcc_code_length' ); ?>" />
				</td>
				<td>
					<span>Of how many random letters/numbers shall the coupon code consist?</span>
				</td>
			</tr>
		</table>
		
		<?php submit_button(); ?>

	</form>
</div>