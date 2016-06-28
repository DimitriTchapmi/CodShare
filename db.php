<?php
try
{
	$PDO = new PDO('mysql:host=localhost;dbname=codshare_bdd;charset=utf8', 'root', 'codshare-itinet');
}
catch(Exception $e)
{
        die('Erreur : '.$e->getMessage());
}

?>