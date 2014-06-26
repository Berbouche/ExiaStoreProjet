<?php

    try{
        $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;		
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
        
        $reference = $_POST["reference"];
        $name = $_POST["name"];
        $priceht = $_POST["priceht"];
        $describe = $_POST["describe"];
        $stock = $_POST["stock"];
        $realisedate = $_POST["realisedate"];
        $artist_realisator = $_POST["artist_realisator"];
        $recordlabel_studio = $_POST["recordlabel_studio"];
        $threshold = $_POST["threshold"];
        
        $table ="article";
        $sql= "INSERT INTO".$table. "(reference, name, priceht, describe, stock, realisedate, artist_realisator, recordlabel_studio, threshold) VALUES('".$reference."', '".$name."', '".$priceht"','".$describe"','".$stock"','".$realisedate."','"artist_realisator"','"recordlabel_studio"','"threshold"')";
        
        print_r($bdd);
        print_r($sql);
        $pre = $bdd->prepare($sql);
        $pre->execute();    
        
    }
    catch (PDOException $e){
        die('Erreur : '.$e->getMessage());
    }
    
?>