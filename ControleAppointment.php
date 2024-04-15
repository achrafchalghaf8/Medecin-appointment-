

<?php

include 'Appointment.php';

$Appointment_id = "";
$Appointment_date = "";
$patinet_id= "";





if (isset($_GET["Appointment_id"])) {
    $Appointment_id = $_GET["Appointment_id"];
}

if (isset($_GET["Appointment_date"])) {
    $Appointment_date = $_GET["Appointment_date"];
}

if (isset($_GET["patinet_id"]))
    $patinet_id = $_GET["patinet_id"];



// Ajout d'un RDV
if (isset($_GET['ajouter'])) {
    echo "<B>Informations de RDV</B><br>";
    $a1 = new Appointment($Appointment_id, $Appointment_date, $patinet_id);
    if ($Appointment_id != null && $Appointment_date != null && $patinet_id != null ) {

       
        $nb = Appointment::ajouterAppointment($a1);
        if ($nb > 0) {
            header("location:http://localhost/mes%20projets/copy/AffichageRdv.php");
            
        }
       

    }
}
// Suppression d'un RDV
if (isset($_GET['supprimer'])) {

    if ($Appointment_id != null) {
        $nb = Appointment::supprimerAppointment($Appointment_id);
        //retourner à la page "view_appointment.php" après suppression
        header('Location:View_appointment.php');
    }
}
/* Modification d'un article
if (isset($_GET['modifier'])) {

    if ($ref != null) {
        if ($libelle != null && $prix != null && $qte != null) {
            $a1 = new Article($ref, $libelle, $four, $prix, $qte);
            $nb = Article::modifierArticle($a1);
        }
    }*/
   
    if (isset($_GET["afficher"])) {
        header('Location:AffichageRdv.php');}
        
    if (isset($_GET["deconnecter"])) {
        header('Location:authentification doctor.html');}

?>
