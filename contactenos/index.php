<?php 
require_once($_SERVER['DOCUMENT_ROOT']."/common/includes/recaptchalib.php");
include($_SERVER['DOCUMENT_ROOT']."/common/includes/top.php");

$publickey = "";

switch ($_SERVER['SERVER_NAME']) {
    case "cabreramartinez.dev":
        $publickey = "6LcCqcwSAAAAAL7zApL40ZErRQDjgjeKQcXr3PsY";
        break;
    case "cabreramartinez.laura-cabrera.com":
        $publickey = "6LcUqcwSAAAAAPZNLOVjTHPcW8Zz_CdjnQNW5Cge";
        break;
    case "cabreramartinez.com":
        $publickey = "6LdJp8wSAAAAAApv3cyEkKO_oQhXypoo7jqu4fuh";
        break;
}

?>
		
<div class="full-column">
	
	<div class="half-column">
		<p>
		<strong>Condominio Metro 2000 Local C21</strong><br/>
		47 Avenida Norte<br/>
		Entre 1a Calle Pte. y Al. Juan Pablo II</br>	
		San Salvador, El Salvador</p>
		
		<p><strong>Telefax:</strong> (503) 2260 - 7836</p>
		
		<!--<div class="separator"></div>-->
		<br/>
		
		<form method="post" action="verify.php">
		<div class="textfieldgroup">
			<label for="contact_name">Nombre</label> 
			<input type="text" name="contact_name" value="<?=(isset($_POST["contact_name"]))?$_POST["contact_name"]:''?>" />
			<div class="clearfix"></div>
		</div>
		
		<div class="textfieldgroup">
			<label for="contact_email">Correo</label> 
			<input type="text" name="contact_email" value="<?=(isset($_POST["contact_email"]))?$_POST["contact_email"]:''?>" />
			<div class="clearfix"></div>
		</div>
		
		<div class="textfieldgroup">
			<label for="message">Mensaje</label> 
			<textarea name="message"><?=(isset($_POST["message"]))?$_POST["message"]:''?></textarea>
			<div class="clearfix"></div>
		</div>
		
		<div class="captcha-wrapper">
			<? echo recaptcha_get_html($publickey); ?>
		</div>
		
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