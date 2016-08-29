<footer class="block block__content grid__dark">
	
  <div class="grid__four_twelve add__margin">
  	<h5 class="typography__block font__light">About us</h5>
    <span class="typography__block spacing__medium_top font__smallest">
    	We are a full service development agency which means we've got you covered on design, content and every digital aspect. We create powerful WordPress themes and e-commerce solutions.
    </span>
  </div>
  
  <div class="grid__four_twelve add__margin">
  	<h5 class="typography__block font__light">Latest posts</h5>
    <span class="typography__block spacing__medium_top font__smallest">
    <?php
		$n = 0;
		$args = array( 'numberposts' => '5', 'category' => 7 );
		$recent_posts = wp_get_recent_posts( $args );
		
		foreach( $recent_posts as $recent ) {
			echo '<a href="'.get_permalink($recent["ID"]).'">
			<span class="font__smallest">'.get_field('title', $recent["ID"]).'</span></a><br>';
			echo '</a>';
		}
	?>  
    </span>
  </div>
  
  <div class="grid__four_twelve">
  	<h5 class="typography__block font__light spacing__medium_bot">Quick links</h5>
  	
    <div class="grid__six_twelve grid__padding_none">
    	<a href="/support"><span class="font__smallest">Support</span></a><br>
    	<a href="/aboutus"><span class="font__smallest">Who we are</span></a><br>
    	<a href="/contact"><span class="font__smallest">Get in touch</span></a><br>
  	</div>
    
    <div class="grid__six_twelve grid__padding_none">
    	<a href="/login"><span class="font__smallest">Sign in</span></a><br>
    	<a href="/store"><span class="font__smallest">Shop in store</span></a><br>
    	<a href="/quote"><span class="font__smallest">Work with us</span></a><br>
  	</div>
    
  </div>
  
  
  <div class="grid__twelve_twelve">
  	<div class="divider__small"></div>
    
    <div class="grid__six_twelve grid__padding_none ">
    	<a href="/"><div class="footer__brand"></div></a>
    	<ul class="hide__on_medium"><?php wp_nav_menu(array('menu' => 'main-nav')); ?></ul>
    </div>
    
    <div class="grid__six_twelve align__right grid__padding_none">
    	<span class="footer__copyright hide__on_medium">
      &copy; S/A Agency 2016 - All rights reserved<br>
      S/A is a VAT-registered company.
      </span>
    </div>
  </div>
  
</footer>

<?php wp_footer(); ?>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVA-_VpdpuR2668OKus9Jrm7DfkSCwhCQ&callback=initMap"></script>
<script src="/resources/js/libraries/import.js"></script>
<script src="/resources/js/libraries/assets.js"></script>
<script src="/resources/js/scripts.common.js"></script>
</body>
</html>