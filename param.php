<?PHP
session_start()
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Profil</title>
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

        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"/>
        <input type="hidden" name="page" value="seeim">

        <h1>Envoyer une image</h1>

        <form enctype="multipart/form-data" action="" method="post">
    <p>
        <input type="hidden" name="page" value="traitement2">
        <label for="image">Image : </label><input type="file" name="image" id="image"/><br/>
        <label for="validation"></label><input type="submit" class="btn btn-success" name="validation"
                                               id="validation" value="Envoyer"/>
    </p>
    </form>

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

        <a href="index.php?page=home_page" class="btn btn-danger">Retour</a>

    </form>
    </fieldset>

    </p>
</center>

</body>

</html>