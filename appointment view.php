<?php
include("ConnexionBd.php");
$req="select * from appointment";
//$contenu=$conn->query($req);
$contenu= Query('SELECT * FROM appointment');
echo'<table>';
while($ligne=$contenu->fetch()){
    echo'<tr>';
    echo'<td>';
    echo $ligne ['appointment_id	'];
    echo'</td>';
    echo'<td>';
    echo $ligne ['appointment_date	'];

    echo'</td>';
    echo'<td>';
    echo $ligne ['patient_id	'];

    echo'</td>';

    echo'</tr>';

}

echo'</table>';
