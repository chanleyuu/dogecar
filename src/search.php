<?=template_header('Search')?>
<?php
//include("searchpage.php");

	// Create connection
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	// collect value of input field
	$query = $_POST['search'];
	$newURL = "index.php?page=searchpage&search=".$query;
		if (empty($query)) {
	       // echo "Search bar is empty";
		} else {
		//	$search->query($query);
			header("Location: ".$newURL);
			exit();
			
	   		}
	}
class Search {

	public $conn;
	public $results;
	public $servername;
     public   $username;
    public    $password;
      public  $dbname;
	
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
    
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "dogecar";
        
        $results;

        $conn = new mysqli($servername, $username, $password, $dbname);
        //Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
    
        $sql = "SELECT id, make, model FROM inventory WHERE make = ".preg_replace('/[^a-zA-Z]/', '', $Search);
        //$sql->bind_param('s', $Search);
        $result = $conn->query($sql, MYSQLI_STORE_RESULT);
       

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
 <form class = "form" role = "form" method="POST" 
    >
    <input type="text" name="search" />
    <input class="yes" type="submit" value="Search" ></input>
    </form>
    
<?=template_footer()?>
