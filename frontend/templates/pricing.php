<section class="block block__content align__center padding__top">
	<div class="block__wrapper">
	
  	<h2 class="spacing__medium font__light typography__block">
    	Fixed pricing plans
    </h2>
    <span class="font__regular color__gray typography__block">
   		Our package prices are made for individuals and businesses alike. We have a package for every wallet. If you'd need a customized package - please contact us. Prices displayed below are in USD.
    </span>
  </div>
  
  <div class="grid justify">
  <div class="" style="padding: 60px 0;">
  <div class="grid__four_twelve">
  <div class="justify__item">
  	<div class="modal__pricing">
  		<h3 class="align__left">Personal</h3>
      <span class="align__left typography__block color__gray">One time payment or monthly billing</span>
      
      <div class="divider__small divider__dark"></div>
      
      <h3 class="align__right typography__block spacing__small_bot font__gradient">
				<?php echo get_field('personal', 187); ?>
      </h3>
      <span class="align__right typography__block color__gray font__extra_small">
      	Monthly billing of <?php echo get_field('personal_monthly', 187); ?><br>
        for 12 months. <br>
      </span>
      
      <div class="divider__small divider__dark"></div>
      <span class="typography__block align__left spacing__small_bot">WordPress as CMS</span>
      <span class="typography__block align__left spacing__small_bot font__disabled">WooCommerce integrated</span>
      <span class="typography__block align__left spacing__small_bot">Subsidized prices in our shop</span>
      <span class="typography__block align__left spacing__small_bot">Up to 10 pages</span>
      <span class="typography__block align__left spacing__small_bot">Blog integration</span>
      <span class="typography__block align__left spacing__small_bot">Responsive design</span>
      <span class="typography__block align__left spacing__small_bot">2 user actions</span>
      <span class="typography__block align__left spacing__small_bot">10-day support period</span>
      <form method="post" action="/quote" name="pricing_plan" id="pricing_plan">
      	<input type="hidden" value="Personal" id="pricing_type" name="pricing_type">
      	<button type="submit" class="btn btn__gradient btn__fullWidth spacing__medium_top btn__align_bot">
        	Work with us
        </button>
      </form>
  	</div>
  </div>
  </div>
  
  <div class="grid__four_twelve">
  <div class="justify__item">
  	<div class="modal__pricing">
  		<h3 class="align__left">Business</h3>
      <span class="align__left typography__block color__gray">One time payment or monthly billing</span>
      
      <div class="divider__small divider__dark"></div>
      
      <h3 class="align__right typography__block spacing__small_bot font__gradient">
				<?php echo get_field('business', 187); ?>
      </h3>
      <span class="align__right typography__block color__gray font__extra_small">
      	Monthly billing of <?php echo get_field('business_monthly', 187); ?><br>
        for 12 months. <br>
      </span>
      
      <div class="divider__small divider__dark"></div>
      <span class="typography__block align__left spacing__small_bot">WordPress as CMS</span>
      <span class="typography__block align__left spacing__small_bot">WooCommerce integrated</span>
      <span class="typography__block align__left spacing__small_bot">Subsidized prices in our shop</span>
      <span class="typography__block align__left spacing__small_bot">Up to 20 pages</span>
      <span class="typography__block align__left spacing__small_bot">Blog integration</span>
      <span class="typography__block align__left spacing__small_bot">Responsive design</span>
      <span class="typography__block align__left spacing__small_bot">5 user actions</span>
      <span class="typography__block align__left spacing__small_bot">30-day priority support period</span>
      <form method="post" action="/quote" name="pricing_plan" id="pricing_plan">
      	<input type="hidden" value="Business" id="pricing_type" name="pricing_type">
      	<button type="submit" class="btn btn__gradient btn__fullWidth spacing__medium_top btn__align_bot">
        	Work with us
        </button>
      </form>
  	</div>
  </div>
  </div>
  
  <div class="grid__four_twelve">
  <div class="justify__item">
  	<div class="modal__pricing">
  		<h3 class="align__left">Enterprise</h3>
      <span class="align__left typography__block color__gray">One time payment or monthly billing</span>
      
      <div class="divider__small divider__dark"></div>
      
      <h3 class="align__right typography__block spacing__small_bot font__gradient">
      	<?php echo get_field('enterprise', 187); ?>
      </h3>
      <span class="align__right typography__block color__gray font__extra_small">
      	Contact us for <br>
        quote request.
      </span>
      
      <div class="divider__small divider__dark"></div>
      <span class="typography__block align__left spacing__small_bot">WordPress as CMS</span>
      <span class="typography__block align__left spacing__small_bot">WooCommerce integrated</span>
      <span class="typography__block align__left spacing__small_bot">Subsidized prices in our shop</span>
      <span class="typography__block align__left spacing__small_bot">Unlimited pages</span>
      <span class="typography__block align__left spacing__small_bot">Blog integration</span>
      <span class="typography__block align__left spacing__small_bot">Responsive design</span>
      <span class="typography__block align__left spacing__small_bot">Custom amount user actions</span>
      <span class="typography__block align__left spacing__small_bot">60-day priority support period</span>
      <form method="post" action="/quote" name="pricing_plan" id="pricing_plan">
      	<input type="hidden" value="Custom" id="pricing_type" name="pricing_type">
      	<button type="submit" class="btn btn__gradient btn__fullWidth spacing__medium_top btn__align_bot">
        	Work with us
        </button>
      </form>
  	</div>
  </div>
  </div>
  </div>
	</div>
</section>
