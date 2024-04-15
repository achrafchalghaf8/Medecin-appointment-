<?php

class Appointment  {
    private $Appointment_id;
    private $Appointment_date;
	private $patinet_id;

 
 
    function __construct($Appointment_id, $Appointment_date, $patinet_id) {
        $this->Appointment_id=$Appointment_id;
        $this->Appointment_date = $Appointment_date;
		$this->patinet_id = $patinet_id;
		
    }
   

    public function __get($attr) {
        if (!isset($this->$attr)) 
			return "erreur";
        else 
			return ($this->$attr);
	}
    
	public function __set($attr,$value) {
            $this->$attr = $value; 
	}
    
    
        public function __toString()
       {
        $s="<tr> <td> $this->Appointment_id </td><td> $this->Appointment_date </td><td> $this->patinet_id</td></tr>";
        return $s; 
        }
        public static function ajouterAppointment($app)
        {
            include("ConnexionBd.php");
    
            $nb = $conn->exec("insert into appointment (appointment_id,appointment_date,patient_id) values('$app->Appointment_id','$app->Appointment_date','$app->patinet_id')")
                or die(print_r($conn->errorInfo()));
    
    
    
            return $nb;
        }

		
		public static function supprimerAppointment($appointment_id	)
		{
			include("ConnexionBd.php");
			$conn->exec("delete from appointment where appointment_id	='$appointment_id	'");
		}

       
        /*public static function modifierArticle($art)
        {
            include("connexion.php");
            $statement = $conn->prepare("UPDATE article 
            SET ref = :ref, libelle = :libelle, prix = :prix, Qt_en_stock=:qte,id_fournisseur=:idfr
             WHERE ref = '$art->reference'") or die(print_r($statement->errorInfo()));
            $statement->bindParam(':ref', $art->reference);
            $statement->bindParam(':libelle', $art->libelle);
            $statement->bindParam(':prix', $art->prix);
            $statement->bindParam(':qte', $art->qteEnStock);
            $statement->bindParam(':idfr', $art->fournisseur);
            $statement->execute(); 
            return $statement;*/
           
		
		
		public static function AfficherAppointment()
        {
            include("connexion.php");
			$listappointments = [];
			$resultat = $conn->query("select * from appointment");
			foreach ($resultat as $ap)
			{				
				
                $list[] = new Appointment($ap['appointment_id	'], $ap['appointment_date'],$ap['patient_id']);
			}
            return $list;
        }
        public static function getAllAppointments()
        {
            include_once("ConnexionBd.php");
            $resultat = $conn->query("select * from appointment");
            $resultat->setFetchMode(PDO::FETCH_OBJ);
            $news = $resultat->fetchAll();
            foreach ($news as $ligne) {
                echo '<option value=' . $ligne->Appointment_date. '>' . $ligne->Appointment_id	 . '</option>';
            }
    
    }
}
?>