<div class="blog__holder">
<section class="block block__content">

<div class="grid__six_twelve grid__offset_3">
	
	<?php wc_print_notices(); ?>
	<div class="grid__twelve_twelve grid__padding_right store__modal">
		<form method="post" class="woocommerce-ResetPassword lost_reset_password">
    	<h3 class="font__light typography__block">Lost password</h3>
      <span class="font__small color__gray typography__block spacing__medium_bot">
       Please enter your username or email address. You will receive a link to create a new password via email.
      </span>
      
      <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    	<input class="mdl-textfield__input" type="text" name="user_login" id="user_login" value="">
      <label class="mdl-textfield__label" for="name">Username or email</label>
    	</div>
    
    	<?php do_action( 'woocommerce_lostpassword_form' ); ?>
    	<input type="hidden" name="wc_reset_password" value="true" />
			<input type="submit" class="btn btn__white_solid_pink btn__small_padding btn__float_right" value="Reset password" />
	</p>

		<?php wp_nonce_field( 'lost_password' ); ?>
  	</form>
  </div>

</div>

</section>
</div>