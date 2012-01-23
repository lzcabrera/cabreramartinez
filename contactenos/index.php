<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/common/includes/recaptchalib.php");
include($_SERVER['DOCUMENT_ROOT']."/common/includes/top.php");

$publickey = "6LcCqcwSAAAAAL7zApL40ZErRQDjgjeKQcXr3PsY";
?>

		
<div class="full-column">
	
	<div class="half-column">
		<p>
		<strong>Condominio Metro 2000 Local C21</strong><br/>
		47 Avenida Norte<br/>
		Entre 1a Calle Pte. y Al. Juan Pablo II</br>	
		San Salvador, El Salvador</p>
		
		
		<p><strong>Telefax:</strong> (503) 2260 - 7836</p>
		
		<div class="separator"></div>
		
		<form method="post" action="verify.php">
		<textfield>
			<label for="contact_name">Nombre</label> 
			<input type="text" name="contact_name" value="<?=(isset($_POST["contact_name"]))?$_POST["contact_name"]:''?>" />
		</textfield>
		<textfield>
			<label for="contact_email">Correo</label> 
			<input type="text" name="contact_email" value="<?=(isset($_POST["contact_email"]))?$_POST["contact_email"]:''?>" />
		</textfield>
		<textfield>
			<label for="message">Mensaje</label> 
			<textarea name="message"><?=(isset($_POST["message"]))?$_POST["message"]:''?></textarea>
		</textfield>
		
		<? echo recaptcha_get_html($publickey); ?>
		
		<input type="submit" value="Enviar" name="submit" class="submit">
		</form>
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