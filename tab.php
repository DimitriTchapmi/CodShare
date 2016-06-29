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
                        <a class="page-scroll" href="http://mail.codshare.itinet.fr">email</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#creer">créer un projet</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="http://localhost/codshare/profil.php">Profil</a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#liste">liste de projet</a>
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
                <div class="intro-lead-in">Welcome $pseudo</div>
            </div>
        </div>
    </header>

<!-- ========================================================================================================================================== -->

    <!-- email Section 
    <section id="email">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Vous disposez désormais d\'une boite mail</h2>
                     <a href="http://mail.codshare.itinet.fr"><button type="button" class="btn btn-primary">login@codshare.itinet.fr</button></a> 
                </div>
            </div>
           
        </div>
    </section> -->

<!-- ========================================================================================================================================== -->

    <!-- creer Section -->
    <section id="creer" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Vous pouvez créer un projet</h2>
                     <a href="creer.php"><button type="button" class="btn btn-primary">créer un projet</button></a> 
                </div>
            </div>
            </div>
        </div>
    </section>

<!-- ========================================================================================================================================== -->

    <!-- clé Section 
    <section id="cle" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Si vous voulez télécharger votre clé privée :</h2>
                     <a href=""><button type="button" class="btn btn-primary">Cliquez ici</button></a> 
                </div>
            </div>
            </div>
        </div>
    </section> -->

<!-- ========================================================================================================================================== -->

    <!-- liste de projet Section -->
    <section id="liste" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">tableau chef : </h1>

    <style>
    @media (max-width: 500px) {
    
    .responsive-table-line td:before { content: attr(data-title); }
    
    .responsive-table-line table, 
    .responsive-table-line thead, 
    .responsive-table-line tbody, 
    .responsive-table-line th, 
    .responsive-table-line td, 
    .responsive-table-line tr { 
    display: block; 
    }
     
    .responsive-table-line thead tr { 
    display:none;
    }
    
    .responsive-table-line td { 
    position: relative;
    border: 0px solid transparent;
    padding-left: 50% !important; 
    white-space: normal;
    text-align:right; 
    }
     
    .responsive-table-line td:before { 
    position: absolute;
    top: 0px;
    left: 0px;
    width: 45%; 
    padding-right: 15px; 
    height:100%;
    white-space: nowrap;
    text-overflow: ellipsis !important;
    overflow:hidden !important;
    text-align:left;
    background-color:#f8f8f8;
    padding:2px;
    }
    
    }
    </style>
    
    <div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
    <table class="table table-bordered table-condensed table-body-center" >
    <thead>
    <tr>
    <th>Liste des projets</th>
    <th>chef</th>
    <th>fqdn</th>
    <th>Cloud</th>
    <th>modifier ou supprimer</th>
    </tr>
    </thead>

    <tbody>
    <tr>
    <td data-title="Liste des projets">projetX</td>
    <td data-title="chef">#nom_du_chef</td>
    <td data-title="fqdn"><a href="">projetX.codshare.itinet.fr</a></td>
    <td data-title="Cloud"><a href="http://cloud.codshare.itinet.fr"><button type="button" class="btn btn-info">Cloud</button></a></td>
    <td data-title="modifier ou supprimer"><a href="http://localhost/codshare/modifier.php"><button type="button" class="btn btn-warning">Modif.</button></a> <a href =""><button type="button" class="btn btn-danger">Supp.</button></a></td>

    </tr>
  

     </tbody>
    </table>
    </div>




                
            </div>
            </div>
        </div>
    </section>
    

<!-- ======================================================================================================================================================= -->


        <!-- liste de projet Section -->
    <section id="liste" class="bg-light-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1 class="section-heading">tableau dev : </h1>

    <style>
    @media (max-width: 500px) {
    
    .responsive-table-line td:before { content: attr(data-title); }
    
    .responsive-table-line table, 
    .responsive-table-line thead, 
    .responsive-table-line tbody, 
    .responsive-table-line th, 
    .responsive-table-line td, 
    .responsive-table-line tr { 
    display: block; 
    }
     
    .responsive-table-line thead tr { 
    display:none;
    }
    
    .responsive-table-line td { 
    position: relative;
    border: 0px solid transparent;
    padding-left: 50% !important; 
    white-space: normal;
    text-align:right; 
    }
     
    .responsive-table-line td:before { 
    position: absolute;
    top: 0px;
    left: 0px;
    width: 45%; 
    padding-right: 15px; 
    height:100%;
    white-space: nowrap;
    text-overflow: ellipsis !important;
    overflow:hidden !important;
    text-align:left;
    background-color:#f8f8f8;
    padding:2px;
    }
    
    }
    </style>
    
    <div class="responsive-table-line" style="margin:0px auto;max-width:700px;">
    <table class="table table-bordered table-condensed table-body-center" >
    <thead>
    <tr>
    <th>Liste des projets</th>
    <th>chef</th>
    <th>fqdn</th>
    <th>Cloud</th>
    </tr>
    </thead>

    <tbody>
    <tr>
    <td data-title="Liste des projets">projetX</td>
    <td data-title="chef">#nom_du_chef</td>
    <td data-title="fqdn"><a href="">projetX.codshare.itinet.fr</a></td>
    <td data-title="Cloud"><a href="http://cloud.codshare.itinet.fr"><button type="button" class="btn btn-info">Cloud</button></a></td>

    </tr>
  

     </tbody>
    </table>
    </div>




                
            </div>
            </div>
        </div>
    </section>


<!-- ===================================================================================================================================== -->

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
</body>';
</html>