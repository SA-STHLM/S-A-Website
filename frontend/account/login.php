<div class="blog__holder">
<section class="block block__content">
	<div class="grid__five_twelve add__padding">
	

<?php do_action( 'woocommerce_before_customer_login_form' ); ?>

<form method="post" class="login">
	<?php do_action( 'woocommerce_login_form_start' ); ?>
  <?php wc_print_notices(); ?>
  <div class="grid__twelve_twelve grid__padding_right store__modal">
  	<h3 class="spacing__medium_bot font__light typography__block">Sign in</h3>
    
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    	<input class="mdl-textfield__input" type="text" name="username" id="username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>">
      <label class="mdl-textfield__label" for="name">Username</label>
    </div>
      
    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    	<input class="mdl-textfield__input" type="password" name="password" id="password" value="">
    	<label class="mdl-textfield__label" for="name">Password</label>
    </div>
      	
    <?php do_action( 'woocommerce_login_form' ); ?>
    <?php wp_nonce_field( 'woocommerce-login', 'woocommerce-login-nonce' ); ?>
					
    <div class="typography__block">
    
    <a href="/lostpassword"><?php _e( 'Lost your password?', 'woocommerce' ); ?></a>
    
    <input type="submit" class="btn btn__white_solid_pink btn__small_padding btn__float_right" name="login" value="<?php esc_attr_e( 'Login', 'woocommerce' ); ?>" />
    </div>
			
	</div>

<?php do_action( 'woocommerce_login_form_end' ); ?>
</form>

<?php do_action( 'woocommerce_after_customer_login_form' ); ?>
</div>

<div class="grid__seven_twelve store__modal">
	<h3 class="font__light">Notice</h3>
  <span class="font__small typography__block color__gray">
  Our shop is currently only available for existing customers.<br><br>
    
    If you are an existing customer but are yet to receive an email instructing you how to access your account, please get <a href="/contact">in touch</a> with us.
  </span>
</div>

</section>
</div>