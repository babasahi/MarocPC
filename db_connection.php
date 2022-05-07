<?php

	$bd_user ="root";
	$bd_pass = "";
	$bd_nom = "marocpcbd";

	$link = mysqli_connect("localhost",$bd_user,$bd_pass,$bd_nom);
	if (mysqli_connect_errno()){
		echo "Erreur de conexion";
	}

	return $link ;

?>