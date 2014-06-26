<?php
    if (isset($_GET['log'])) {
        if ($_GET['log']=="login") {
    try{
        session_start();
        if (empty ($_POST['email']) && empty ($_POST['password']))
           {
                header("Location: http://localhost/ExiaStoreProjet/?log=enter");
               echo "the nickname and the password should be entered";
           }
           else
           {
             mysql_connect("localhost","root","");
             mysql_select_db("projetweb");
             $email = $_POST['email'];
             $password = $_POST['password'];
             $r = mysql_query('SELECT password, email,idautorization FROM member WHERE email = "'.$email.'"')
             or die (mysql_error());
             $d= mysql_fetch_assoc($r);
             
    //verif MDP est correct
            /*?><script>alert("<?php echo($email." ".$password."</br>".$d['password']); ?>");</script><?php*/
             if ($d['password'] == ($password))
             {
                $_SESSION['email']=$email;
                $_SESSION['password']=$password;
                $NumSession = session_id();
                //session_register("NumSession");

				if($d['idautorization'] == '1')
				{
					$_SESSION['admin'] = $d['idautorization'];
				}

                header('Location: http://localhost/ExiaStoreProjet/?log=yes');
             }
             else
             {
                header('Location: http://localhost/ExiaStoreProjet/?log=wrong');
             }
           } 
        } catch (PDOException $e){
            die('Erreur : '.$e->getMessage());
            header('Location: http://localhost/ExiaStoreProjet/?log='.$e->getMessage());


    }
?>

<?php
    }elseif ($_GET['log']=="logout") {
    session_start();
    $_SESSION = array();
    session_destroy();
    header("Location: http://localhost/ExiaStoreProjet/?log=exit");
    }else{
        header("Location: http://localhost/ExiaStoreProjet/?log=".$_GET['log']);
    }
}
?>