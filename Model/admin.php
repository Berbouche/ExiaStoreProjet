<?php
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;		$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
		$data = $bdd->query('SELECT * FROM member');
		echo "<table>";
		while ($line = $data->fetch()) {
			echo "<tr><td>".$line['FIRSTNAME']."</td><td>".$line['LASTNAME']."</td><td>".$line['EMAIL']."</td></tr>";
		}
		echo "</table>";
		$data->closeCursor();
	} catch (Exception $e) {
		die('Erreur : '.$e->getMessage());
	}

?>