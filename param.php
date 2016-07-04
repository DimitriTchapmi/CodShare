<?PHP
session_start()
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profils</title>
   <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css">
    <link href=https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700 rel=stylesheet type=text/css>

</head>

<body>

<center>


    <p>

    <fieldset>


    <h1><a href="#" class="glyphicon glyphicon-user"></a> Profil</h1>
    <br>

    <form action="" method="post">
        <input type="hidden" name="page" value="edit_pro">
        Nom : <input type="text" name="nom" class="form-control" style="width:265px"
                     value=""><br>
        Prenom : <input type="text" name="prenom" class="form-control" style="width:265px"
                        value=""><br>
        login : <input type="text" name="pseudo" class="form-control" style="width:265px"
                        value=""><br>
        mot de passe : <input type="text" name="mdp" class="form-control" style="width:265px"
                        value=""><br>
        confirmation mot de passe : <input type="text" name="mdp" class="form-control" style="width:265px"
                        value=""><br>                        

        <input type="submit" name="modif" class="btn btn-success" value="valider">

        <br>
        <a href ="/home/codshare-itinet/<?PHP echo $_SESSION['login'];?>/<?PHP echo $_SESSION['login'];?>.pub">Telecharger votre clé privée</a>

    </form>
    </fieldset>

    </p>
</center>

</body>

</html>