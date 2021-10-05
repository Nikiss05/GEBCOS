<?php 
 class Controleur
 {
 	private $servername = "localhost";
 	private $username = "sar";
 	private $password = "sar";
 	private $database = "gebcoservice";
 	public $con;

 	//Connection a la base de donnée

 	public function __construct()
 	{
 		$this->con = new mysqli($this->servername, $this->username, $this->password, $this->database);
 		if (mysqli_connect_error()) {
 			trigger_error("Echec de connection a MySQL: " . mysqli_connect_error());
 		} else {
 		 	//changer le caractère set a utf8
 		 	$this->con->set_charset("utf8");
 		 	return $this->con;
 		}
 	}

	public function ajouterPremiereInfos($infos)
 	{
       $Nom =$this->con->real_escape_string($infos['Nom']);
       $Prenom =$this->con->real_escape_string($infos['Prenom']);
       $Pays =$this->con->real_escape_string($infos['Pays']);
	   $Email =$this->con->real_escape_string($infos['Email']);
	   $Mdp =$this->con->real_escape_string($infos['Mdp']);
     
       $requete="Insert INTO etudiantannée1 (Nom,Prenom,Pays,Email,Mdp) VALUES ('$Nom','$Prenom','$Pays','$Email','$Mdp')";
       if($this->con->query($requete)){
		   
	   }
 	}
































    
	public function AjouterEtudiant($post,$SecSem1,$SecSem2,$SecSem3,$PreSem1,
	 $PreSem2,$PreSem3,$TleSem1,$TleSem2,$TleSem3,$RlveNote,$Passport,$Attestation)
 	{
       
       $Nom =$this->con->real_escape_string($_POST['Nom']);
       $Prenom =$this->con->real_escape_string($_POST['Prenom']);
       $Pays =$this->con->real_escape_string($_POST['Pays']);
	   $Email =$this->con->real_escape_string($_POST['Email']);
	   $Mdp =$this->con->real_escape_string($_POST['Mdp']);

       $requete="insert INTO etudiantannée1 (Nom,Prenom,Pays,SecSem1,SecSem2,SecSem3,
	   PreSem1,PreSem2,PreSem3,TleSem1,TleSem2,TleSem3,RlveNote,Passport,Attestation,Email,Mdp)
        VALUES ('$Nom','$Prenom','$Pays','$SecSem1','$SecSem2','$SecSem3','$PreSem1',
		'$PreSem2','$PreSem3','$TleSem1','$TleSem2','$TleSem3','$RlveNote','$Passport',
		'$Attestation','$Email',$Mdp')";
       $sql = $this->con->query($requete);
 	}
	
	 public function existEtudiant($CodE)
 	{
 		$requete = "select * from etudiant where Email = '$CodE'";
 		$resultat = $this->con->query($requete);
 		return $resultat->num_rows;
 	}

	 public function listerEtudiant()
 	{
 		$requete = "select Nom,Prenom from etudiantannée1"; 
 		$resultat = $this->con->query($requete);
 		if ($resultat->num_rows > 0) {
 			$donnees = array();
 			while ($row = $resultat->fetch_assoc()) {
 				$donnees[] = $row;
 			}
 			return $donnees;
 		}
 	}
}
 	
?>   