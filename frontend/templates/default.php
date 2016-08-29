<section class="block block__hero" style="background: url(<?php echo get_field('background', 16) ?>) center center;">
<div class="block__overlay"></div>

<div class="grid justify">
	
  	<div class="grid__six_twelve">
    <div class="justify__item">
			<h2 class="color__white">
      	<span class="typed">Hello</span><br>
      	<?php echo get_field('title', 16); ?>
    	</h2>
    </div>
		</div>
      
    <div class="grid__six_twelve">
    <div class="justify__item">
    	<div class="modal modal__shadow">
      	<h3>Work with us</h3>
        
        <p class="font__large color__gray spacing__medium">Let's have a chat and create something great together.</p>
        
        <form method="post" action="/quote">
        
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    		    <input class="mdl-textfield__input" type="text" id="name" name="name">
            <label class="mdl-textfield__label" for="name">Name</label>
          </div>
         
          <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    		    <input class="mdl-textfield__input" type="text" id="sample3" name="email" id="email">
            <label class="mdl-textfield__label" for="sample3">E-mail</label>
          </div>
         
          <button class="btn btn__gradient spacing__medium_top" type="submit">Tell us more</button>
        </form>
      </div>
    </div>
    </div>
      
	</div>
  
</section>

<section class="block block__content align__center bg__white">
	<div class="block__wrapper">
  	<img src="/images/nut.jpg" class="small__img">
    <h2 class="spacing__medium font__light typography__block"><?php echo get_field('title_1', 16); ?></h2>
    <span class="font__regular color__gray typography__block"><?php echo get_field('description_1', 16); ?></span>
    <img src="/images/sjolen.png" class="small__img spacing__large_top">
  </div>
</section>

<section class="block block__content block__padding_none">
	<div class="grid__five_twelve grid__equal" style="background: url(/images/bg/covered.jpg) center center; background-size: cover;"></div>
  
  <div class="grid__seven_twelve grid__dark grid__padding_small grid__equal">
  	<h3 class="font__light typography__block spacing__medium_bot"><?php echo get_field('title_2', 16); ?></h3>
    <span class="font__small"><?php echo get_field('description_2', 16); ?></span>
    <button class="btn btn__gradient spacing__medium_top" type="submit">Work with us</button>
  </div>
</section>

<section class="block block__content align__center">
	<div class="block__wrapper">
	
  	<h2 class="spacing__medium font__light typography__block">Our latest blogging</h2>
  	<span class="font__small typography__block color__gray spacing__large_bot">Latest posts from our tech-inspo-design blog. Here you can find everything from every-day boring posts to how augmented reality in combination with VR-glasses will knock us off the chair within a couple of years.</span>
  </div>
  	
  <?php 
		$args = array( 'posts_per_page' => 3, 'category' => 7);
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

<section class="block block__content bg__pink align__center">


		<h4 class="font__light">Feeling like you'd want to hire us? <br>Let's kickstart a project! </h4>

  	<a href="/quote"><button class="btn btn__white_solid spacing__medium_top">Work with us</button></a>
 
</section>