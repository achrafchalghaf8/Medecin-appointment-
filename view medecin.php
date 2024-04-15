<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appointment</title>
</head>
<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
button {
  background-color: #04AA6D;
  color: white;
  padding: 5px 3px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}
</style>
<link rel="stylesheet" href="table.css">
<body>
<h3 align=center>
        <FONT size="8" align=center> <I><B style="color:#04AA6D">Liste des Consultations d'aujourd'hui</B></I></FONT>
        
    </h3><br><br>
<table id="customers" border="1" align="center">
    <tr>
     <th> Appointment_id </th>
     <th>Appointment_date</th>
     <th>Patient_id</th>
     <th>Firstname</th>
     <th>lastname</th>
     <th>birth_date</th>
    </tr>
    
    
            <?php 
            /* chargement du tableau avec les formations qui existe deja dans la base de donnée*/

                include_once("ConnexionBd.php");
               // $conn=Connexion();
                        $sql = $conn->query("select * from appointment join patient 
                        on appointment.patient_id=patient.patient_id where appointment_date=CURRENT_DATE()");
                        
                        $donneesFormations = $sql->fetchAll();

                        foreach ($donneesFormations as $ligne) 
                        {
                            echo "<tr>
                            <td>" .$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td><td>".
                           $ligne[4]."</td><td>".$ligne[5]."</td><td>".$ligne[6]."</td></tr>";
                            
                        }
                      
             ?>
        
</table>    
<form name="f" action="Controlmedecin.php"" method="GET">
    <br><br><br>
        <table align="center">
        <tr>
        <button type="submit" name="ajout"><h3>Ajouter consultation</h3></button>

                
            </tr>
        </table>

</body>
</html>