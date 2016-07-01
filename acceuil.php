<?PHP
session_start()
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Accueil</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/agency.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body id="page-top" class="index">

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">Cod'Share</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://mail.codshare.itinet.fr" target="_blank">email</a>
                    </li>
<!--                     <li>
                        <a class="page-scroll" href="#liste">liste de projet</a>
                    </li>       -->
                    <li>
                        <a class="page-scroll" href="#param" title="accédez a votre profil" data-toggle="modal">Welcome <?PHP echo $_SESSION['login'];?></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://localhost/codshare/deconnexion.php" data-toggle="modal"> <button type="button" class="btn btn-danger"> déconnexion</button></a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>



    <!-- param Section -->
    <div class="portfolio-modal modal fade" id="param" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal">
                <div class="lr">
                    <div class="rl">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-lg-offset-2">
                        <div class="modal-body">
                            <?php include'param.php';?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- ========================================================================================================================================== -->

    <!-- liste de projet Section -->
    <section id="liste" class="bg-light-gray">
        <div class="container">
            <div class="row">

            <p><h1 class="section-heading">VOS PROJETS</h1></p>

            <h3 class="section-heading">tableau chef : </h3>

             <table class="table table-striped">
                <thead>
                 <tr>
                    <th>Liste des projets</th>
                    <th>Alias</th>
                    <th>Nbr dev</th>
                    <th>Cloud</th>
                    <th>Deployer</th>
                    <th>Outils</th>
                </tr>
                </thead>
                <tbody>
                  <tr>
                    <td data-title="Liste des projets"><a href="" title="Cliquez ici pour accéder a votre site"><button type="button" class="btn btn-link">projetX.codshare.itinet.fr</button></a></td>
                    <td data-title="Alias"><a href=""><button type="button" class="btn btn-link">projetX</button></a></td>
                    <td data-title="Nbr dev"><a href="modifier.php" ><button type="button" class="btn btn-secondary">3</button></a></td>
                    <td data-title="Cloud"><a href="http://cloud.codshare.itinet.fr" target="_blank"><button type="button" class="btn btn-info">Cloud</button></a></td>
                    <td data-title="Deployer"><a href="" title="mettre le site en production"><button type="button" class="btn btn-info">Déployer</button></a></td>
                    <td data-title="Outils"><a href="modifier.php"><button type="button" class="btn btn-warning">Modif.</button></a> <a href =""><button type="button" class="btn btn-danger">Supp.</button></a></td>
                  </tr>

                </tbody>
              </table>
              <a class="btn" href="creer.php" title="creer un projet"><button type="button" class="btn btn-success">+</button></a>
                
            </div>
        </div>
        
    

<!-- ======================================================================================================================================================= -->

<br><br>
        <div class="container">
            <div class="row">
             <h3 class="section-heading">tableau dev : </h1>

             <table class="table table-striped">
                <thead>

                 <tr>
                    <th>Liste des projets</th>
                    <th>Chef</th>
                    <th>Alias</th>
                    <th>Nbr dev</th>
                    <th>Quitter le groupe</th>
                 </tr>

                </thead>
                <tbody>

                  <tr>
                    <td data-title="Liste des projets"><a href="" title="Cliquez ici pour accéder a votre site"><button type="button" class="btn btn-link">projetX.codshare.itinet.fr</button></a></td>
                    <td data-title="chef">#nom_du_chef</td>
                    <td data-title="Alias"><a href=""><button type="button" class="btn btn-link">projetX</button></a></td>
                    <td data-title="Nbr dev"><a href="modifier.php" ><button type="button" class="btn btn-secondary">3</button></a></td>
                    <td data-title="quitter"><a href=""><button type="button" class="btn btn-danger">quitter</button></a></td>                    
<!--                     <td data-title="Cloud"><a href="http://cloud.codshare.itinet.fr" target="_blank"><button type="button" class="btn btn-info">Cloud</button></a></td>
 -->                  </tr>

                </tbody>
              </table>
            </div>




                
            </div>
    </section>




    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/agency.js"></script>
</body>

</html>