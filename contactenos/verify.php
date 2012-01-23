<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/common/includes/recaptchalib.php");
include($_SERVER['DOCUMENT_ROOT']."/common/includes/top.php");

$privatekey = "6LcCqcwSAAAAAPR6GpYQt8DAhER1Ns2UQ6Y-vjrf";
?>


		<div class="full-column">

			<div class="half-column">
				<p>

<?php
  
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("La clave de reCAPTCHA esta incorrecta. Por favor intente de nuevo.<br/><br/>" .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
    // Your code here to handle a successful verification
	
	
	
	if(isset($_POST["contact_name"]) && isset($_POST["contact_email"]) && isset($_POST["comentario"]) ){

	  		//$mailTo = "mario@cabreramartinez.com";
	$mailTo = "lzcabrera@gmail.com";
			
			$mailFrom = $_POST["contact_email"];
			$nameFrom = $_POST["contact_name"];
			$subject = "[cabreramartinez.com] Mensaje enviado desde el website";
			$message = $_POST["message"];
			
			$header = 'From: '. $nameFrom . '<' . $mailFrom . '>' . "\r\n";
			$header .= 'X-Mailer: PHP/' . phpversion();

	  		if(mail($mailTo,$subject,$message,$header)){
	  			echo "<h2>Gracias por contactarnos!</h2><p>Su mensaje ha sido enviado.</p>";
			}else{
				echo "<p>Su mensaje no fue enviado debido a fallas técnicas. Por favor trate de nuevo.</p>";
			}
	  }
	
	
	
	
	
  }
  ?>

</p>
	</div>
	
	<div class="half-column">
		<div id="map_canvas"></div>
	</div>
	<div class="clear"></div>
	
</div>
	<script type="text/javascript">		
		var map_canvas = document.getElementById("map_canvas");
    </script>

<? include($_SERVER['DOCUMENT_ROOT']."/common/includes/bottom.php"); ?>