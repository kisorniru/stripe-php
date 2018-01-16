<!DOCTYPE html>
<html>
	<head>
		
		<title>stripe-php</title>
	
	</head>

	<body>

		<form action="process.php" method="POST">
		
		<?php

		if(isset($_GET['success_msg']))
			echo $_GET['success_msg']."<br>";

		?>

		  <input type="number" name="send_ammount">
		  <?php

			if(isset($_GET['error_msg']))
				echo "<span style='color:red;'>*".$_GET['error_msg']."</span>";

			?>
		  <br>
		  <script
		    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
		    data-key="pk_test_SQlIgMhXTpgPdB2sGLQeMArW"
		    data-amount="10000"
		    data-name="Demo Site"
		    data-description="Widget"
		    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
		    data-locale="auto">
		  </script>


		</form>

	</body>
</html>