<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>II perioodi arvestustöö - Ülesanne 4 - Küpsised</title>
  </head>

  <body>
  <?php
		$name = "´Arvestus´";
		$value = "Cookie on olemas";
		$expire = time() + 20;

	print_r($_COOKIE);
	if (isset($_COOKIE[$name])) {
		echo "Küpsis {$name} on saadaval";
	} else {
		echo "Küpsis {$name} pole saadaval";
	}
?>
    
  </body>
</html>