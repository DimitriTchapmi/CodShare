<?php

echo '

<head>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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
<form method="POST" action="log.php">
<div class="col-md-6">
<p class="text-muted"> Pseudo : <input type="text" name="pseudo" class="form-control"></p>
</div>
<div class="col-md-6">
<p class="text-muted"> Mot de passe : <input type="password" name="pass" class="form-control"></p>
</div>
<input type="button" name="log" value="Connexion" class="btn btn-xl" data-dismiss="modal">
</form>
</body>';


?>