<?php
$errName = "";
$errEmail = "";
$errMessage = "";
$messageStatus = "";

if(isset($_POST['contact_btn'])) {
	if (!$_POST['name']) {
		$errName = "is-invalid";
	} 
	
	if(!$_POST['email']) {
		$errEmail = "is-invalid";
	} 
	
	if (!$_POST['details']) {
		$errMessage = "is-invalid";
	} 
	
	if(isset($_POST['name']) and ($_POST['email']) and ($_POST['details'])) {
		
		$name = $_POST['name'];
		$email = $_POST['email'];
		$company = $_POST['company'];
		$company_url = $_POST['company_url'];
		$details = $_POST['details'];
		
		$formcontent="From: $name \n Company: $company \n Company URL: $company_url \n Message: $details";
		$subject = "Message";
		$recipient = "hello@sa-agency.com";
		$mailheader = "From: $email \r\n";
		
		mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
		$messageStatus = '<span class="success__message">Message sent successfully.</span>';

	}
}

?>
<div class="blog__holder">

<section class="block block__content">
	<div class="grid__six_twelve add__padding">
  	<h2 class="spacing__medium font__light typography__block">Get in touch</h2>
  	<span class="font__small typography__block color__gray spacing__large_bot">Feel free to ask any questions you have. If you'd like to talk about a project, please visit <a href="/quote" class="regular__link">our quote form</a>.</span>
   <?php echo $messageStatus; ?>


  		<form method="post" action="/contact">

        <div class="grid__six_twelve grid__padding_right">
        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label <?php echo $errName; ?>">
    		   <input class="mdl-textfield__input" type="text" id="name" name="name" value="<?php echo $name_form; ?>">
           <label class="mdl-textfield__label" for="name">Name *</label>
         </div>
        </div>
        
        <div class="grid__six_twelve grid__padding_left">
        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label <?php echo $errEmail; ?>">
    		   <input class="mdl-textfield__input" type="text" id="email" name="email" value="<?php echo $email_form; ?>">
           <label class="mdl-textfield__label" for="email">E-mail *</label>
         </div>
        </div>
        
         <div class="grid__six_twelve grid__padding_right">
        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    		   <input class="mdl-textfield__input" type="text" id="company" name="company">
           <label class="mdl-textfield__label" for="name">Company name</label>
         </div>
         </div>
         
         <div class="grid__six_twelve grid__padding_left">
        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    		   <input class="mdl-textfield__input" type="text" id="company_url" name="company_url" value="http://">
           <label class="mdl-textfield__label" for="name">Website URL</label>
         </div>
         </div>
         
         <div class="grid__twelve_twelv grid__padding_right_small">
        	<div class="mdl-textfield mdl-js-textfield <?php echo $errMessage; ?>">
    			  <textarea class="mdl-textfield__input autoExpand" type="text" rows= "3" name="details" id="details" ></textarea>
    				<label class="mdl-textfield__label" for="details">Message *</label>
  			 </div>
         </div>
        
        <div class="grid__twelve_twelve spacing__medium_top grid__padding_none">
         <button class="btn btn__gradient add__padding" type="submit" id="contact_btn" name="contact_btn">Send message</button>
        </div>
       
    	</form>
	</div>
  
  <div class="grid__six_twelve">
  	<div id="map" class="block__map"></div>
    
    <h4 class="typography__block font__light">Stockholm Office</h4>
    
    <span class="typography__block spacing__small_top">
    	<span class="lnr lnr-phone-handset color__pink"></span> 
      <span class="color__gray">070 33 04 228</span>
    </span>
    
    <span class="typography__block spacing__small_top">
    	<span class="lnr lnr-envelope color__pink"></span> 
      <span class="color__gray">hello@sa-agency.com</span>
    </span>
    
    <span class="typography__block spacing__small_top">
    	<span class="lnr lnr-map-marker color__pink"></span> 
      <span class="color__gray">Sveavägen 110, Stockholm - Sweden</span>
    </span>
   
    
  </div>
</section>

</div>

<script>
function initMap() {
	var myLatLng = {lat: 59.343527, lng: 18.056345};
	var map = new google.maps.Map(document.getElementById('map'), {
 		zoom: 15,
 		center: myLatLng
	});

	var marker = new google.maps.Marker({
		position: myLatLng,
		map: map
	});
}
</script>
