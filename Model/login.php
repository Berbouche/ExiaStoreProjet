<?php
    try{
        session_start();
        if (empty ($_POST['email']) && empty ($_POST['password']))
           {
               echo "le pseudo et le MDP doivent etre saisis";
           }
           else
           {
             mysql_connect("localhost","root","");
             mysql_select_db("projetweb");
             $email = $_POST['email'];
             $password = $_POST['password'];
             $r = mysql_query('SELECT password, email FROM member WHERE email = "'.$email.'"')
             or die (mysql_error());
             $d= mysql_fetch_assoc($r);
             
    //verif MDP est correct
            ?><script>alert("<?php echo($email." ".$password."</br>".$d['password']); ?>");</script><?php
             if ($d['password'] == ($password))
             {
                 $_SESSION['email']=$email;
                 $_SESSION['password']=$password;
                 echo '<p>Bienvenue, vous êtes connecte!</p>';
             }
             else
             {
                 echo "Desole connexion echoue";
             }
           }
        
        
            
        } catch (PDOException $e){
        die('Erreur : '.$e->getMessage()); 
    }
?>