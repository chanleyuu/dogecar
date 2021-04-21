<?php
	include("search.php");
	$search = new Search();
    	$newURL = "./searchpage.php";
    
	if ($_SERVER["REQUEST_METHOD"] == "GET") {
	// collect value of input field
	$query = $_GET['search'];
		if (empty($query)) {
	       // echo "Search bar is empty";
		} else {
			$search->query($query);
			header("Location: .$newURL.php");
			die();
			
	   		}
	}	
?>
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
</table>

