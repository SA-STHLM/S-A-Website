<?php
require('backend/wp/wp-blog-header.php');
require('frontend/shared/header.php');
?>

<section class="block block__content align__center padding__top invoice">
	<div class="block__wrapper">
  	<div class="invoice">
		<?php $currency = get_field('currency', $id); ?>
    <div class="justify">
    	<div class="invoice__full">
      	<span class="invoice__full_invoice_title">
					<?php  $title = get_field('title', $id); 
						if($title) {
							echo $title;
						} else {
							echo '<h3 class="font__light">No invoice found</h3>';
						}
					?>
        </span>
        
        <?php if($title) { ?>
        <span class="invoice__full_invoice_details">
        	<?php echo get_field('company', $id); ?><br>
          <?php echo get_field('company_url', $id); ?><br>
          Org. num: <?php echo get_field('organization_number', $id); ?><br>
          VAT. num: <?php echo get_field('vat-number', $id); ?><br>
        </span>
      	<span class="invoice__full_invoice_id">
        	<p>Invoice #<?php echo $id; ?></p>
          
          <?php echo implode(', ', get_field('payment_status', $id)); ?>
          	
          <?php if(get_field('payment_status', $id) == "1") { ?>
          	<span>Awaiting payment</span>
          <?php } ?>
          
          <?php if(get_field('payment_status', $id) == "2") { ?>
          	<span class="invoice__payed">Payed</span>
          <?php } ?>
          
          <?php if(get_field('payment_status', $id) == "3") { ?>
          	<span class="invoice__payed">Refunded</span>
          <?php } ?>
          
          <?php if(get_field('payment_status', $id) == "4") { ?>
          	<span class="invoice__late">Late</span>
          <?php } ?>
        </span>
      </div>
      
    	<div class="invoice__box jusitfy__item invoice__box_blue">
    		<span class="font__bold invoice__small_title">
        	Please pay 
        </span>
        <span class="font__bold"><?php echo get_field('amount', $id); ?> <?php echo $currency; ?></span>
    	</div>
      <div class="invoice__box jusitfy__item">
      	<span class="font__bold invoice__small_title">
        	Invoice date
        </span>
        <span class="font__bold"><?php echo get_field('invoice_date', $id); ?></span>
    	</div>
      
      <div class="invoice__box jusitfy__item">
    		<span class="font__bold invoice__small_title">
        	Due date 
        </span>
        <span class="font__bold"><?php echo get_field('due_date', $id); ?></span>
    	</div>
    </div>
    
    <div class="invoice__item invoice__item_description">
    	
      <div class="invoice__item_box">
    		Description
      </div>
      
      <div class="invoice__item_box">
    		Hours
      </div>
      
      <div class="invoice__item_box">
    		Price
      </div>
    
    </div>
		<?php 
			
			$rows = get_field('item', $id); if($rows) { 
				foreach($rows as $row) {
					echo '<div class="invoice__item">';
					echo '<div class="invoice__item_box">'.$row['item_name'].'</div>';
					echo '<div class="invoice__item_box">'.$row['item_hours'].'</div>';
					echo '<div class="invoice__item_box">'.$row['item_price'].' '.$currency.'</div>';
					echo '</div>';
					
					$price = $price + $row['item_price'];
				}
			
			}
			
		?>
    
    <div class="invoice__total">
    	<div class="invoice__total_box_half">
      	<?php $subtotal = $price*0.25 ?>
    		<span>Subtotal</span>
        <p class="font__bold"><?php echo $price-$subtotal; ?> <?php echo $currency; ?></p>
      </div>
      <div class="invoice__total_box_half">
    		<span>Taxes</span>
        <p class="font__bold"><?php echo $price*0.25; ?> <?php echo $currency; ?></p>
      </div>
      
      <div class="invoice__total_box">
    		<span>Total</span>
        <p class="font__bold"><?php echo $price; ?> <?php echo $currency; ?></p>
      </div>
      
      <div class="invoice__total_box">
    		<span>Additional information</span>
        <p style="font-size: 0.9em;"><?php echo get_field('information', $id); ?></p>
      </div>
    </div>
    
    <?php } ?>
    
    </div>
  </div>
</section>


<?php require('frontend/shared/footer.php'); ?>