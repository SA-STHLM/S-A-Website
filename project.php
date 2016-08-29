<?php
require('backend/wp/wp-blog-header.php');
require('frontend/shared/header.php');
?>

<section class="block block__content align__center padding__top" style="border-bottom: 1px solid #EBEBEB;">
	<div class="block__wrapper">
	
  	<h2 class="spacing__medium font__light typography__block">
    	<?php echo get_field('title', $id); ?>
    </h2>
    
  </div>
</section>

<section class="block block__content portfolio__block bg__white">

	<div class="grid__four_twelve">
  	<span class="font__small color__pink typography__block spacing__medium_bot">
   		<?php echo get_field('slug', $id); ?>    
    </span>
  	<span class="typography__block font__smallest color__gray" style="color: #999;">
    	<?php echo get_field('description', $id); ?>
    </span>

  </div>
  
  <div class="grid__seven_twelve grid__offset_1">
  
		<?php 
		$i = 0;
		$images = get_field('gallery', $id);
		if( $images ): ?>
    
        <?php foreach( $images as $image ): ?>
        
        <?php if ($i == 0) { ?>
        <div class="grid__six_twelve portfolio__gallery">  
        <?php } else { ?>
        <div class="grid__six_twelve portfolio__gallery"> 
        <?php } ?>
        <img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" style="width: 100%; height: auto;" />
        </div>
  
        <?php $i++; endforeach; ?>
		<?php endif; ?>
    
  </div>
  
	<div class="grid__twelve_twelve">
  	<div class="divider__small divider__dark divider__float"></div>
    
    <div class="grid__six_twelve hide__on_medium grid__padding_left">
    <a href="/work" target="_self">
    	<button class="btn btn__white_solid_pink btn__small_padding"><span class="lnr lnr-arrow-left"></span> Back</button>
    </a>
    </div>
    
    <div class="grid__six_twelve align__right grid__padding_right">
    <a href="<?php echo get_field('url', $id); ?>" target="_blank">
    	<button class="btn btn__white_solid_pink btn__small_padding">View website</button>
    </a>
    </div>
    
    
    <div class="divider__small divider__dark divider__float"></div>
  </div>
</section>


<?php require('frontend/shared/footer.php'); ?>