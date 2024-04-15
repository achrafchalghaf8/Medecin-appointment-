<?php

class Patient  {
    private $Patient_id;
    private $firstname;
	private $lastname;
	private $birth;
    private $date;
 
 
    function __construct($Patient_id, $firstname, $lastname, $birth, $date) {
        $this->Patient_id=$Patient_id;
        $this->firstname = $firstname;
		$this->lastname = $lastname;
		$this->birth = $birth;
        $this->date= $date;
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
    
    
    public function __toString() {
        $s="<tr> <td> $this->Patient_id</td><td> $this->firstname </td><td> $this->lastname </td><td> $this->birth </td><td> $this->date </td></tr>";
        return $s; 
    }
    public static function getAllPatients()
    {
        include_once("ConnexionBd.php");
        $resultat = $conn->query("select * from patient");
        $resultat->setFetchMode(PDO::FETCH_OBJ);
        $news = $resultat->fetchAll();
        foreach ($news as $ligne) {
            echo '<option value=' . $ligne->patient_id. '>' . $ligne->firstname	 . '</option>';
        }
    }}
?>