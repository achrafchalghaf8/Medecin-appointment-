<!DOCTYPE HTML>
<html>

<head>
    <style>
    .messagErreur {
        color: red;
    }

    table {
        border-collapse: collapse;
    }

    .stylTab {
        border: 1px solid black;
    }
    </style>
</head>

<body>
    <?php

    include('Appointment.php');
   include('Consultation.php');
  
    ?>
    
    <?php


include 'ConnexionBd.php';

$sql= $conn->query('SELECT * FROM appointment '); 
$sql->setFetchMode(PDO::FETCH_OBJ);
        $appoin = $sql->fetchAll();

        ?>

   

                   <h3 align=center> <FONT size="10" align=center> <I><B>Add a new consultation</B></I></FONT>
	<center>
		   <br>   <br>   <br>   <br>   <br>
		   	 <table>
		<tr>
			<td>
	<form action="Control new consultation.php" method="get">
       <br>   <br>   <br>   <br>   <br>
         Id_consultation : <input type="number" name="consultation_id">   <br>   <br>   <br>
         patient_height: <input type="text" name="patient_height">   <br>   <br>   <br>
         patient_weight: <input type="text" name="patient_weight">   <br>   <br>   <br>
         pressure_level: <input type="text" name="pressure_level">   <br>   <br>   <br>
         sugar_level: <input type="text" name="sugar_level">   <br>   <br>   <br>
         
         appointment_id: <select name="appointment">           
                        <?php
                        foreach ($appoin as $ligne)
                        echo '<option >' .$ligne->appointment_id.'</option>'; 
                        ?>
                    
                   </select>
                </td>
            </tr>
          <tr>
            <td><input type="submit" name="ajouter" value="Ajouter consultation">
           <input type="submit" name="deconnecter" value="Déconnecter"></td>
           
        </tr>
            
        </table>
    	
    </form>
    	
</body>

</html>