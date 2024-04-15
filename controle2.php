<?php
		
		/*	$login=$_GET['login'];
			$password=$_GET['password'];
	 		include   'User.php';
			 
		
			//$s=$p->connect($login,$password);
			$s=User::connect($login,$password);
		
			
			/*if (isset($_GET['ajouter'])) {
				
						echo '<script>alert("User ajouté avec succées entrez votre login et passeword pour se connecter!")</script>';
include("authentification doctor.html");
					}*/
					



include 'User.php';

$User_id = "";
$Username = "";
$password= "";
$email = "";
$role= "";





if (isset($_GET["User_id"])) {
    $User_id = $_GET["User_id"];
}

if (isset($_GET["user_name"])) {
    $Username = $_GET["user_name"];
}

if (isset($_GET["password"]))
    $password = $_GET["password"];
	if (isset($_GET["email"])) {
		$email = $_GET["email"];
	}
	
	if (isset($_GET["role"]))
		$role = $_GET["role"];



// Ajout d'un RDV
if (isset($_GET['ajouter'])) {
    if ($User_id != null && $Username != null && $password != null && $email != null && $role != null) {

        $a1 = new User($User_id, $Username, $password, $email, $role);
        $nb = User::ajouteruser($a1);
        if ($nb > 0) {
            echo '<script>alert("Inscrit avec succés!! pour se connecter entrez votre login et mdp!")</script>';
            include_once("authentification doctor.html");
        }
 
      /*  echo "<br>";
        echo "<table class='tab'>";
        echo "<tr><td>$User_id</td><td> $Username</td><td>$password</td><td> $email</td><td>$role</td></tr>";

        echo $a1;

        echo "</table>";*/
    }
}
					
			
					
			
					
			
	

		?>
