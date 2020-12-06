<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CHU - Espace Administratif</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="style.css"/>
  </head>
  <body>
      <div class="fond">
        <img id="logo" src="CHU-logo.png">
      </div>
      <ul id="nav_bar">
      	<li><a  href="index.html">Accueil</a></li>
      	<li><a href="#">Admissions</a></li>
      	<li><a href="#">Services</a></li>
      	<li><a href="#">Personnels</a></li>
        <li><a class="active" href="patients.php">Patients</a></li>
      </ul>
    
    <div class="tableau">
    <?php
      try {
        $bdd = new PDO('mysql:host=localhost;dbname=id15601172_hospital;charset=utf8', 'id15601172_admin', 'GCNkERLQoR-mbR+3');
      }
      catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
      }

      $patients = $bdd->query('SELECT * FROM patients');

      while ($donnees = $patients ->fetch()) {
    ?>
    <p>Patient : <?php echo $donnees['nom'];?></p>
    <?php
    }
    $patients->closeCursor();
     ?>
     </div>

</body>
</html>
