<?php 
     	session_start();
	
	//DB configuration Constants
	define('_HOST_NAME_', 'localhost');
	define('_USER_NAME_', 'root');
	define('_DB_PASSWORD', 'codshare-itinet');
	define('_DATABASE_NAME_', 'codshare_bdd');
	
	//PDO Database Connection
	try {
		$databaseConnection = new PDO('mysql:host='._HOST_NAME_.';dbname='._DATABASE_NAME_, _USER_NAME_, _DB_PASSWORD);
		$databaseConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch(PDOException $e) {
		echo 'ERROR: ' . $e->getMessage();
	}
		$errMsg = '';
		//username and password sent from Form
		$login = trim($_POST['pseudo']);
		$mdp=sha1($_POST['pass']);		
		if($login == '')
			$errMsg .= 'You must enter your Username<br>';
		
		if($mdp == '')
			$errMsg .= 'You must enter your Password<br>';
		
		
		if($errMsg == ''){
			$records = $databaseConnection->prepare('SELECT id_unix,login,mdp FROM  compte_unix WHERE login = :login');
			$records->bindParam(':login', $login);
			$records->execute();
			$results = $records->fetch(PDO::FETCH_ASSOC);

			if(count($results) > 0 && $mdp == ($results['mdp'])){
				$_SESSION['login'] = $results['login'];
				$_SESSION['mdp'] = $_POST['pass'];
				header('location:acceuil.php');
				exit;
			}else{
				$errMsg .= 'Username and Password are not found<br>';
			}
		}
     
?>