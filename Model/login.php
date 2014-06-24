<?php
    try{
       $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;		
		$bdd = new PDO('mysql:host=localhost;dbname=projetweb','root','',$pdo_options);
        
        if(isset($_POST) && !empty($_POST['EMAIL']) && !empty($_POST['PASSWORD'])){
            extract($_POST);
            
            $table ="member";
            $sql = "SELECT PASSWORD FROM" .$table."WHERE EMAIL='".$EMAIL."'";
            $req = mysql_query($sql) or die('SQL Error!<br>'.$sql.'<br>'.mysql_error());
            $data = mysql_fetch_assoc($req);
            
            if($data['PASSWORD'] != $PASSWORD){
                echo '<p>Bad login / password. Thank you again for</p>';
                exit;
            }
            else {
                session_start();
                $_SESSION['EMAIL'] = $EMAIL;
                echo 'You are connecting';
                
        //inclure un retour à la page d'accueil
            }
        }
        else {
            echo '<p>You forgot to fill in a field.</p>';
            exit;
        }
            
        } catch (PDOException $e){
        die('Erreur : '.$e->getMessage()); 
    }
?>