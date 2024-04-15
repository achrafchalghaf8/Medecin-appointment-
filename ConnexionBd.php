<?php


try
{
    $conn= new PDO('mysql:host=localhost;dbname=doctor_office','root','');
    
}
catch(PDOException $e)
{
    die('Erreur : '.$e->getMessage());
}

?>