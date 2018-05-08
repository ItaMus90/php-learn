<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */

	echo rand(1, 100);
	echo "<br>";
	$string = "Itamar study PHP";
	echo strlen($string);
	echo "<br>";

	$list = array(12,55,98,65,6,3,78,11,51,65);
	sort($list);

	echo "<br>";
	foreach($list as $item){
		echo $item."<br>";
	}

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>