<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="CHITOU, Kismath">
    <meta name="generator" content="Jekyll v4.1.1">
	<title>TABLEAU DE BORD |GeBCoS Services SARL</title>
	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/dashboard/">

    <!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/styleInscription.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="css/dashboard.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-1" href="#">GeBCoS Services SARL</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <input class="form-control form-control-dark w-100" type="text" placeholder="Search" aria-label="Search">
  <ul class="navbar-nav px-3">
    <li class="nav-item text-nowrap">
      <a class="nav-link" href="#">Deconnexion</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" href="#">
              <span data-feather="home"></span>
              Dashboard <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Acceuil.php">
              <span data-feather="shopping-cart"></span>
              Gestion des VISA
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Inscription.php">
              <span data-feather="users"></span>
              Inscription 1ere ann??e
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Inscription 2eme ann??e
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Inscription 3eme ann??e
            </a>
          </li>
        </ul>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Consultation</span>
          <a class="d-flex align-items-center text-muted" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Liste des 1??re ann??es
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Liste des 2??me ann??es
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Liste des 3??me ann??es
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              
            </a>
          </li>
        </ul>
      </div>
    </nav>
  <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-md-4">
      
  <div>
      <h2>Procedure Inscription en 1??re Ann??e</h2>
      <form method="post" action="" enctype="multipart/form-data">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border" >Inscription</legend>
            <div class ="row mb-3">
            <div class="col">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control" id="nom" name="nom" placeholder="CHITOU">
                 </div>
           
               
                 <div class="col">
                   <label for="nom">Entrez votre Prenom</label>
                   <input type="text" class="form-control " id="nom" placeholder="Kismath">
                 </div>
                 <div class="form-group">
                   <label for="selection">Pays</label>
                   <select id="selection" class="form-control">
                    <option value="Choississez un Pays">Choississez un Pays</option>
                    <option value="France">Prance</option>
                    <option value="Turquie">Turquie</option>
                    <option value="Canada">Canada</option>
                </select>
          
            </div>
        
    </fieldset>
    
   <fieldset class="scheduler-border container1"   >
            <legend class="scheduler-border" >Bulletins</legend>
                <fieldset class="scheduler-border " id="field1" >
            
                    <legend class="scheduler-border" >2nd</legend>
                
                    <div class="row mb-3">
                        <div class="col">
                            <label for="fichier">Semestre 1</label>
                            <input type="file" class="form-control-file" id="fichier">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 2</label>
                            <input type="file" class="form-control-file" id="fichier">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 3</label>
                            <input type="file" class="form-control-file" id="fichier">
                        </div>
                    </div>
                </fieldset>
        
                <fieldset class="scheduler-border " id="field3" >
                    <legend class="scheduler-border" >1??re</legend>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="fichier">Semestre 1</label>
                            <input type="file" class="form-control-file" id="fichier">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 2</label>
                            <input type="file" class="form-control-file" id="fichier">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 3</label>
                            <input type="file" class="form-control-file" id="fichier">
                        </div>
                    </div>
            
                 </fieldset>
                 <fieldset class="scheduler-border " id="field3" >
                    <legend class="scheduler-border" >Tle</legend>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="fichier">Semestre 1</label>
                            <input type="file" class="form-control-file" id="fichier">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 2</label>
                            <input type="file" class="form-control-file" id="fichier">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 3</label>
                            <input type="file" class="form-control-file" id="fichier">
                        </div>
                    </div>
            
                 </fieldset>
        
    </fieldset>
    <fieldset class="scheduler-border container1"   >
            <legend class="scheduler-border" >BAC</legend>
                
                    <div class="row mb-3">
                        <div class="col">
                            <label for="fichier">Relev?? de Note</label>
                            <input type="file" class="form-control-file" id="Rel">
                        </div>
                        <div class="col">
                            <label for="fichier">Attestation/authenticit??/Diplome</label>
                            <input type="file" class="form-control-file" id="dip">
                        </div>
                    </div>
                </fieldset>
            
                
        
    </fieldset>
    <div class="form-group md col-5">
        <label for="nom">Passport</label>
        <input type="file" class="form-control-file" id="Pass">
    </div>
    <input type="submit" name=" btnEnvoyer" value="Inscrire">
    <input type="reset" name="btnAnnuler" value="Annuler">
    </form>
    </div>
  </main>  
    

   
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
      <script>window.jQuery || document.write('<script src="../assets/js/vendor/jquery.slim.min.js"><\/script>')</script><script src="js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.9.0/feather.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.3/Chart.min.js"></script>
        <script src="js/dashboard.js"></script>
</body>
</html>