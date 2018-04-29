<div class="row">
	<div class="col-md">
		<h1 class="text-center"><?php echo lang("Korduma_kippuvad_küsimused");?></h1>
		<div class="row">			
		<div class="col-lg-6">
			<h3>Kontakt</h3><br>


			<?php $myXMLData ="<?xml version='1.0' encoding='UTF-8'?>
			<kontakt>
			<veebirakendus>RENDILEHT</veebirakendus>
			<autor1>Mikk Õunmaa</autor1>
			<autor2>Tarmo Riivo Tšernjavski</autor2>
			<autor3>Omar Purik</autor3>
			</kontakt>";
			
			$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
			echo $xml->veebirakendus . "<br>";
			echo $xml->autor1 . "<br>";
			echo $xml->autor2 . "<br>";
			echo $xml->autor3;
			?> 
		</div>
	</div>
</div>
