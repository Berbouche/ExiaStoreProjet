<script type="text/javascript">alert('coucou');</script>
<?php

	try {
		$pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;		
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
        $lastname = $_POST["LASTNAME"];
        $firstname = $_POST["FIRSTNAME"];
        $password = $_POST["PASSWORD"];
        $email = $_POST["EMAIL"];
        $birthday = $_POST["BIRTHDAY"];

        $table="member";
            $sql= "INSERT INTO ".$table. "(lastname, firstname, password, email, birthday) VALUES('".$lastname."','".$firstname."', '".$password."', '".$email."', '".$birthday."')";
        print_r($bdd);
        print_r($sql);
        $pre = $bdd->prepare($sql);
        $pre->execute();

        }catch (PDOException $e){
        echo "Could not connect";
    }
?>