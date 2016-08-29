<?php
require('backend/wp/wp-blog-header.php');
require('frontend/shared/header.php');
?>

<div class="blog__holder">
<section class="block block__content">
	
  <div class="grid__eight_twelve add__padding">
  
  <div class="blog__block">
  	<div class="blog__block_hero" style="background: url('<?php echo get_field('hero_image', $id); ?>') center center;">
    </div>
    
    <div class="blog__block_content">
    	<h3 class="font__light"><?php echo get_field('title', $id); ?></h3>
      <div class="divider__small divider__dark"></div>
    	<span class="font__small typography__block color__gray">
				<?php echo get_field('content', $id); ?>
      </span>
      
      <div class="divider__small divider__dark"></div>
      
      <span class="font__small typography__block color__gray" style="font-size: 0.9em;">
      	<?php echo get_the_date('F j, Y', $id); ?>
        <?php 
					$auth = get_post($id);
					$authid = $auth->post_author;
					$authorname = get_the_author_meta('display_name',$authid);
				?>
        
        <span class="blog__block_social">
        	<span>SHARE</span>
        	
          <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo 'http://sa-agency.com/blog.php?id='.$id; ?>" target="_blank">
          	<i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          
          <a href="https://plus.google.com/share?url=<?php echo 'http://sa-agency.com/blog.php?id='.$id; ?>" target="_blank">
          	<i class="fa fa-google-plus" aria-hidden="true"></i>
          </a>
          
          <a href="https://twitter.com/intent/tweet?url=<?php echo 'http://sa-agency.com/blog.php?id='.$id; ?>&text=<?php echo get_field('title', $id); ?>&via=sa-agency" target="_blank">
          	<i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </span>
      </span>
      
    </div>
  </div>
  
  
  </div> <!-- Post Content -->
  
  <div class="grid__four_twelve">
  <h4 class="font__light">Latest posts</h4>
  	<?php 
		$args = array( 'posts_per_page' => 3, 'category' => 7);
		$myposts = get_posts( $args );
		
			foreach ( $myposts as $post ) : setup_postdata( $post ); ?>
      <?php $id = get_the_ID(); ?>
      
      <div class="blog__related">
      
      <div class="blog__related_img"><img src="<?php echo get_field('hero_image', $id); ?>"></div>
      <div class="blog__related_text">
				<a href="<?php the_permalink(); ?>"><?php echo get_field('title', $id); ?></a><br>
        <span class="blog__related_date color__gray"><?php echo get_the_date('F j, Y'); ?></span>
      </div>
      
      </div>
    <?php endforeach; 
		wp_reset_postdata();?>

  </div>
  
</section>
</div>

<?php require('frontend/shared/footer.php'); ?>