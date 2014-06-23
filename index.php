<?php
	include("View/header.php");
	//include("View/menu.php");
	if (isset($_GET['id'])) {
		if ($_GET['id']="admin") {
			include ("Controller/admin.php");
		}
	}
	include("View/vitrine.php");
	include("View/footer.php");
?>