<?php
		if (isset($_GET['id'])){
		try {
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;		
			$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
			$data = $bdd->query('SELECT * FROM article WHERE idKindArticle ="'.$_GET['id'].'"');
			//echo "<table><tr><th>REFERENCE</th><th>NAME</th><th>PRICEHT</th><th>DESCRIBE</th><th>STOCK</th><th>REALISEDATE</th><th>ARTIST_REALISATOR</th><th>RECORDLABEL_STUDIO</th></tr>";
			while ($line = $data->fetch()) {
				//echo "<tr><td>".utf8_encode($line['REFERENCE'])."</td><td>".utf8_encode($line['NAME'])."</td><td>".utf8_encode($line['PRICEHT'])."</td><td>".utf8_encode($line['DESCRIBE'])."</td><td>".utf8_encode($line['STOCK'])."</td><td>".utf8_encode($line['REALISEDATE'])."</td><td>".utf8_encode($line['ARTIST_REALISATOR'])."</td><td>".utf8_encode($line['RECORDLABEL_STUDIO'])."</td></tr>";
				?><!-- Debut de balise 1 -->
				<div class="container">
					<!-- <div class="row"> -->
						<div class="col-sm-6 col-md-3">
							<div class="thumbnail">
								<img src="View/image/compile.jpg" alt="compile">
								<div class="caption">
									<h4>Artist : <?php echo (utf8_encode($line['ARTIST_REALISATOR'])) ?> </h4>
									<p>Price : <?php echo (utf8_encode($line['PRICEHT'])) ?> $</p>
									
										<a href="#" class="btn btn-primary" role="button">Add to my ShopingCart</a>
										<a id="info" onclick="javascript:show_hide('info<?php echo (utf8_encode($line['ID'])) ?>');" class="btn btn-default" role="button">More Info</a>
										<p><div id="info<?php echo (utf8_encode($line['ID'])) ?>" class="info<?php echo (utf8_encode($line['ID'])) ?>"><?php echo (utf8_encode($line['DESCRIBE'])) ?></div>
									</p>
								</div>
							</div>
						</div>
					<!-- </div> -->
				</div><!--/span--><!-- Fin de balise 1 -->
				<?php
			}
			// echo "</table>";
			$data->closeCursor();
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
		}
?>