<?php  

if(!empty($_POST['name'])) {
	$name = $_POST['name'];
	$name = ucfirst($name);
	
	$name_form = $name;
  $name = ", ".$name.".";
} else {
	$name = "";
	$name_form = "";
}

if(!empty($_POST['email'])) {
	$email_form = $_POST['email'];
} else {
	$email_form = "";
}

if(isset($_POST['pricing_type'])) {
	$pricing_type = $_POST['pricing_type'];
	$message = "Hello, I was looking at your pricing plan '". $pricing_type ."', ";
} else {
	$message = "";
}

$errName = "";
$errEmail = "";
$errMessage = "";
$messageStatus = "";

if(isset($_POST['quote_btn'])) {
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
		$name = "";

	}
}

?>
<section class="block block__content align__center padding__top">
	<div class="block__wrapper">
	
  	<h2 class="spacing__medium font__light typography__block">Nice to meet you<?php echo $name; ?></h2>
  	<span class="font__small typography__block color__gray spacing__large_bot">Tell us about your project. Keep it as long or as short as you'd like - we'll get back to you within 24 hours during weekdays.</span>
    <?php echo $messageStatus; ?>
  </div>

	<div class="" style="padding: 40px 0;">
  <div class="block__wrapper align__left">
  		<form method="post" action="/quote">
        <div class="grid__six_twelve">
        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label <?php echo $errName; ?>">
    		   <input class="mdl-textfield__input" type="text" id="name" name="name" value="<?php echo $name_form; ?>">
           <label class="mdl-textfield__label" for="name">Name</label>
         </div>
        </div>
        
        <div class="grid__six_twelve">
        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label <?php echo $errEmail; ?>">
    		   <input class="mdl-textfield__input" type="text" id="email" name="email" value="<?php echo $email_form; ?>">
           <label class="mdl-textfield__label" for="email">E-mail</label>
         </div>
        </div>
        
         <div class="grid__six_twelve">
        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    		   <input class="mdl-textfield__input" type="text" id="company" name="company">
           <label class="mdl-textfield__label" for="name">Company name</label>
         </div>
         </div>
         
         <div class="grid__six_twelve">
        	<div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
    		   <input class="mdl-textfield__input" type="text" id="company_url" name="company_url" value="http://">
           <label class="mdl-textfield__label" for="name">Website URL</label>
         </div>
         </div>
         
         <div class="grid__twelve_twelve">
        	<div class="mdl-textfield mdl-js-textfield <?php echo $errMessage ?>">
    			  <textarea class="mdl-textfield__input autoExpand" type="text" rows= "3" name="details" id="details" ><?php echo $message; ?></textarea>
    				<label class="mdl-textfield__label" for="details">Project details</label>
  			 </div>
         </div>
        
        <div class="grid__twelve_twelve spacing__medium_top">
         <button class="btn btn__gradient" id="quote_btn" name="quote_btn" type="submit">Send proposal</button>
        </div>
        
    	</form>
    </div>
    </div>
</section>
