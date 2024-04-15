<!DOCTYPE HTML>
<html>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<head>

</head>

<body>

    <?php

    include('Appointment.php');
   include('Patient.php');
  
    ?>
    <h1 size="8" style="color:#04AA6D" class="text-center mt-5"> Ajouter nouvelle consultation </h1>
    <form name="f" action="ControleAppointment.php" method="GET">
        <div class="container my-5">
  <div class="mb-3">
    <label  class="form-label">Appointment_id</label>
    <input type="text" name="Appointment_id" class="form-control" ></div>
    
    <div class="mb-3">
    <label  class="form-label">Appointment_date</label>
    <input type="date" name="Appointment_date" class="form-control" ></div>
    <label  class="form-label">Patient</label>
    <select class="form-select"  name="patinet_id"  aria-label="Default select example">
    
    
					<?php 
                    Patient::getAllPatients();
                    ?>
                    </select>
</select>

  <button type="submit" name="ajouter"  class="btn btn-success mt-3">Ajouter RDV</button>
  <button type="submit"name="supprimer"  class="btn btn-primary mt-3">Supprimer RDV</button>

  <button type="submit" name="afficher"  class="btn btn-primary mt-3">Afficher les  RDV</button>

  <button type="submit" name="deconnecter"  class="btn btn-danger mt-3">Déconnecter</button>
  <br><br><h11>*il suffit que vous entrez l'id le RDV s'efface<h11>

</div>
  
</form>
    	
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</html>