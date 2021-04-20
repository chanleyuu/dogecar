<?php 
     include("search.php");
    $search = new Search();
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input field
    $query = $_GET['search'];
    if (empty($query)) {
       // echo "Search bar is empty";
    } else {
        $search->query($query);
    }
?>
<style>
@import "style.css"

.yes {
  background-color: #41bcff;
  background-image: "../res/search.png";
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
</style>
<html>
<head>DogeCar</head>
<body>
<table>
	<tr>
		<th>
			<img src="../res/dogehead.png" alt="HTML5 Icon" style="width:128px;height:128px;">
		</th>
		<th>
            <img src="../res/logo.png" alt="HTML5 Icon" style="width:256px;height:128px;">
		</th>
		<th>
			<form action = "<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
		</th>
		<th>
			<input type="text" name="search" />
		</th>
		<th>
			<p><input class="yes" type="submit" value="Search" href="./searchpage.php"></input></p>
			<br>
			<br>
			<br>
			<br>
		</th>
	</tr>
<br>
<table>
    <tr>
        <th>
            <?php
            //results are passed as an array and displayed on this page.
            
            class resultpage() {
                function display($results){
                
                    foreach ($results as $value) {
                        echo "$value <br>";
                    }
                    
                }
            }
            ?>
        </th>
    </tr>
</table>
</body>
