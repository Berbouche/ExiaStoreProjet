<?php
    try{
        session_start();
        if (empty ($_POST['email']) && empty ($_POST['password']))
           {
               echo "the nickname and the password should be entered";
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
            /*?><script>alert("<?php echo($email." ".$password."</br>".$d['password']); ?>");</script><?php*/
             if ($d['password'] == ($password))
             {
                 $_SESSION['email']=$email;
                 $_SESSION['password']=$password;
                 header('Location: http://localhost/ExiaStoreProjet/?log=yes');
             }
             else
             {
                 header('Location: http://localhost/ExiaStoreProjet/?log=fail');
             }
           }
        
        
            
        } catch (PDOException $e){
        die('Erreur : '.$e->getMessage()); 
    }
?>
<?php /*        
session_start();  
//session_destroy sert à detruire la session  
session_destroy();  
echo" Vous êtes  déconnecté";*/?>