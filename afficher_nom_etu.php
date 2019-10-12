<?php
	// $bdd = mysqli_connect("localhost","root", "", "bases etudiants")
	// or die ("impossible de se connecter a la base: ".mysql_error());

	// $res = mysqli_query($bdd,'SELECT nom_etu FROM etudiants');

	// while ($ligne = mysqli_fetch_row($res))
	// {
	// 	echo $ligne[0] ."<br>";
	// }


$bdd = mysqli_connect("localhost","root", "", "bases etudiants")
	or die ("impossible de se connecter a la base: ".mysql_error());

	$res = mysqli_query($bdd,'SELECT * FROM etudiants');
	echo "<table border=1>";
	echo "<tr><th>N</th> <th>Nom Etudiants </th> <th>Date de naissance </th> <th>Sexe</th> </tr>";
	while ($ligne = mysqli_fetch_row($res))
	{
		echo "<tr> <td> $ligne[0] </td> <td> $ligne[1] </td> <td> $ligne[2] </td> <td> $ligne[3] </td> </tr>" ;
		
	}
	echo "</table>";

	

?>