<?php

class User  {
    private $User_id;
    private $Username;
	private $password;
	private $email;
    private $role;
 
 
    function __construct($User_id, $Username, $password, $email, $role) {
        $this->User_id=$User_id;
        $this->Username = $Username;
		$this->password = $password;
		$this->email = $email;
        $this->role= $role;
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
        $s="inscrit avec succés!!!";
        return $s;
    }
    public static function connect($login,$password){
        try
    {
        include 'ConnexionBd.php';
        $req="select * from user where username='$login' and password='$password'";
        $resultat=$conn->query($req);
     
      	if($resultat->rowCount()){
                $news = $resultat->setFetchMode(PDO::FETCH_OBJ);
                
                $news = $resultat->fetch();
                
              
                    if($news->role==1){
                    echo '<script>alert("connexion avec succes espace docteur")</script>';
                    echo '<script> document.location.href="RDV today.php"</script>';
                    
                } else{
                        echo '<script>alert("bienvenue chez espace Administration")</script>';
                        echo '<script> document.location.href="View_appointment.php"</script>';
                        
                    }
                }else {
                    echo '<script>alert("verifier votre login et mdp !!!!!")</script>';
                   // echo '<script> document.location.href="authentification docteur.html"</script>';
                   include('authentification doctor.html');
                   
                


            

              //include("appointmentView");
                
            }
        		
        }
    catch (PDOException $e)
        {
        die('Erreur : ' . $e->getMessage());
        }
    } 
    
                            
    public static function ajouteruser($User)
    {
        include("ConnexionBd.php");

        $nb = $conn->exec("insert into user values('$User->User_id','$User->Username','$User->password','$User->email','$User->role')") or die(print_r($conn->errorInfo()));

        return $nb;
    }
}
?>