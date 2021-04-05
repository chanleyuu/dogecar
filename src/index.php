<?php

   // echo "<h1>Welcome to DogeCar</h1>"
    include("search.php");
    $search = new Search();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $query = $_POST['search'];
    if (empty($query)) {
        echo "Search bar is empty";
    } else {
        $search->query($query);
    }
}
	
?>
<html>
<head>DogeCar></head>
<img src="../res/dogehead.png" alt="HTML5 Icon" style="width:128px;height:128px;">
<form action = "<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
<input type="text" name="search" />
<p><input type="submit" value="Search"/></p>
