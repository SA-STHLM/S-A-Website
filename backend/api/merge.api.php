<?php
/* *******************************************************
 * *******************************************************
 * S/A merge API merges all JavaScript files and
 * LESS files to a minified version.
 * *******************************************************
 */

@ini_set("output_buffering", "Off");
@ini_set('implicit_flush', 1);
@ini_set('zlib.output_compression', 0);
@ini_set('max_execution_time',1200);
header( 'Content-type: text/html; charset=utf-8' );

echo "<div class='terminal'><pre>";
echo "<span>Console</span>";

if (isset($_POST["mergeless"])) {
echo "<span><div class='spacer'></div></span>";

$cssDirectory = glob('../../../resources/css/styles/*.less');
$minifiedTemp = fopen('../../../resources/css/styles/compiled/frontend.temp.less', 'w');

echo "<span>Preparing LESS files:</span>";

foreach($cssDirectory as $file) {
	$content = file_get_contents($file);
	
	for ($i = 0; $i < 1; $i++) {
		$file = str_replace('../../../resources/css/styles/', '', $file);
		echo "<span>Rewriting: ".$file." => ";
			
		if(usleep(99)!=0) {
			echo "sleep failed script terminating"; 
      break;
		} flush(); ob_flush(); }
		
		$content = str_replace('wspace', ' ', $content);
		
		// Media Query Breakpoints
		$content = str_replace('@add=mq-small', '@media only screen and (max-width: 768px) {', $content);
		$content = str_replace('@add=mq-medium', '@media only screen and (max-width: 992px) {', $content);
		$content = str_replace('@add=mq-large', '@media only screen and (max-width: 1200px) {', $content);
		$content = str_replace('@add=mq-end', '}', $content);			
		
    fwrite($minifiedTemp, $content);
		echo "Adding predefined commands => "."Successful.</span>";
 } 


  // Compile LESS to CSS
	require 'lessc.inc.php';
	$less = new lessc('../../../resources/css/styles/compiled/frontend.temp.less');
	file_put_contents('../../../resources/css/styles/compiled/frontend.compiled.css', $less->parse());
  echo "<span>LESS to CSS prepared</span>";	
	$compiledDir = fopen("../../../resources/css/styles/compiled/frontend.compiled.css");
	
	foreach($compiledDir as $file) {
		$content = file_get_contents($file);
		echo "<span>Compiling LESS to CSS => ";
	  $file = str_replace('../../../resources/css/styles/', '', $file);
		for ($i = 0; $i < 1; $i++) {
			echo "Sucessfull </span>";
			
			if(usleep(99)!=0) {
        echo "sleep failed script terminating"; 
        break;
			}
    	flush();
    	ob_flush();
		}
	}
	
	echo "<span><div class='spacer'></div></span>";
	
	$lessCompiled = file_get_contents('../../../resources/css/styles/compiled/frontend.compiled.css');
	
	$lessCompiled = str_replace('--ignore', '//', $lessCompiled);
	$lessCompiled = preg_replace('#^\s*//.+$#m', '', $lessCompiled);
  $lessCompiled = preg_replace('!/\*.*?\*/!s', '', $lessCompiled);
  $lessCompiled = preg_replace('/\n\s*\n/', '', $lessCompiled);
  $lessCompiled = preg_replace('/\s+/', ' ', $lessCompiled);
	$lessCompiled = str_replace('@importurl', '@import url', $lessCompiled);
	$lessCompiled = str_replace('@mediaonlyscreenand', '@media only screen and', $lessCompiled);
	$lessCompiled = str_replace(': ', ':', $lessCompiled);
	$lessCompiled = str_replace('; ', ';', $lessCompiled);
	$lessCompiled = str_replace(', ', ',', $lessCompiled);
	
	echo "<span>Minifying CSS </span>";
	
	foreach($compiledDir as $file) {
		$content = file_get_contents($file);
	  $file = str_replace('../../../', '', $file);
		for ($i = 0; $i < 1; $i++) {
			echo "<span>Minification => Successful </span>";
			
			if(usleep(99)!=0) {
        echo "sleep failed script terminating"; 
        break;
			}
    	flush();
    	ob_flush();
		}
	}
	
	$lessToCss    = fopen('../../../resources/css/styles.common.css', 'w');
	echo "<span>Created styles.common.css</span>";
	fwrite($lessToCss, $lessCompiled);
	echo "<span>Writing content to styles.common.css</span>";
	
	$DeleteTemp = glob('../../../resources/css/styles/compiled/*');
	// Delete Temp files
	
	foreach($DeleteTemp as $file) {
		$content = file_get_contents($file);
		for ($i = 0; $i < 1; $i++) {
			
			if(usleep(99)!=0) {
        echo "sleep failed script terminating"; 
        break;
			}
    	flush();
    	ob_flush();
		}
		unlink('../../../resources/css/styles/compiled/frontend.temp.less');
		unlink('../../../resources/css/styles/compiled/frontend.compiled.css');
	}
	
	
  // Error output
	$errorCss = glob('../../../resources/css/styles/*.css');
	foreach($errorCss as $file) {
		$file = str_replace('../../../', '', $file);
		echo "<span class='error output__message'>Error => ".$file." => Expected LESS ";
		echo "=> Content was not parsed.</span>";
	}
	
	fclose($lessToCss);
	echo "<span class='success output__message'>Parsing successfull</span>";

echo "</pre></div>";
}


// Merge JS
if (isset($_POST["mergejs"])) {
	echo "<span><div class='spacer'></div></span>";
	
	$minified 				= fopen('../../../resources/js/scripts.common.js', 'w');
  $jsDirectory      = glob('../../../resources/js/scripts/*.js');
	
	echo "<span>Preparing JS files:</span>";
  foreach($jsDirectory as $file) {
    $content = file_get_contents($file);
		
    $content = trim(preg_replace('!/\*.*?\*/!s', ' ', $content));
    $content = trim(preg_replace('/\n\s*\n/', ' ', $content));
    $content = trim(preg_replace('/\s+/', ' ', $content));
		
		$file = str_replace('../../../resources/js/scripts/', '', $file);
		
		echo "<span>Rewriting: ".$file." => Success.</span>";
		
		
		fwrite($minified, $content);
  }
	
	echo "<span><div class='spacer'></div></span>";
	echo "<span>Minified JS files</span>";
	echo "<span><div class='spacer'></div></span>";
	echo "<span>Writing content to scripts.common.js</span>";
 
  fclose($minified);
	echo "<span class='success output__message'>Parsing successfull</span>";
}
?>
