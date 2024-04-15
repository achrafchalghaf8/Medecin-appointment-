<?php

class Consultation  {
    private $consultation_id;
    private $patient_height;
	private $patient_weight;
    private $pressure_level;
	private $sugar_level;
	private $appointment_id;



 
 
    function __construct($consultation_id, $patient_height, $patient_weight,$pressure_level,$sugar_level,$appointment_id) {
        $this->consultation_id=$consultation_id;
        $this->patient_height = $patient_height;
		$this->patient_weight = $patient_weight;
        $this->pressure_level = $pressure_level;
        $this->sugar_level = $sugar_level;
        $this->appointment_id = $appointment_id;
		
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
    
    public static function ajouterConsultation($Consultation)
    {
        include("ConnexionBd.php");
    
        $nb=$conn->exec("insert into consultation values('$Consultation->consultation_id',
        '$Consultation->patient_height','$Consultation->patient_weight ,$Consultation->pressure_level',
        '$Consultation->sugar_level','$Consultation->appointment_id ')")or die(print_r($conn->errorInfo()));
        
        return $nb;
        
    } 
    
    
    public function __toString() {
        $s="<tr> <td> $this->consultation_id </td><td> $this->patient_height </td><td> $this->patient_weight </td><td> $this->pressure_level</td><td> $this->sugar_level</td><td> $this->appointment_id</td></tr>";
        return $s; 
    }
} 
?>