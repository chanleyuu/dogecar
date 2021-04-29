<?php
//include("searchpage.php");

	// Create connection
class Search {

	public $conn;
	public $results;
	
    function __construct(){
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dogecar";
        

        //$conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
       // if ($conn->connect_error) {
      //      die("Connection failed: " . $conn->connect_error);
      //  }
    }


    function query($Search) {

        $conn = new mysqli($servername, $username, $password, $dbname);
        Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = $conn->prepare("SELECT id, make, model FROM inventory WHERE make = ".$Search);
        //$conn->bind_param('s', $Search);
        $result = $conn->query($sql);
        $results;

        if ($result->num_rows > 0) {
        // output data of each row
            $results = array($result->num_rows);
            while($row = $result->fetch_assoc()) {
                $count = 0;
                //echo "id: " . $row["id"]. " - Name: " . $row["make"]. " " . $row["model"]. "<br>";
                $results[$count] = $row;
            }
        } else {
            echo "0 results";
        }
		$conn->close();
		return $results;
    }
    

}
?>
