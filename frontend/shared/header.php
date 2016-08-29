<?php $id = $_GET['id']; ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>S/A - Interactive web development</title>
  <meta name="description" content="S/A Interactive - Web development agency in Stockholm, Sweden">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="author" content="S/A">
  <link rel="stylesheet" href="/resources/css/styles.common.css">
  <link rel="stylesheet" type="text/css" media="print" href="/resources/css/styles.print.css" />
  <script src="https://use.fontawesome.com/913bcad08a.js"></script>
  <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
  <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)})
		(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
		
		ga('create', 'UA-82623172-1', 'auto');
		ga('send', 'pageview');
	</script>
  <?php wp_head(); ?>
</head>
<?php
	$selected = get_field('navigation_style');
?>
<div class="scroll__up">
	<span class="lnr lnr-chevron-up"></span>
</div>

<header class="<?php if( in_array('Transparent', $selected) ) {echo ' transparent ';}; ?>">
	<div class="header__wrapper">
		<a href="/"><div class="header__brand"></div></a>
  		<div class="main__navigation hide__on_medium">
  			<?php wp_nav_menu(array('menu' => 'main-nav')); ?>
  		</div>
      
      <div class="header__quote">
        <?php if ( is_user_logged_in() ) {
					
							echo '<a href="/dashboard" class="add__margin_btn">
							<button class="header__quote_btn hide__on_medium">Dashboard</button>
							</a>';
					  
							
							} else {
					    
							echo '<a href="/login" class="add__margin_btn">
							<button class="header__quote_btn hide__on_medium">Sign in</button>
							</a>';
							
							}
				?>
      	<a href="/quote"><button class="header__quote_btn hide__on_medium">Work with us</button></a>
        <span class="menu-icon icon"><span></span></span>
      </div>
  </div>
</header>
<div class="js-trigger">
	<div class="js-trigger_container">
  	<?php wp_nav_menu(array('menu' => 'main-nav')); ?>
    <a href="/quote"><button class="header__quote_btn">Work with us</button></a>
  </div>
</div>