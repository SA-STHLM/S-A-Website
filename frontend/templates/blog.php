<section class="block block__content align__center padding__top">
	<div class="block__wrapper">
	
  	<h2 class="spacing__medium font__light typography__block">Our life through a post</h2>
  	<span class="font__small typography__block color__gray spacing__large_bot">Read about our company, inspiration, ideas and technology in our tech-inspo-design blog. Feel like you have something to add? Write us a message and be our guest for a day.</span>
  </div>
  	
  <?php 
		$args = array( 'category' => 7);
		$myposts = get_posts( $args );
		
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
      <?php $id = get_the_ID(); ?>
      <div class="grid__four_twelve blog__post">
      <a href="<?php the_permalink(); ?>">
      	<div class="blog__post_container">
					<img src="<?php echo get_field('hero_image', $id); ?>">
        	
          <div class="blog__post_info">
        		
            <h3 class="font__light"><?php echo get_field('title', $id); ?></h3>
            
            <span class="typography__block spacing__medium font__small color__gray">
            	<?php echo get_field('slug', $id); ?>
            </span>
            
            <div class="divider__small divider__dark"></div>
            
            <span class="typography__block font__small color__gray">
            	<?php echo get_the_date('F j, Y'); ?>
             
            </span>
            
          </div>
        </div>
        </a>
      </div>
		<?php endforeach; 
		wp_reset_postdata();?>
  
</section>