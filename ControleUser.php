<?php
		
			$login=$_GET['login'];
			$password=$_GET['password'];
	 		include   'User.php';
			 
		
			//$s=$p->connect($login,$password);
			$s=User::connect($login,$password);
		
			
			/*if (isset($_GET['ajouter'])) {
				
						echo '<script>alert("User ajouté avec succées entrez votre login et passeword pour se connecter!")</script>';
include("authentification doctor.html");
					}*/
					
			
				
			
					
			
	

		?>
