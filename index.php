<?php
	include("View/header.php");
	//include("View/menu.php");
	if (isset($_GET['id'])) {
		if ($_GET['id']=="admin") {
			include ("Model/admin.php");
		}
	}
	// $link = "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; $escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8'); echo '<a href="'.$escaped_link.'">'.$escaped_link.'</a>';
	if (isset($_GET['page'])) {
		//print_r($_GET['page']);
		switch ($_GET['page']) {
			case 'register':
				include("View/register.php");
				break;
			case 'cart':
				include("View/shoppingCart.php");
				break;
			default:
				# code...
				break;
		}




		/*if ($_GET['page']=="register") {
			include("View/register.php");
		}*/
		if (isset($_GET['patate'])) {
			print_r($_GET['patate']);
		}
	}else{
	//echo(htmlspecialchars("$_SERVER[HTTP_HOST]", ENT_QUOTES, 'UTF-8'));
	//echo "coucou".dirname("View/header.php")."coucou";

	include("View/catalogTest.php");
	include("View/vitrine.php");
	}
	include("View/footer.php");

?>