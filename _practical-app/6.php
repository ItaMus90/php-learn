
<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

		<aside class="col-xs-4">
		
		<?php Navigation();?>
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">
 

	<?php  

/*  Step1: Make a form that submits one value to POST super global


 */

	if(isset($_POST['submit'])){
		$username = $_POST['username'];
		echo $_POST['submit'];
		if(strlen($username) < 3){
			echo "Username has to be longer than 5"; 
		}else{
			echo "Welocme ".$username;
		}
	}
?>

<form action="6.php" method="post">       <!-- Make a practice of declaring file names without numbers - six not 6 -->
   <input type="text" name="username">    <!-- Declared the username input tag that you forgot. -->
   <input type="submit" placeholder="submit" value="SUBMIT" name="submit">
</form>


</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>