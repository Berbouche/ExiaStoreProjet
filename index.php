<?php
	// include("");
	// session_name($sessname);
	session_start();
	include("View/header.php");
	//include("View/menu.php");
	if (isset($_GET['id'])) {
		if ($_GET['id']=="admin") {
			include ("Model/admin.php");
		}
	}
	
	if (isset($_SESSION['email'])&&isset($_SESSION['password'])) {
	 	?><script >
	 		document.getElementById('logout').style.display = "block";
	 		document.getElementById('login').style.display = "none";
	 	</script><?php
	 }



	if (isset($_GET['log'])) {
		switch ($_GET['log']) {
			case 'yes':
			echo '<ul class="list-group"><li class="list-group-item list-group-item-success">You are now logged</li></ul>';
				break;
			case 'yes2':
			echo '<ul class="list-group"><li class="list-group-item list-group-item-success">You are now registered</li></ul>';
				break;
			case 'no':
			echo '<ul class="list-group"><li class="list-group-item list-group-item-info">You need to be logged</li></ul>';
				break;
			case 'exit':
			echo '<ul class="list-group"><li class="list-group-item list-group-item-success">You are now log out</li></ul>';
				break;
			case 'fail':
			echo '<ul class="list-group"><li class="list-group-item list-group-item-danger">OOOoooops! log in fail...</li></ul>';
				break;
			default:
				echo "<script>alert('Error : ".$_GET['log']."')</script>";
				break;
		}

		if ($_GET['log']=="yes") {
		}elseif ($_GET['log']=="no") {
		}elseif ($_GET['log']=="exit"){
		}
	}
	// $link = "//$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"; $escaped_link = htmlspecialchars($link, ENT_QUOTES, 'UTF-8'); echo '<a href="'.$escaped_link.'">'.$escaped_link.'</a>';
	if (isset($_GET['page'])) {
		//print_r($_GET['page']);
		switch ($_GET['page']) {
			case 'register':
				include("View/register.php");
				break;
			
			case 'catalog' :
				?>
				<script type="text/javascript">
					document.getElementById('catalog').classList.add("active");
				</script>
				<?php
				include("View/catalogTest.php");
				break;

			case 'cart':
				?><script type="text/javascript">document.getElementById('shoppingCart').classList.add('active');</script><?php
				include("View/shoppingCart.php");
				break;

			default:
				include("View/vitrine.php");
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


	include("View/sale.php");
	}
	include("View/footer.php");

?>