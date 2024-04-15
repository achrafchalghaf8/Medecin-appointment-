<!doctype html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="inscription.css">
	<meta charset="utf-8"/>
	<title>formulaire Inscription</title>
	<style type="text/css">
     td{
     	height: 40px;
     }
	 input[type=text], input[type=password],input[type=number] {
  width: 600%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}
body{
	background-image:url(1.jpg)
}
	 
	</style>
</head>
<body>
    <nav>
   

       
      
        </nav>
        <br> <br> <br> <br><br> 
	<form name="f2"  action="controle2.php" method="GET">

		<fieldset>
			<legend><B style="color:#BEBEBE"><h1>Formulaire inscription</h1></B></legend>
			<!-- La balise Table pour formater l'affichage du formulaire -->
			<table align="left" >
				<tr>
					
					<td><label style="color:#BEBEBE">id</label></td>
					<td><input type="text" placeholder="Saisir votre id" name="User_id" minlength="2"/> </td>
				</tr>
				<tr>
					<td><label style="color:#BEBEBE">username</label></td>
					<td><input type="text" placeholder="Saisir votre nom" name="user_name" minlength="2"/> </td>
				</tr>
				<tr>
					<td><label style="color:#BEBEBE">password</label></td>
					<td><input type="password" placeholder="Ecrire votre mdp" name="password" minlength="2"/></td>
				</tr>
				<tr>
					<td><label style="color:#BEBEBE">Email</label></td>
					<td><input type="text" placeholder="Saisir votre Email" name="email" minlength="2"/></td>
				</tr>
				<tr>
					<td><label style="color:#BEBEBE">Role(0:admin,1:doctor)</label></td>
					<td><input type="number" placeholder="Saisir votre role" name="role" minlength="2"/></td>
				</tr>
				
                
				
                <?php

include('User.php');
?>
               
                
                <tr>

                    <td> <input type="submit" name="ajouter" value="s'inscrire"> </td>
    
                </tr><br>

               
            </table>
            </fieldset>
    </form>
    <form  action="authentification doctor.html">
        <fieldset>
			<legend style="color:#BEBEBE">identifier</legend>
            <table>
                <tr>
                    <td><label style="color:#BEBEBE">Avez-vous un compte?</label></td>
                    <td> <input type="submit" name="submit" value="identifier"> </td>
    
                </tr>
            </table>
        </fieldset>
        </form>
		

</body>
</html>