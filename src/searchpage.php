<style>
.yes {
  background-color: #4CAF50;
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
			<form action = "<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
		</th>
		<th>
			<input type="text" name="search" />
		</th>
		<th>
			<p><input class="yes" type="submit" value="Search"><img src="../res/search.png" alt="HTML5 Icon" style="width:128px;height:128px;"></input></p>
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
                function display($results){
                
                foreach ($results as $value) {
                    echo "$value <br>";
                }
                    
                }
            ?>
        </th>
    </tr>
</table>
</body>
