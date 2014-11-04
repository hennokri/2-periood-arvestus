<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 3 - POST päringu tagasiside</title>
  </head>

  <body>
  <?php 
      $username = $_POST["username"];
      $sex = $_POST["sex"];

	
	if (isset($username) && isset($sex)) {
      echo "Tere {$username}! Tundub et olete {$sex}";
  	}
  
    elseif (empty($sex)) {
     	echo "Palun minge tagasi ja valige sugu.";
     }
    elseif (empty($username)) {
     	echo "Palun minge tagasi ja sisestage nimi.";
     }
	 elseif (empty($sex) && empty($username)) {
  	 	echo "Palun minge tagasi ja täitke väljad.";
  	 } 
  ?>


    <div><a href="index.php">Mine tagasi</a></div>
  </body>
</html>
