<!DOCTYPE html>

<html>

	<head>
		<meta charset="utf-8" />
		<title>Exia Store</title>
		<link rel="stylesheet" type="text/css" href="View/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="View/css/commun.css">
		<?php
			if (isset($_GET['user'])) {
				if ($_GET['user']="labna") {
					?><link rel="stylesheet" type="text/css" href="View/css/basic.css"><?php
				}
			}
		?>
		<script type="text/javascript" src="View/js/jquery.min.js"></script>
		<script type="text/javascript" src="View/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="View/js/bubulle.min.js"></script>
		<script type="text/javascript" src="View/js/actions.js"></script>
	</head>

	<body>

		<header><?php include("View/banner.php"); ?></header>
		<nav><?php include("View/nav.php") ?></nav>
        
            <form id="formLog" method="post" action="">
                <p>
                    <label for="email">Your e-mail :</label>
                    <input type="email" name="email" id="email"/>
                    
                    <label for="password">Your password :</label>
                    <input type="password" name="password" id="password"/>
                    
                    <button type="submit" value="Valide">OK</button>
                
				</p>
				<label for="nom"><br><br>Quel est votre nom ?</label>
       <input type="text" name="nom" id="nom" />
       <br>
       <br />

       <label for="prenom">Quel est votre prénom ?</label>
       <input type="text" name="prenom" id="prenom" />
       <br>
       <br />
       
       <label for="password">Votre mot de passe :</label>
       <input type="password" name="pass" id="pass" />
       <br>
       <br />
 
       <label for="email">Quel est votre e-mail ?</label>
       <input type="email" name="email" id="email" />
       <br>
       <br />
        
        <label for="date">Quel est votre date d'anniversaire ?</label>
        <input type="date" name="birthday" id="birthday"/>
        <br>
        <br />
       
       
       &nbsp;<input type="submit" value="Send" class="auto-style1" style="width: 90px" /></form>
				
				
            </form>
