<?php
function getUser()
{
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

	$req = $bdd->query('SELECT id_user, pseudo, password, name, first_name, email, status_owner, phone');

	return $req;
}