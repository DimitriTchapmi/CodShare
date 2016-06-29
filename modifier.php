<!DOCTYPE html>
<html>

<head>
    <meta charset ="utf-8">
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
<body bgcolor="#E6E6FA">


 <!-- Navigation -->
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">CodShare</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>

                    <li>
                        <a class="page-scroll" href="#modifier">Modification</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://localhost/codshare/deconnexion.php" data-toggle="modal">déconnexion</a>
                    </li>
                    </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>

   <!-- Header -->
    <header>
        <div class="container">
            <div class="intro-text">
                <div class="intro-lead-in">Modifier le projet</div>
            </div>
        </div>
    </header>

<!-- ========================================================================================================================================== -->

        <!-- modifier Section -->
    <section id="modifier">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Entrez vos modifications</h2>
                    <!-- <p><a href="http://mail.codshare.itinet.fr"><button type="button" class="btn btn-primary">login@codshare.itinet.fr</button></a></p> -->
                     <p>Nouveau nom du projet : <input type="text" name="name" value="nom du projet"> </p>
                     <p>ajouter des membres au projet : <input type="text" name="login" value="login">@codshare.itinet.fr <a href="http://localhost/codshare/modifier.php"><button type="button" class="btn btn-secondary">ajouter</button></a> </p>
                     <p><a href="http://localhost/codshare/tab.php"><button type="button" class="btn btn-primary">Valider</button></a> <a href="http://localhost/codshare/tab.php"><button type="button" class="btn btn-danger">annuler</button></a></p>

                </div>
            </div>
           
        </div>
    </section>

<!-- ========================================================================================================================================== -->
    

      <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
</body>

</html>