<?php

   // echo "<h1>Welcome to DogeCar</h1>"
    include("search.php");
	
?>
<html>
<head>DogeCar></head>
<form action = "<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
<input type="text" name="search" />
<p><input type="submit" value="Search"/></p>
