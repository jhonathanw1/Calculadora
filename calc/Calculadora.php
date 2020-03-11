<?php
	if(isset($_GET[“calculadora”])){
		if($_POST[“ope”] == “+”){
			$valor = $_POST[“camp1”] + $_POST[“camp2”];
		}
		elseif($_POST[“ope”] == “-“){
			$valor = $_POST[“camp1”] – $_POST[“camp2”];
		}
		elseif($_POST[“ope”] == “*”){
			$valor = $_POST[“camp1”] * $_POST[“camp2”];
		}
		elseif($_POST[“ope”] == “/”){
			$valor = $_POST[“camp1”] / $_POST[“camp2″];
		}
	}
?>