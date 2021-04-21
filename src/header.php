<?php
	//include("search.php");
	//$search = new Search();
    
    
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	$query = $_POST['search'];
	$newURL = "searchpage.php?search=".$query;
		if (empty($query)) {
	       // echo "Search bar is empty";
		} else {
		//	$search->query($query);
			header("Location: ".$newURL);
			exit();
			
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
			<form action = "<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
		</th>
		<th>
			<input type="text" name="search" />
		</th>
		<th>
			<p><input class="yes" type="submit" value="Search" ></input></p>
		</th>
	</tr>
</table>

