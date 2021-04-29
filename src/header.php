<?php
	//include("search.php");
	//$search = new Search();
    
    
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	$query = $_POST['Search'];
	$newURL = "searchpage.php?search=".$query;
		if (empty($query)) {
	       // echo "Search bar is empty";
		} else {
		//	$search->query($query);
			header("Location: ".$newURL);
			exit();
			
	   		}
	}	

echo '<table id="banner">';
echo "	<tr>";
echo "		<th>";
echo '			<img src="../res/dogehead.png" alt="HTML5 Icon" style="width:128px;height:128px;" href="index.php">';
echo "		</th>";
echo "		<th>";
echo '			<img src="../res/logo.png" alt="HTML5 Icon" style="width:256px;height:128px;">';
echo "		</th>";
echo "		<th>";
echo '			<form method="POST">';
echo "		</th>";
echo "		<th>";
echo '			<input type="text" name="search" />';
echo "		</th>";
echo "		<th>";
echo '		<p><input class="yes" type="submit" value="Search" ></input></p>';
echo "		</th>";
echo '      <th><a href="loginpage.php">Login</a></th>';
echo "	</tr>";
echo "</table>";
?>

