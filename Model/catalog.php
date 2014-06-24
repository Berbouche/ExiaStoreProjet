
<?php
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;		
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
		$data = $bdd->query('SELECT * FROM article');
		echo "<table>";
		while ($line = $data->fetch()) {
			echo "<tr><td>".utf8_encode($line['NAME'])."</td><td>".utf8_encode($line['ARTIST_REALISATOR'])."</td><td>".utf8_encode($line['DESCRIBE'])."</td></tr>";
		}
		echo "</table>";
		$data->closeCursor();
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}
?>