<section class="block block__content align__center padding__top">
	<div class="block__wrapper">
	
  	<h2 class="spacing__medium font__light typography__block">Our amazing work</h2>
  	<span class="font__small typography__block color__gray spacing__large_bot">Take a look at our showcase with all of our past projects down below. Would you like to work with us? Fill out our <a href="/quote">quote proposal</a> and get a free quote.</span>
  </div>

	<div class="" style="padding: 40px 0;">
	<?php
		$args = array( 'category' => 1 );
		$myposts = get_posts( $args );
		
		foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
    <?php $id = get_the_ID(); ?>
			<a href="/project.php?id=<?php echo $id; ?>">
      <div class="grid__four_twelve">
      	<div class="portfolio__item">
         <img src="<?php echo get_field('thumbnail_image', $id); ?>">
         
         <div class="portfolio__title">
				 	<h4 class="font__normal"><?php echo get_field('title', $id); ?></h4>
         	<span class="color__gray font__small"><?php echo get_field('slug', $id); ?></span>
         </div>
        </div>
      </div>
			</a>
		
    <?php endforeach; 
		wp_reset_postdata();?>
    </div>
  
</section>
