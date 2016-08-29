<?php
/**
 * My Account Dashboard
 *
 * Shows the first intro screen on the account dashboard.
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/myaccount/my-account-dashboard.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see         https://docs.woocommerce.com/document/template-structure/
 * @author      WooThemes
 * @package     WooCommerce/Templates
 * @version     2.6.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}
?>

<?php if ( is_user_logged_in() ) { ?>
<section class="block block__content padding__top">
  
  <div class="grid__eight_twelve store__modal">
  
  <div class="typography__block">
  
  <h3 class="font__thin">
  	Hello 
		<?php global $current_user;
      get_currentuserinfo(); 
			echo $current_user->user_firstname;
		?> 
  </h3>
  
  </div>
  
 	<div class="divider__small divider__dark"></div>
 </div>


</section>
<?php
	/**
	 * My Account dashboard.
	 *
	 * @since 2.6.0
	 */
	do_action( 'woocommerce_account_dashboard' );

	/**
	 * Deprecated woocommerce_before_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_before_my_account' );

	/**
	 * Deprecated woocommerce_after_my_account action.
	 *
	 * @deprecated 2.6.0
	 */
	do_action( 'woocommerce_after_my_account' );
?>
<?php } else { ?>
<script>window.location.href = "/login";</script>
<section class="block block__content align__center padding__top">
	<div class="block__wrapper">
  	<h2 class="spacing__medium font__light typography__block">Please sign in</h2>
  	<span class="font__small typography__block color__gray spacing__large_bot">Only logged in users can access this page, please <a href="/login">sign in</a> to proceed.</span>
  </div>
</section>
<?php } ?>