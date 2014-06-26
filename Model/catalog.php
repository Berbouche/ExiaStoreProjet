
<?php
    if (isset($_GET['id'])){

		try {
			$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;		
			$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
			$data = $bdd->query('SELECT * FROM article WHERE idKindArticle ="'.$_GET['id'].'"');
	        
			echo "<table><tr><th>REFERENCE</th><th>NAME</th><th>PRICEHT</th><th>DESCRIBE</th><th>STOCK</th><th>REALISEDATE</th><th>ARTIST_REALISATOR</th><th>RECORDLABEL_STUDIO</th></tr>";
			while ($line = $data->fetch()) {
				echo "<tr><td>".utf8_encode($line['REFERENCE'])."</td><td>".utf8_encode($line['NAME'])."</td><td>".utf8_encode($line['PRICEHT'])."</td><td>".utf8_encode($line['DESCRIBE'])."</td><td>".utf8_encode($line['STOCK'])."</td><td>".utf8_encode($line['REALISEDATE'])."</td><td>".utf8_encode($line['ARTIST_REALISATOR'])."</td><td>".utf8_encode($line['RECORDLABEL_STUDIO'])."</td></tr>";
			}
			echo "</table>";
			$data->closeCursor();
		} catch (Exception $e) {
			die('Erreur : '.$e->getMessage());
		}
    }
?>