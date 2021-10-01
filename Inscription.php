<?php
include 'connexion.php';
$customObj = new Controleur();

$erreurSaisie = false;
$Nom = "";
$Prenom = "";
$Pays = "";
$SecSem1 = "";
$SecSem2 = "";
$SecSem3 = "";
$PreSem1 = "";
$PreSem2 = "";
$PreSem3 = "";
$TleSem1 = "";
$TleSem2 = "";
$TleSem3 = "";
$Attestation = "";
$RlveNote = "";
$Passport = "";
$Email="";
$Mdp="";

//
/**
 * 
 */
if ($_SERVER['REQUEST_METHOD'] == "POST"){

  if (isset($_POST["btnInscrire"])) {
    if (!isset($_POST["Nom"]) || empty($_POST["Nom"]) ||  !isset($_POST["Prenom"]) || empty($_POST["Prenom"])
    ||  !isset($_POST["Pays"]) || empty($_POST["Pays"]) ||  !isset($_POST["Email"]) || empty($_POST["Email"])
    ||  !isset($_POST["Mdp"]) || empty($_POST["Mdp"])) {
      $erreurSaisie = true;
      echo "<script>alert('REMPLISSEZ!')</script>";

    } else{
      $Nom = trim($_POST["Nom"]);
      $Prenom = trim($_POST["Prenom"]);
      $Pays = trim($_POST["Pays"]);
      $Email = trim($_POST["Email"]);
      $Mdp = trim($_POST["Mdp"]);
      if ($customObj->existEtudiant($Email)>=1) 
      {
        $erreurSaisie = true;
        echo "<script>alert('Un Etudiant porte déja ce mail!')</script>";
      }
      else{
        $customObj->AjouterDebut($_POST);
        echo "<script>alert('succes')</script>";
      }
    }
    /*if (isset($_POST["Nom"])) {
      $Nom = $_POST["Nom"];
    }
    if (isset($_POST["Prenom"])) {
      $Prenom = $_POST["Prenom"];
    }
     if (isset($_POST["Pays"])) {
      $Pays = $_POST["Pays"];
    }
    if (isset($_POST["Email"])) {
      $Email = $_POST["Email"];
    }
    if (isset($_POST["Mdp"])) {
      $Mdp = $_POST["Mdp"];
    }
    $customObj->AjouterDebut($_POST);
        //echo "<script>alert('Enregistrement réussi succes !')</script>"; */
  }
}
     
    
       
       
     
     

////////////////
  /* //secsem1
    $fichierCharger = $_FILES['SecSem1']['tmp_name'];
    $sourceProperties = getimagesize($fichierCharger);
    $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."SecSem1";
    // Valid extension
    $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
    $file_extension = strtolower(pathinfo($_FILES['SecSem1']['name'], PATHINFO_EXTENSION));
    $nomComplet =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
    $imageType = $sourceProperties[2];

    // Check extension
    if (!in_array($file_extension, $valid_ext)){
        echo "<script>alert('Format de fichier incorrect !')</script>"; 
      }else{
        move_uploaded_file($_FILES['SecSem1']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
        //unlink("images/lblkb_lnlknmn.jpg");
        //capermet de supprimer un fichier dans un emplacement précis
    }


 //secsem2

 $fichierCharger = $_FILES['SecSem2']['tmp_name'];
    $sourceProperties = getimagesize($fichierCharger);
    $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."SecSem2";
    // Valid extension
    $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
    $file_extension = strtolower(pathinfo($_FILES['SecSem2']['name'], PATHINFO_EXTENSION));
    $nomComplet1 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
    $imageType = $sourceProperties[2];

    // Check extension
    if (!in_array($file_extension, $valid_ext)){
        echo "<script>alert('Format de fichier incorrect !')</script>"; 
      }else{
        move_uploaded_file($_FILES['SecSem2']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
        //unlink("images/lblkb_lnlknmn.jpg");
        //capermet de supprimer un fichier dans un emplacement précis
    }

    //Secsem3

    $fichierCharger = $_FILES['SecSem3']['tmp_name'];
    $sourceProperties = getimagesize($fichierCharger);
    $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."SecSem3";
    // Valid extension
    $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
    $file_extension = strtolower(pathinfo($_FILES['SecSem3']['name'], PATHINFO_EXTENSION));
    $nomComplet2 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
    $imageType = $sourceProperties[2];

    // Check extension
    if (!in_array($file_extension, $valid_ext)){
        echo "<script>alert('Format de fichier incorrect !')</script>"; 
      }else{
        move_uploaded_file($_FILES['SecSem3']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
        //unlink("images/lblkb_lnlknmn.jpg");
        //capermet de supprimer un fichier dans un emplacement précis
    }

    //Presem1

    $fichierCharger = $_FILES['PreSem1']['tmp_name'];
    $sourceProperties = getimagesize($fichierCharger);
    $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."PreSem1";
    // Valid extension
    $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
    $file_extension = strtolower(pathinfo($_FILES['PreSem1']['name'], PATHINFO_EXTENSION));
    $nomComplet3 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
    $imageType = $sourceProperties[2];

    // Check extension
    if (!in_array($file_extension, $valid_ext)){
        echo "<script>alert('Format de fichier incorrect !')</script>"; 
      }else{
        move_uploaded_file($_FILES['PreSem1']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
        //unlink("images/lblkb_lnlknmn.jpg");
        //capermet de supprimer un fichier dans un emplacement précis
    }

     //Presem2

     $fichierCharger = $_FILES['PreSem2']['tmp_name'];
     $sourceProperties = getimagesize($fichierCharger);
     $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."PreSem2";
     // Valid extension
     $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
     $file_extension = strtolower(pathinfo($_FILES['PreSem2']['name'], PATHINFO_EXTENSION));
     $nomComplet4 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
     $imageType = $sourceProperties[2];
 
     // Check extension
     if (!in_array($file_extension, $valid_ext)){
         echo "<script>alert('Format de fichier incorrect !')</script>"; 
       }else{
         move_uploaded_file($_FILES['PreSem2']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
         //unlink("images/lblkb_lnlknmn.jpg");
         //capermet de supprimer un fichier dans un emplacement précis
     }

      //Presem3

    $fichierCharger = $_FILES['PreSem3']['tmp_name'];
    $sourceProperties = getimagesize($fichierCharger);
    $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."PreSem3";
    // Valid extension
    $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
    $file_extension = strtolower(pathinfo($_FILES['PreSem3']['name'], PATHINFO_EXTENSION));
    $nomComplet5 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
    $imageType = $sourceProperties[2];

    // Check extension
    if (!in_array($file_extension, $valid_ext)){
        echo "<script>alert('Format de fichier incorrect !')</script>"; 
      }else{
        move_uploaded_file($_FILES['PreSem3']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
        //unlink("images/lblkb_lnlknmn.jpg");
        //capermet de supprimer un fichier dans un emplacement précis
    }

     //TleSem1

     $fichierCharger = $_FILES['TleSem1']['tmp_name'];
     $sourceProperties = getimagesize($fichierCharger);
     $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."TleSem1";
     // Valid extension
     $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
     $file_extension = strtolower(pathinfo($_FILES['TleSem1']['name'], PATHINFO_EXTENSION));
     $nomComplet6 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
     $imageType = $sourceProperties[2];
 
     // Check extension
     if (!in_array($file_extension, $valid_ext)){
         echo "<script>alert('Format de fichier incorrect !')</script>"; 
       }else{
         move_uploaded_file($_FILES['TleSem1']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
         //unlink("images/lblkb_lnlknmn.jpg");
         //capermet de supprimer un fichier dans un emplacement précis
     }
    
     //TleSem2

     $fichierCharger = $_FILES['TleSem2']['tmp_name'];
     $sourceProperties = getimagesize($fichierCharger);
     $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."TleSem2";
     // Valid extension
     $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
     $file_extension = strtolower(pathinfo($_FILES['TleSem2']['name'], PATHINFO_EXTENSION));
     $nomComplet7 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
     $imageType = $sourceProperties[2];
 
     // Check extension
     if (!in_array($file_extension, $valid_ext)){
         echo "<script>alert('Format de fichier incorrect !')</script>"; 
       }else{
         move_uploaded_file($_FILES['TleSem2']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
         //unlink("images/lblkb_lnlknmn.jpg");
         //capermet de supprimer un fichier dans un emplacement précis
     }

     //TleSem3

     $fichierCharger = $_FILES['TleSem3']['tmp_name'];
     $sourceProperties = getimagesize($fichierCharger);
     $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."TleSem3";
     // Valid extension
     $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
     $file_extension = strtolower(pathinfo($_FILES['TleSem3']['name'], PATHINFO_EXTENSION));
     $nomComplet8 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
     $imageType = $sourceProperties[2];
 
     // Check extension
     if (!in_array($file_extension, $valid_ext)){
         echo "<script>alert('Format de fichier incorrect !')</script>"; 
       }else{
         move_uploaded_file($_FILES['TleSem3']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
         //unlink("images/lblkb_lnlknmn.jpg");
         //capermet de supprimer un fichier dans un emplacement précis
     }

     //RlveNote

     $fichierCharger = $_FILES['RlveNote']['tmp_name'];
     $sourceProperties = getimagesize($fichierCharger);
     $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."RlveNote";
     // Valid extension
     $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
     $file_extension = strtolower(pathinfo($_FILES['RlveNote']['name'], PATHINFO_EXTENSION));
     $nomComplet9 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
     $imageType = $sourceProperties[2];
 
     // Check extension
     if (!in_array($file_extension, $valid_ext)){
         echo "<script>alert('Format de fichier incorrect !')</script>"; 
       }else{
         move_uploaded_file($_FILES['RlveNote']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
         //unlink("images/lblkb_lnlknmn.jpg");
         //capermet de supprimer un fichier dans un emplacement précis
     }

     //Attestation

     $fichierCharger = $_FILES['Attestation']['tmp_name'];
     $sourceProperties = getimagesize($fichierCharger);
     $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."Attestation";
     // Valid extension
     $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
     $file_extension = strtolower(pathinfo($_FILES['Attestation']['name'], PATHINFO_EXTENSION));
     $nomComplet10 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
     $imageType = $sourceProperties[2];
 
     // Check extension
     if (!in_array($file_extension, $valid_ext)){
         echo "<script>alert('Format de fichier incorrect !')</script>"; 
       }else{
         move_uploaded_file($_FILES['Attestation']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
         //unlink("images/lblkb_lnlknmn.jpg");
         //capermet de supprimer un fichier dans un emplacement précis
     }
    
     //Passport

     $fichierCharger = $_FILES['Passport']['tmp_name'];
     $sourceProperties = getimagesize($fichierCharger);
     $nouvNomImg = $_POST["Nom"]."_".$_POST["Prenom"]."_"."Passport";
     // Valid extension
     $valid_ext = array('pdf', 'png','jpeg','jpg', 'gif');
     $file_extension = strtolower(pathinfo($_FILES['Passport']['name'], PATHINFO_EXTENSION));
     $nomComplet11 =  "image/" . htmlentities($nouvNomImg. ".". $file_extension);
     $imageType = $sourceProperties[2];
 
     // Check extension
     if (!in_array($file_extension, $valid_ext)){
         echo "<script>alert('Format de fichier incorrect !')</script>"; 
       }else{
         move_uploaded_file($_FILES['Passport']["tmp_name"], "image/" . $nouvNomImg. ".". $file_extension);
         //unlink("images/lblkb_lnlknmn.jpg");
         //capermet de supprimer un fichier dans un emplacement précis
     }
    
    
    


    
        $customObj->AjouterEtudiant($_POST,$nomComplet,$nomComplet1,$nomComplet2,$nomComplet3,$nomComplet4,
        $nomComplet5,$nomComplet6,$nomComplet7,$nomComplet8,$nomComplet9,$nomComplet10,$nomComplet11);
        echo "<script>alert('Enregistrement réussi !')</script>"; 

   

*/


?>

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
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Inscription 1ere année
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Inscrire.php">
              <span data-feather="bar-chart-2"></span>
              Inscription 2eme année
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="layers"></span>
              Inscription 3eme année
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
              Liste des 1ère années
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Liste des 2ème années
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Liste des 3ème années
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
      <h2>Procedure Inscription en 1ère Année</h2>
      <form method="POST" action="" enctype="multipart/form-data">
        <fieldset class="scheduler-border">
            <legend class="scheduler-border" >Inscription</legend>
            <div class ="row mb-3">
            <div class="col">
                   <label for="nom">Entrez votre nom</label>
                   <input type="text" class="form-control" id="Nom" name="Nom" placeholder="CHITOU" >
                 </div>
           
               
                 <div class="col">
                   <label for="nom">Entrez votre Prenom</label>
                   <input type="text" class="form-control " name="Prenom" id="Prenom" placeholder="Kismath" >
                 </div>
                 <div class="form-group">
                   <label for="selection">Pays</label>
                   <select id="Pays" name="Pays" class="form-control"  >
                    <option value="France">France</option>
                    <option value="Turquie">Turquie</option>
                    <option value="Canada">Canada</option>
                </select>
                
                    </div>
              
            </div>
            
            <div class="row mb-3">
                      
                      <div class="col">
                          <label for="Email">Email</label>
                          <input type="Email" class="form-control " id="Email"  name="Email" placeholder="kissmachitou@gmail.com">
                      </div>
                      <div class="col">
                          <label for="mdp">Mot de Passe</label>
                          <input type="password" class="form-control" id="Mdp"  name="Mdp" >
                      </div>
    </fieldset>
    <input type="submit" name="btnInscrire"  id="btnInscrire"  value="Inscrire">
    <input type="reset" name="btnAnnuler" id="btnAnnuler" value="Annuler">
    </form>
    <form method="POST" action="" enctype="multipart/form-data">
    <div class ="row mb-3">
            <div class="col">
                   <label for="nom">Choissisez Un etudiant</label>
                   <select name="Nom1" id="Nom1" class="form-control" >
                  
                          <?php 
                            $lstEtu = $customObj->listerEtudiant();
                            if ($lstEtu){ 
                              foreach ($lstEtu as $unEtu) {

                          ?>
                              <option value='<?= $unEtu['IdEtu']; ?>'><?= $unEtu['Nom']; ?>  <?= $unEtu['Prenom']; ?></option>
                          <?php } } ?>
							
						</select>                 </div>
                 </div>     
    
   <fieldset class="scheduler-border container1"   >
            <legend class="scheduler-border" >Bulletins</legend>
                <fieldset class="scheduler-border " id="field1" >
            
                    <legend class="scheduler-border" >2nd</legend>
                
                    <div class="row mb-3">
                        <div class="col">
                            <label for="fichier">Semestre 1</label>
                            <input type="file" class="form-control" id="SecSem1" name="SecSem1" >
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 2</label>
                            <input type="file" class="form-control"id="SecSem2" name="SecSem2">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 3</label>
                            <input type="file" class="form-control" id="SecSem3" name="SecSem3">
                        </div>
                    </div>
                </fieldset>
        
                <fieldset class="scheduler-border " id="field3" >
                    <legend class="scheduler-border" >1ère</legend>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="fichier">Semestre 1</label>
                            <input type="file" class="form-control" id="PreSem1" name="PreSem1">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 2</label>
                            <input type="file" class="form-control" id="PreSem2" name="PreSem2">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 3</label>
                            <input type="file" class="form-control" id="PreSem3" name="PreSem3">
                        </div>
                    </div>
            
                 </fieldset>
                 <fieldset class="scheduler-border " id="field3" >
                    <legend class="scheduler-border" >Tle</legend>
                    <div class="row mb-3">
                        <div class="col">
                            <label for="fichier">Semestre 1</label>
                            <input type="file" class="form-control" id="TleSem1" name="TleSem1">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 2</label>
                            <input type="file" class="form-control" id="TleSem2" name="TleSem2">
                        </div>
                        <div class="col">
                            <label for="fichier">Semestre 3</label>
                            <input type="file" class="form-control" id="TleSem3" name="TleSem3">
                        </div>
                    </div>
            
                 </fieldset>
        
    </fieldset>
    <fieldset class="scheduler-border container1"   >
            <legend class="scheduler-border" >BAC</legend>
                
                    <div class="row mb-3">
                        <div class="col">
                            <label for="fichier">Relevé de Note</label>
                            <input type="file" class="form-control" id="RlveNote" name="RlveNote">
                        </div>
                        <div class="col">
                            <label for="fichier">Attestation/authenticité/Diplome</label>
                            <input type="file" class="form-control" id="Attestation"  name="Attestation">
                        </div>
                    </div>
                </fieldset>
                <div class="row mb-3">
                        <div class="col">
                        <label for="nom">Passport</label>
                            <input type="file" class="form-control" id="Passport"  name="Passport" size="100">
                        </div>
                        </div>
            
                
        
    </fieldset>
   
   
    <input type="submit" name=" btnInscrires"  id=" btnInscrires"  value="Ajouter fichiers">
    <input type="reset" name="btnAnnuler" id="btnAnnuler" value="Annuler">

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