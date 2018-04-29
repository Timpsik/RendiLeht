<div class="row">
	<div class="col-md">
		<h1 class="text-center"><?php echo lang("Korduma_kippuvad_küsimused");?></h1>
		<div class="row">			
		<div class="col-lg-6">
			<h3>Kontakt</h3><br>
			<p>Võta meiega otse ühendust:</p>
			
			<?php
			$feed = new SimpleXMLElement("http://localhost/rent/assets/xml/kontakt.xml",NULL,TRUE);
			$namespaces = $feed->getNamespaces(true);
			$getChildren=$feed->children($namespaces["s"]);
			echo $getChildren->nimi."<br>";
			echo $getChildren->email."<br>";
			echo $getChildren->aadress1."<br>";
			echo $getChildren->aadress2."<br>";
			?> 
		</div>
	</div>
</div>
