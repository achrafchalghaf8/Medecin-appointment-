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
<body>
<h3 align=center>
        <FONT size="8" align=center> <I><B style="color:#04AA6D">Liste des RDV d'aujourd'hui</B></I></FONT>
    </h3><br><br>
<table id="customers" border="1" align="center">
    <tr>
     <th> Appointment_id </th>
     <th>Appointment_date</th>
     <th>Patient_id</th>
     
    </tr>
    
    
            <?php 
            /* chargement du tableau avec les formations qui existe deja dans la base de donnée*/

                include_once("ConnexionBd.php");
               // $conn=Connexion();
                        $sql = $conn->query("select * from appointment  where appointment_date=CURRENT_DATE()");
                        
                        $donneesFormations = $sql->fetchAll();

                        foreach ($donneesFormations as $ligne) 
                        {
                            echo "<tr>
                            <td>" .$ligne[0]."</td><td>".$ligne[1]."</td><td>".$ligne[2]."</td></tr>";
                            
                        }
                      
             ?>
        
</table>    
<form name="f" action="Controlerdvtoday.php"" method="GET">
    <br><br><br>
        <table align="center">
        <tr>
                
                <button type="submit" name="ajouter"><h3>ajouter consultation</h3></button>
            </tr>
        </table>

</body>
</html>