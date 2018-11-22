<?php 

try
{
	$bdd = new PDO('mysql:host=localhost;dbname=webloc;charset=utf8', 'root', 'root');

	/** connexion DB infomaniak
		$bdd = new PDO('mysql:host=gjtg.myd.infomaniak.com;dbname=gjtg_webloc;charset=utf8', 'gjtg_davidadmin', 'As-261-sE');
	**/
}
catch(exception $e)
{
	die('Erreur : '.$e->getMessage());
}

// Insertion
$req = $bdd->prepare('INSERT INTO User (name, first_name, email, postal_code_property, postal_code_caretaker) VALUES(?,?,?,?,?)');
$req->execute(array($_POST['name'], $_POST['first_name'], $_POST['email'], $_POST['postal_code_property'], $_POST['postal_code_caretaker']));


header('location: thankYou.php');
