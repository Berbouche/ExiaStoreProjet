<?php
try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;   
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
		$data = $bdd->query('SELECT * FROM article');
		while ($line = $data->fetch()) {
?>
<!-- Debut de balise 1 -->
<div class="container">
<div class="row">
	<div class="col-sm-6 col-md-3">
		<div class="thumbnail">
			<img src="View/image/compile.jpg" alt="compile">
			<div class="caption">
				<h4>Artist : <?php echo (utf8_encode($line['ARTIST_REALISATOR'])) ?> </h4>
				<p>Price : <?php echo (utf8_encode($line['PRICEHT'])) ?> $</p>
				<p>

				<a href="#" class="btn btn-primary" role="button">Add to my ShopingCart</a>
				<a id="info" onclick="javascript:show_hide('info<?php echo (utf8_encode($line['ID'])) ?>');" class="btn btn-default" role="button">More Info</a>
				<div id="info<?php echo (utf8_encode($line['ID'])) ?>" class="info<?php echo (utf8_encode($line['ID'])) ?>">
				<?php echo (utf8_encode($line['DESCRIBE'])) ?>
				</div>
				</p>

			</div>
		</div>
	</div>
</div>
 </div><!--/span-->
			<!-- Fin de balise 1 -->
	 <?php 
		}
		$data->closeCursor();
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
	?>
<!-- Fin du Catalogue -->
</div>
<?php
try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;   
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
		$data = $bdd->query('SELECT * FROM article');
		while ($line = $data->fetch()) {
?>
<script type="text/javascript">
		//<!--
				show_hide('info<?php echo (utf8_encode($line['ID'])) ?>');
		//-->
		</script>
	 <?php 
	}
	$data->closeCursor();
} catch (Exception $e) {
	die('Erreur : '.$e->getMessage());
}
?> 