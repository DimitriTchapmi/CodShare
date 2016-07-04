<?php
include 'db.php';
$pass=sha1($_POST['pass']);
$req = $connexion->prepare('INSERT INTO `compte_unix`(`login` ,`mdp`) VALUES(:login, :mdp)');
$req->execute(array(
	'login' => $_POST['pseudo'],
	'mdp' => $pass,
	)) or die (print_r($req->errorInfo()));

			$records = $connexion->prepare('SELECT id_unix,login,mdp FROM  compte_unix WHERE login = :login');
			$records->bindParam(':login', $_POST['pseudo']);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

$idunix = $results['id_unix'];
$req = $connexion->prepare('INSERT INTO `developpeurs`(`nom` ,`prenom` ,`email`, `compte_unix_id_unix`) VALUES(:nom, :prenom, :email, :compte)');
$req->execute(array(
	'nom' => $_POST['nom'],
	'prenom' => $_POST['prenom'],
	'email' => $_POST['email'],
	'compte'=> $idunix,
	)) or die (print_r($req->errorInfo()));
	$login = $_POST['pseudo'];
	$mdp = $_POST['pass'];
	echo $mdp, $login;
	$commande = "sudo /var/www/codshare/scripts/inscription.sh ".$login." ".$mdp;
	exec($commande); 
	header('Location: index.php');
?>