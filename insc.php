<?php
include 'db.php';
$pass=sha1($_POST["pass"]);
$req = $bdd->prepare('INSERT INTO `developpeurs`(`nom` ,`prenom` ,`email` ,`login` ,`mdp`, `compte unix_id_unix`) VALUES(:nom, :prenom, :email, :pseudo, :pass, :compte');
$req->execute(array(
	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'email' => $_POST['email'],
	'pseudo' => $_POST['pseudo'],
	'pass' => $pass,
	'compte'=> '1',
	)) or die (print_r($req->errorInfo()));
?>