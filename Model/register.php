<?php
	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;		
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
        $lastname = $_POST["lastname"];
        $firstname = $_POST["firstname"];
        $password = $_POST["password"];
        $email = $_POST["email"];
        $birthday = $_POST["birthday"];
        $table="member";
            $sql= "INSERT INTO ".$table. "(lastname, firstname, password, email, birthday) VALUES('".$lastname."','".$firstname."', '".$password."', '".$email."', '".$birthday."')";
        print_r($bdd);
        print_r($sql);
        $pre = $bdd->prepare($sql);
        $pre->execute();
    }catch (PDOException $e){
        die('Erreur : '.$e->getMessage());
        header("../?log=fail");
    }
    header("../?log=yes2")
?>